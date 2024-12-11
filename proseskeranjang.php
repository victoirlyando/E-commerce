<?php
session_start();
$conn = mysqli_connect('localhost','root','','webprogdb');
// $id = $_POST["idbarang"];
$id = $_GET["idbarang"];
$sql = "SELECT * FROM inputproduk WHERE id= $id";
echo $sql;
$result = mysqli_query($conn, $sql);
$hasil =mysqli_fetch_object($result);
// echo $hasil["judul"];

$_SESSION["keranjang"][$id] = [
    "id" => $id,
    "judul" => $hasil->nama,
    "gambar" => $hasil->foto,
    "harga" => $hasil->harga
];
header("location:keranjang.php");
?>