<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
define("NAMA_SITUS", "Belajar PHP Dasar");
define("MAX_UPLOAD", 10); 
define("VERSI", "1.0.3");


echo "Selamat datang di " . NAMA_SITUS . "<br>";
echo "Ukuran maksimal upload adalah " . MAX_UPLOAD . " MB<br>";
echo "Versi aplikasi: " . VERSI;
?>
</body>
</html>