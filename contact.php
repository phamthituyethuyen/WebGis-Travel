<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ - TravelWebgis</title>
    <link rel="stylesheet" href="styles.css" charset ="UTF-8" type="text/css" >
</head>
<body class="contact-page-body">
    <?php include 'navbar.php'; ?>
    <div class="contact-page-content">
        
        <div class="contact-info">
            <h2>GET IN TOUCH</h2>
            <p><strong>Give TravelWebgis a ring</strong></p>
            <p>+44 (0) 20 3021 1494</p>
            <p><strong>Pop us an email</strong></p>
            <p>info@glg-group.com</p>
        </div>
        <div class="contact-form">
            <form action="contactDB.php" method="post">
                <input type="text" name="name" placeholder="Họ và tên của bạn" autocomplete="name">
                <input type="email" name="email" placeholder="Địa chỉ email" autocomplete="email">
                <input type="tel" name="phone" placeholder="Số điện thoại của bạn" autocomplete="tel">
                <textarea name="message" placeholder="Cách chúng tôi có thể giúp bạn?" autocomplete="off"></textarea>
                <button type="submit" class ="submit">Gửi cho TravelWebgis</button>
            </form>
        </div>
    </div>
</body>
</html>