<?php
$jawabanIsset = "Isset adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur dan memiliki nilai. <br><br>";
$jawabanEmpty = "empty adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel kosong.";

if (isset($jawabanIsset)) {
    echo "$jawabanIsset";
}

if (isset($jawabanEmpty)) {
    // Di sini Anda dapat menambahkan tindakan lain jika variabel $jawabanEmpty diatur.
}
?>
