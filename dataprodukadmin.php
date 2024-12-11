<?php
    $conn = mysqli_connect('localhost','root','','webprogdb');
    $result = mysqli_query($conn,"SELECT * FROM inputproduk");
    if (isset($_POST["cari"])) {
        $cari = $_POST["keyword"];
        
        $q = "SELECT * FROM inputproduk WHERE
        kode LIKE '%$cari' or
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
    <title>Data Produk - Ujang Electronic Center</title>
    <link rel="stylesheet" href="dataprodukadmin.css">
</head>
<body>
<nav>
    <a class="logo" href="adminhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="inputprodukadmin.php">Input Produk</a></li>
            <li><a href="dataprodukadmin.php"><b>Data Produk</b></a></li>
            <li><a href="datapelangganadmin.php">Data Pelanggan</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>DATA PRODUK</h1>
        <div class="cek">
            <a href="inputprodukadmin.php" class="inputproduk">Input Data Produk</a>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="keyword" size="50" placeholder="ketikkan disini" autofocus="">
                <button type="submit" name="cari">Cari</button>
            </form><br>

            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th class="kol1">no</th>
                    <th class="kol2">kode</th>
                    <th class="kol3">nama Produk</th>
                    <th class="kol4">jenis Produk</th>
                    <th class="kol5">harga Produk</th>
                    <th class="kol6">foto</th>
                    <th class="none">tindakan</th>
                </tr>
                 <?php $i=1; while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?= $i ; ?></td>
                    <td><?= $row["kode"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["jenis"]; ?></td>
                    <td>Rp.<?= number_format($row["harga"]); ?></td>
                    <td><img width="200" src="./images/<?= $row["foto"]; ?>" alt=""></td>
                    <td class="kol7 none"><a href="editproduk.php?id=<?php echo $row["id"];?>">EDIT</a> | <a href="hapusproduk.php?id=<?php echo $row["id"];?>">HAPUS</a></a></td>
                </tr>
            <?php $i++; endwhile;?>
            </table>
        </div>
    </div>
</body>
</html>