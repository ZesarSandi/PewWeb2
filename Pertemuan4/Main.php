<?php

// Definisikan associative array dengan 10 elemen dan 5 field data
$data = array(
    array(
        "no" => "01",
        "foto" => "<img src = '1.png' width ='190' height = '150'>", 
        "nama" => "ComputerCenter", 
        "deskripsi" => "<p> Computacenter plc adalah perusahaan multinasional Inggris yang menyediakan layanan komputer untuk pelanggan sektor publik dan swasta. 
        Ini adalah perusahaan Inggris yang berbasis di Hatfield, Hertfordshire. Perusahaan ini terdaftar di London Stock Exchange dan merupakan konstituen dari FTSE 250 Index.</p>", 
        "Tahun Berdiri" => "1981", 
        "Penghasilan Tahunan" => "£6,470.5 million"),

    array(
     "no" => "02",   
     "foto" => "<img src = '2.png' width ='190' height = '150'>",
     "nama" => "AMD Corporation", 
     "deskripsi" => "<p>Advanced Micro Devices, Inc. adalah perusahaan semikonduktor multinasional Amerika yang berbasis di Santa Clara, California, 
     yang mengembangkan prosesor komputer dan teknologi terkait untuk bisnis dan pasar konsumen.</p>", 
     "Tahun Berdiri" => "1 Mei 1969", 
     "Penghasilan Tahunan" => "US$6.48 miliar"),

    array(
     "no" => "03",   
     "foto" => "<img src = '3.png' width ='190' height = '150'>",
     "nama" => "Sony", 
     "deskripsi" => " <p>perusahaan konglomerat Jepang yang berkantor pusat di Minato, Tokyo. 
     Bisnisnya yang beragam meliputi elektronik konsumen dan profesional, permainan, hiburan, serta layanan keuangan.
     </p>", 
     "Tahun Berdiri" => "7 May 1946", 
     "Penghasilan Tahunan" => "¥11.540 trillion"),

    array(
     "no" => "04",   
     "foto" => "<img src = '4.png' width ='190' height = '150'>",
     "nama" => "Tesla, inc.", 
     "deskripsi" => "Tesla, Inc. adalah sebuah perusahaan otomotif dan penyimpanan energi asal Amerika Serikat yang didirikan oleh Martin Eberhard, 
     Marc Tarpenning, JB Straubel dan Ian Wright, serta berbasis di Palo Alto, California. Perusahaan ini memiliki spesialisasi di mobil listrik, komponen mesin, 
     dan juga memproduksi perangkat pengisi ulang baterai.", 
     "Tahun Berdiri" => "Juli 2003", 
     "Penghasilan Tahunan" => "US$31,54 milliar"),

    array(
     "no" => "05",   
     "foto" => "<img src = '5.png' width ='190' height = '150'>",
     "nama" => "Oracle Corporation", 
     "deskripsi" => "Oracle Corporation adalah sebuah perusahaan teknologi komputer multinasional yang berkantor pusat di Austin, Texas. 
     Perusahaan ini menjual perangkat lunak dan teknologi basis data, sistem komputasi awan, dan perangkat lunak perusahaan—terutama sistem manajemen basis data buatannya sendiri.", 
     "Tahun Berdiri" => "16 Juni 1977", 
     "Penghasilan Tahunan" => "US$39,07 milyar"),

    array(
     "no" => "06",   
     "foto" => "<img src = '6.png' width ='190' height = '150'>",
     "nama" => "NVIDIA Corporation", 
     "deskripsi" => "NVIDIA Corporation adalah perusahaan teknologi multinasional Amerika yang didirikan di Delaware dan berbasis di Santa Clara, California. 
     Perusahaan tersebut merancang unit pemroses grafis untuk pasar gim dan profesional, serta unit system on a chip untuk komputasi seluler dan pasar otomotif.", 
     "Tahun Berdiri" => "April 1993", 
     "Penghasilan Tahunan" => " US$11,7 miliar"),

    array(
     "no" => "07",   
     "foto" => "<img src = '7.png' width ='190' height = '150'>",
     "nama" => "Samsung Electronics", 
     "deskripsi" => "Samsung Electronics Co., Ltd. adalah sebuah perusahaan elektronik multinasional yang berkantor pusat di Distrik Yeongtong, Suwon, Korea Selatan. 
     Perusahaan ini adalah inti dari chaebol Samsung, karena menyumbang 70% dari total pendapatan grup tersebut pada tahun 2012.", 
     "Tahun Berdiri" => "13 Januari 1969", 
     "Penghasilan Tahunan" => "US$200,6 milyar"),

    array(
     "no" => "08",   
     "foto" => "<img src = '8.png' width ='190' height = '150'>",
     "nama" => "Dell Technologies", 
     "deskripsi" => "Dell, Inc., adalah sebuah perusahaan berbasis di Round Rock, Texas, Amerika Serikat, memproduksi dan memasarkan perangkat keras komputer. 
     Sebagian pasarnya berada di komputer pribadi, tetapi Dell juga menjual server, alat penyimpanan data, switch jaringan, dan kluster komputer untuk perusahaan.", 
     "Tahun Berdiri" => "US$ 63,07 miliar", 
     "Penghasilan Tahunan" => "1 Mei 1984"),

    array(
     "no" => "09",   
     "foto" => "<img src = '9.png' width ='190' height = '150'>",
     "nama" => "Google, LLC", 
     "deskripsi" => "Google LLC adalah sebuah perusahaan multinasional Amerika Serikat yang berkekhususan pada jasa dan produk Internet. 
     Produk-produk tersebut meliputi teknologi pencarian, komputasi web, perangkat lunak, dan periklanan daring. Sebagian besar labanya berasal dari AdWords.", 
     "Tahun Berdiri" => "4 September 1998", 
     "Penghasilan Tahunan" => "US$257,63 miliar"),

    array(
     "no" => "10",   
     "foto" => "<img src = '10.png' width ='190' height = '150'>",
     "nama" => "Adobe Inc.", 
     "deskripsi" => "Adobe Inc. adalah sebuah perusahaan perangkat lunak komputer multinasional yang didaftarkan sebagai sebuah badan hukum di Delaware dan berkantor pusat di San Jose, California.", 
     "Tahun Berdiri" => "Desember 1982", 
     "Penghasilan Tahunan" => "US$11,17 milyar"),
);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
    
echo "<table border='1'>";
echo "<tr><th>No</th><th>FOTO</th><th>NAMA PERUSAHAAN</th><th>DESKRIPSI</th><th>TAHUN BERDIRI</th><th>PERNGHASILAN TAHUNAN</th></tr>";

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['no'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['Tahun Berdiri'] . "</td>";
    echo "<td>" . $row['Penghasilan Tahunan'] . "</td>";
    echo "</tr>";
}

echo "</table>";


    ?>

</body>
</html>



