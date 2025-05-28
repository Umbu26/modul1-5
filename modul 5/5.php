<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama = "Umbu Nandar";
        $umur = 20;
        $tinggi = 170.5;
        $isMahasiswa = true;

        echo "Nama: $nama<br>";
        echo "Tipe data nama: " . gettype($nama) . "<br><br>";

        echo "Umur: $umur<br>";
        echo "Tipe data umur: " . gettype($umur) . "<br><br>";

        echo "Tinggi: $tinggi cm<br>";
        echo "Tipe data tinggi: " . gettype($tinggi) . "<br><br>";

        echo "Mahasiswa: " . ($isMahasiswa ? "Ya" : "Tidak") . "<br>";
        echo "Tipe data mahasiswa: " . gettype($isMahasiswa) . "<br>";
?>

</body>
</html>