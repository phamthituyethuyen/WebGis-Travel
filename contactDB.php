<?php

// Kết nối đến cơ sở dữ liệu (thay đổi thông tin kết nối cho phù hợp)
$servername = "localhost";
$username = "postgres";
$password = "30122003";
$dbname = "webgis";

try {
    $conn = new PDO("pgsql:host=$servername;dbname=$dbname;user=$username;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Biến để lưu thông báo
    $message = '';

    // Kiểm tra nếu form được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin từ form và làm sạch đầu vào
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $messageContent = htmlspecialchars($_POST['message']);
        $phone = htmlspecialchars($_POST['phone']);

        // Kiểm tra hợp lệ của email và tên
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Email không hợp lệ. Vui lòng nhập một địa chỉ email đúng định dạng.";
        } elseif (strlen($name) < 2) {
            $message = "Tên phải chứa ít nhất 2 ký tự.";
        } else {
            // Thực hiện truy vấn để chèn dữ liệu vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO contact_info (name, email, message, phone_number) VALUES (:name, :email, :message, :phone)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $messageContent);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
            $message = "Thông tin đã được gửi thành công!";
        }
    }
} catch (PDOException $e) {
    $message = "Lỗi: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <ink rel="stylesheet" href="styles.css" charset ="UTF-8" type="text/css">
</head>
<body class="contact-page-body">
    <?php include 'navbar.php'; ?>
    <div class="contact-page-content">
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php else: ?>
            <div class="contact-info">
                <h2>GET IN TOUCH</h2>
                <p><strong>Give TravelWebgis a ring</strong></p>
                <p>+44 (0) 20 3021 1494</p>
                <p><strong>Pop us an email</strong></p>
                <p>info@glg-group.com</p>
            </div>
            <div class="contact-form">
                <h1 id="contact-logo">TRAVEL WEBGIS</h1>
                <form action="search.php" method="post">
                    <input type="text" name="name" placeholder="Họ và tên của bạn" autocomplete="name">
                    <input type="email" name="email" placeholder="Địa chỉ email" autocomplete="email">
                    <input type="tel" name="phone" placeholder="Số điện thoại của bạn" autocomplete="tel">
                    <textarea name="message" placeholder="Cách chúng tôi có thể giúp bạn?" autocomplete="off"></textarea>
                    <button type="submit">Gửi cho TravelWebgis</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
