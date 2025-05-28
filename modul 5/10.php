<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Input Nilai</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $grade = "";

        if ($nilai > 80) {
            $grade = "A";
        } elseif ($nilai > 70 && $nilai <= 79) {
            $grade = "B";
        } elseif ($nilai > 60 && $nilai <= 69) {
            $grade = "C";
        } elseif ($nilai > 50 && $nilai <= 59) {
            $grade = "D";
        } elseif ($nilai <= 49) {
            $grade = "Tidak Lulus";
        } else {
            $grade = "Nilai tidak valid";
        }

        echo "<hr>";
        echo "<h3>Hasil Klasifikasi Nilai</h3>";
        echo "Nama: $nama<br>";
        echo "Nilai: $nilai<br>";
        echo "Keterangan: $grade";
    }
    ?>
</body>
</html>