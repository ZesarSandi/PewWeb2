<?php

$data = array(
    array(
        'Foto' => 1234561,
        'Nama Mhs' => 'Budaya 1',
        'Tanggal Lahir' => 'Gambar1.jpg',
        'Alamat' => 'Deskripsi tentang Budaya Daerah 1',
        'Nomor Telepon' => 'Budaya Daerah di Indonesia'
    ),
    array(
        'Foto' => 1234561,
        'Nama Mhs' => 'Budaya 1',
        'Tanggal Lahir' => 'Gambar1.jpg',
        'Alamat' => 'Deskripsi tentang Budaya Daerah 1',
        'Nomor Telepon' => 'Budaya Daerah di Indonesia'
    ),
    array(
        'Foto' => 1234561,
        'Nama Mhs' => 'Budaya 1',
        'Tanggal Lahir' => 'Gambar1.jpg',
        'Alamat' => 'Deskripsi tentang Budaya Daerah 1',
        'Nomor Telepon' => 'Budaya Daerah di Indonesia'
    ),
    
    // Lanjutkan dengan entri data berikutnya...
);

// Cetak tabel HTML
echo '<table border="1">
        <tr>
            <th>Foto</th>
            <th>Nama Mhs</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>';

foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['Foto'] . '</td>';
    echo '<td>' . $entry['Nama Mhs'] . '</td>';
    echo '<td>' . $entry['Tanggal Lahir'] . '</td>';
    echo '<td>' . $entry['Alamat'] . '</td>';
    echo '<td>' . $entry['Nomor Telepon'] . '</td>';
    echo '</tr>';
}

echo '</table>';

?>