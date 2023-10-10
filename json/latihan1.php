<?php

// $mahasiswa = [
//   [
//     "nama" => "Dhayus Syahri",
//     "nrp" => "201620177",
//     "email" => "dhayus190997@gmail.com"
//   ],
//   [
//     "nama" => "Kamal",
//     "nrp" => "201620178",
//     "email" => "kamal190997@gmail.com"
//   ]
// ];
// *

// encode
$dbh = new PDO('mysql:host=localhost;dbname=skripsi', 'root','');
$db = $dbh->prepare('SELECT * FROM transaksi');
$db->execute();
$transaksi = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($transaksi);
echo $data;
?>