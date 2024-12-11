<?php
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
      include 'adminhome.php';
   }
   else if ($_SESSION['level'] == "user")
   {
       include 'userhome.php';
   }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home User - Ujang Electronic Center</title>
    <link rel="stylesheet" href="userhome.css">
</head>
<body>
    <nav>
        <a class="logo" href="userhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="userhome.php"><b>Home</b></a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
<section>
    <div class="container">
            <h1>Welcome to Ujang Electronic Center</h1>
            <a href="catalog.php">Belanja Sekarang</a>
            <p>~ Menjual Berbagai Macam Barang Elektronika ~</p>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Ujang Electronic Center</p> 
    </footer>
</body>
</html>