<?php
$conn = mysqli_connect('localhost','root','','webprogdb');
session_start();
// echo $id = $_GET['id'];
// unset($_SESSION["keranjang"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang - Ujang Electronic Center</title>
    <link rel="stylesheet" href="keranjang.css">
</head>
<body>
    <nav> 
        <a class="logo" href="userhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="userhome.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="keranjang.php"><b>Keranjang</b></a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="bungkus1">
            <a href="catalog.php">Kembali</a>
            <h1>Keranjang Belanja</h1>
        <?php 
            if (!empty($_SESSION["keranjang"])){
                $subtotal = 0;
                // echo $_SESSION["keranjang"]
                foreach($_SESSION["keranjang"] as $cart => $val){
                    $subtotal += $val["harga"];
            ?>
            <div class="bungkus2">
                <img src="./images/<?= $val['gambar']?>" alt="">
                <div class="pe">
                    <p><?=$val['judul']?></p>
                    <p>Rp.<?= number_format ($val['harga'])?></p>
                    <P>1 item</P>
                </div>
            </div>
            <?php
            }
            ?>

        </div>
        <div class="cart">
            <table>
                <h2>Ringkasan Belanja</h2>
                <tr>
                    <td>Total Diskon</td>
                    <td>Rp 0</td>
                </tr>
                <tr>
                    <td><b>Total Harga</b></td>
                    <td><b>Rp.<?= number_format($subtotal)?></b></td>
                </tr>
            </table>
            <div class="bungkus">
                <a href="proseshapuskeranjang.php" class="bayar">Bayar</a>
            </div>
        </div>
        <?php
            } else {
                echo "<h2 style ='color:black; font-size:30px; margin-top:250px; width:1000px; text-align:center; margin-left:230px;' > Belum Ada Produk  di Keranjang Mu, Mari Berbelanja";
            }
        ?>
    </div>
</body>
</html>