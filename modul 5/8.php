<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $nilai1 = true;
            $nilai2 = false;

            if ($nilai1 && $nilai2) {
                echo "Keduanya bernilai true (AND)<br>";
            } else {
                echo "Salah satu bernilai false, hasil AND adalah false<br>";
            }

            $login = false;

            if (!$login) {
                echo "Anda belum login (NOT)";
            } else {
                echo "Selamat datang!";
            }
?>
</body>
</html>