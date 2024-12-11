<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:userhome.php');
   }
}
if (!isset($_SESSION['level']))
{
	header('location:../index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin - Ujang Electronic Center</title>
    <link rel="stylesheet" href="adminhome.css">
</head>
<body>
    <nav>
        <a class="logo" href="adminhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="adminhome.php"><b>Home</b></a></li>
            <li><a href="inputprodukadmin.php">Input Produk</a></li>
            <li><a href="dataprodukadmin.php">Data Produk</a></li>
            <li><a href="datapelangganadmin.php">Data Pelanggan</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="container">
            <h1>Welcome to Ujang Electronic Center</h1>
                <a href="dataprodukadmin.php">STORAGE TOKO</a>
                <p>~ Menjual Berbagai Macam Barang Elektronika ~</p>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Ujang Electronic Center</p> 
    </footer>
</body>
</html>

