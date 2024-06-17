<?php

$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true); //menjadi array
$mahasiswa2 = json_decode($data); //menjadi object

var_dump($mahasiswa);
echo $mahasiswa[0]["hobby"][1];
?>