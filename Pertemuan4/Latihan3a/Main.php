<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Style</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    function ganti_style($tulisan, $kelas) {
        echo "<h1 class='$kelas'>$tulisan</h1>";
    }

    ganti_style("Ini Latihan 3a", "nama kelas");
    ?>
</body>
</html>
