<?php
header('Content-Type: application/json');

function logError($message) {
    file_put_contents('error_log.txt', date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
}

try {
    $dsn = 'pgsql:host=localhost;dbname=webgis;user=postgres;password=30122003';
    $pdo = new PDO($dsn);
} catch (PDOException $e) {
    logError("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
    echo json_encode(['error' => 'Lỗi kết nối cơ sở dữ liệu']);
    exit;
}

$location = $_GET['q'];
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$resultsPerPage = isset($_GET['results_per_page']) ? (int)$_GET['results_per_page'] : 5;
$offset = ($page - 1) * $resultsPerPage;

$nominatimUrl = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($location);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $nominatimUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'YourCustomUserAgent');
$nominatimResponse = curl_exec($ch);

if (curl_errno($ch)) {
    logError("Lỗi cURL: " . curl_error($ch));
}
curl_close($ch);

if ($nominatimResponse === FALSE) {
    logError("Không thể kết nối với API Nominatim");
    echo json_encode(['error' => 'Không thể kết nối với API Nominatim']);
    exit;
}

logError("Phản hồi từ API Nominatim: " . $nominatimResponse);

$nominatimData = json_decode($nominatimResponse, true);

if ($nominatimData === null) {
    logError("Lỗi giải mã JSON: " . json_last_error_msg());
    echo json_encode(['error' => 'Lỗi giải mã JSON từ API Nominatim']);
    exit;
}

if (count($nominatimData) > 0) {
    $boundingBox = $nominatimData[0]['boundingbox'];
    $minLat = $boundingBox[0];
    $maxLat = $boundingBox[1];
    $minLng = $boundingBox[2];
    $maxLng = $boundingBox[3];

    try {
        $stmt = $pdo->prepare("
            SELECT tourism, ST_AsGeoJSON(geom) as geom 
            FROM travel 
            WHERE ST_Within(geom, ST_MakeEnvelope(:minLng, :minLat, :maxLng, :maxLat, 4326))
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindParam(':minLng', $minLng);
        $stmt->bindParam(':minLat', $minLat);
        $stmt->bindParam(':maxLng', $maxLng);
        $stmt->bindParam(':maxLat', $maxLat);
        $stmt->bindParam(':limit', $resultsPerPage, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $tourisms = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($tourisms);
    } catch (PDOException $e) {
        logError("Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage());
        echo json_encode(['error' => 'Lỗi truy vấn cơ sở dữ liệu']);
    }
} else {
    logError("Không tìm thấy địa danh");
    echo json_encode(['error' => 'Không tìm thấy địa danh']);
}
?>
