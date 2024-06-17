<?php

// $mahasiswa = [
//     [
//         "nama" => "Nadindra Maulana Aziz",
//         "npm" => "2210631170139",
//         "email" => "maulananadindra@gmail.com"
//     ],
//     [
//         "nama" => "Joyce",
//         "npm" => "2210631170001",
//         "email" => "loveu3000@gmail.com"
//     ]
// ];

// Connect menggunakan database
$dbh = new PDO('mysql:host=localhost;dbname=tugaschallenge', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC); // fetch_assoc untuk mengubah menjadi array associative

$data = json_encode($mahasiswa);
echo $data;
?>