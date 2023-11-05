<?php

$mahasiswa = [
    "001"=> "ahmad",
    "002"=> "budi",
    "003"=> "chika",
    "004"=> "dhini",
    "005"=> "erwin" ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>

</body>
</html>