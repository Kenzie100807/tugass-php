<?php

$www = [ [
    "nama" => " kenziee", 
    "kelas" => " X RPL 2", 
    "alamat" => "THE PLAZA Seoul, Autograph Collection",
    "nisn" => "00829848",
    "no_wa" => "087881330705",
    "hobi" => "Denger music & Main Game",
    "cita_cita" => "punya usaha di korea"],

 ["nama" => "bima", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. kancil ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "tidur",
 "cita_cita" => "tamat epep"],

 ["nama" => "okta", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. gambir ",
 "nisn" => "007723892",
 "no_wa" => "081646854239",
 "hobi" => "potografi",
 "cita_cita" => "membuat desain baju"],

 ["nama" => "virda", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. pademangan",
 "nisn" => "0077286382",
 "no_wa" => "08164683982",
 "hobi" => "main game",
 "cita_cita" => "winstreak ml"],

 ["nama" => "eji", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. mabes ",
 "nisn" => "007728349",
 "no_wa" => "081643483768",
 "hobi" => "main bola",
 "cita_cita" => "jadi biduan"],

 ["nama" => "messi", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. kober ",
 "nisn" => "0077282219",
 "no_wa" => "081644883422",
 "hobi" => "makeup",
 "cita_cita" => "jadi dancer"],

 ["nama" => "dika", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. setka ",
 "nisn" => "0077223489",
 "no_wa" => "081288849237",
 "hobi" => "masak",
 "cita_cita" => "juara mastercheff"],

 ["nama" => "akbir", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. mabes ",
 "nisn" => "002238884",
 "no_wa" => "08238884772",
 "hobi" => "dandan",
 "cita_cita" => "penari tiang"],

 ["nama" => "rio", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. tanah abang ",
 "nisn" => "0077283449",
 "no_wa" => "08164623994",
 "hobi" => "mancing",
 "cita_cita" => "jadi manager apple"],

 ["nama" => "ijal", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. glodok ",
 "nisn" => "00772333339",
 "no_wa" => "08888374772",
 "hobi" => "ngoding",
 "cita_cita" => "programer darkweb"]
 
];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Array</title>
 </head>
 <body>
    <h1> peserta didik smk jakarta pusat 1 </h1>
    <table border = "1" cellpadding = "8">
        <tr>
            <td>Nama lengkap</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Nisn</td>
            <td>Nomor WhatsApp</td>
            <td>Hobi</td>
            <td>Cita-cita</td>
        </tr>
        <tr>
    <?php foreach($www as $data) : ?>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["nisn"]; ?></td>
            <td><?= $data["no_wa"]; ?></td>
            <td><?= $data["hobi"]; ?></td>
            <td><?= $data["cita_cita"]; ?></td>
        <tr/>
        <?php endforeach; ?>
        </table>
 </body>
 </html>