<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm - TravelWebgis</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="search-container">
            <h1>TRAVEL WEBGIS</h1>
            <p id ="para" >VI VU VIỆT NAM!!</p>
            <input type="text" id="search" placeholder="Vi vu cùng travelwebgis tại đây...">
            <button id="search-btn">Tìm kiếm</button>
            <div id="tourisms"></div>
            <button id="load-more-btn">Tải thêm</button>
        </div>
        <div id="map"></div>
    </div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="js/app.js"></script>
</body>
</html>