<?php
    $conn = mysqli_connect('localhost','root','','webprogdb');
    $result = mysqli_query($conn,"SELECT * FROM loginadmin");
    if (isset($_POST["cari"])) {
        $cari = $_POST["keyword"];
        
        $q = "SELECT * FROM loginadmin WHERE
        Username LIKE '%$cari' or
        Password LIKE '%$cari'";
        $result = mysqli_query($conn, $q);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan - Ujang Electronic Center</title>
    <link rel="stylesheet" href="datapelangganadmin.css">
</head>
<body>
<nav>
    <a class="logo" href="adminhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="inputprodukadmin.php">Input Prduk</a></li>
            <li><a href="dataprodukadmin.php">Data Produk</a></li>
            <li><a href="datapelangganadmin.php"><b>Data Pelanggan</b></a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
</nav>
<main>
    <div class="container">
    <h1>DATA PELANGGAN</h1>
    <div class="">
    <form action="" method="post">
        <input type="text" name="keyword" size="50" placeholder="ketikkan disini" autofocus="">
        <button type="submit" name="cari">Cari</button>
    </form><br>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <th class="kol1">No</th>
            <th class="kol2">Nama</th>
            <th class="kol3">Username</th>
            <th class="kol4">Password</th>
            <th class="kol5">Email</th>
            <th class="kol6 none">No Telephone</th>
        </tr>
        <?php $i=1; while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td class="kol7"><?= $i ; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["Username"]; ?></td>
            <td><?= $row["Password"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td class="none"><?= $row["notelp"]; ?></td>
        </tr>
        <?php $i++; endwhile;?>
    </table>
    </div>
    </div>
</main>
</body>
</html>