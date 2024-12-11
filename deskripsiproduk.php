<?php
require 'koneksi.php';

$conn = mysqli_connect('localhost', 'root','', 'webprogdb');
 $id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM inputproduk WHERE id='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog - Ujang Electronic Center</title>
    <link rel="stylesheet" href= "deskripsiproduk.css">
</head>
<body>
<nav>
    <a class="logo" href="userhome.php">Ujang Electronic Center</a>
    <ul>
        <li><a href="userhome.php">Home</a></li>
        <li><a href="catalog.php"><b>Catalog</b></a></li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>
<div class="container">
<?php while($row = mysqli_fetch_assoc($result)): ?>
    <div class="deskripsi">
        <h1><?= $row['nama']?></h1>
        <p><?= $row['deskripsi']?></p>
    </div>
    <img src="images/<?= $row['foto']?>" alt="">
    <form action="proseskeranjang.php" methot="post">
    <div class="harga">
        <b>Rp. <?= number_format($row["harga"]);?></b><br><br>
        <p>Sudah termasuk PPN</p><br><br>
        <input type="text" value="<?= $_GET["id"];?>" name="idbarang" hidden>
        <button class="button">Masukkan Keranjang</button>
    </div>
    </form>
    <?php endwhile; ?>
</div>
    <footer>
        <p>Copyright &copy; 2022 Ujang Electronic Center</p> 
    </footer>
</body>
</html>