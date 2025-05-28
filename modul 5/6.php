<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $angka_float = 12.75;

        // Type casting dari float ke integer
        $angka_integer = (int) $angka_float;

        echo "Nilai float: $angka_float<br>";
        echo "Setelah casting ke integer: $angka_integer<br>";
        echo "Tipe data setelah casting: " . gettype($angka_integer);
?>
</body>
</html>