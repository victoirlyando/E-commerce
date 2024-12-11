<?php
    $conn = mysqli_connect('localhost','root','','webprogdb');
    $result = mysqli_query($conn,"SELECT * FROM inputproduk");
    if (isset($_POST["cari"])) {
        $cari = $_POST["keyword"];
        
        $q = "SELECT * FROM inputproduk WHERE
        jenis LIKE '%$cari' or
        nama LIKE '%$cari'";
        $result = mysqli_query($conn, $q);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog - ujang elektrinik center</title>
    <link rel="stylesheet" href="catalog.css">
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
    <div class="cari">
    <form action="" method="post">
            <input type="text" name="keyword" size="50" placeholder="ketikkan disini" autofocus="">
            <button type="submit" name="cari">Cari</button>
    </form><br>
    <h2>Temukan Barang Yang Kamu Cari</h2>
    </div>
    <hr>
    <div class="kulit">
        <?php $i=1; while($row = mysqli_fetch_assoc($result)):?>
            <a class="catalog" href="deskripsiproduk.php?id=<?php echo $row["id"];?>">
                <img src="./images/<?= $row["foto"]; ?> " alt="">
                <b><?= $row["nama"]; ?></b>
                <p>Rp.<?= number_format($row["harga"]); ?></p>
            </a>
        <?php $i++; endwhile;?>
    </div>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Ujang Electronic Center</p> 
    </footer>
</body>
</html>