<?php 

error_reporting (0);

session_start();

function jam($timezone, $timestamp){
    $timezone = date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('H:i');
    echo 'Waktu Absensi: ' . $timestamp;
}

$data = $_SESSION['username'];
foreach ($data as $result) {
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h2>Selamat Pagi"?>
            <?php echo "<h3>Absensi Berhasil!," .  $_SESSION['username']  ."!". "</h1>"; ?>
            <?php echo "<h3>Selamat Bekerja!"?>
            <div id= 'jam'></div>
                <?php jam($timezone, $timestamp); ?>
            <div class="container-img">
                <img src="kopi2.png">      
            <div class="input-group">
            <a href="logout.php" class="btn">Tutup</a>
            </div>
        </form>
    </div>
</body>
</html>