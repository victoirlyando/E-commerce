<?php
    $conn = mysqli_connect('localhost','root','','webprogdb');
    if (isset($_POST["Simpan"])){
        $kode=$_POST["kode"];
        $nama=$_POST["nama"];
        $jenis=$_POST["jenis"];
        $harga=$_POST["harga"];
        $deskripsi=$_POST["deskripsi"];
        $filename=$_FILES['foto']['name'];
        $filetmpname=$_FILES['foto']['tmp_name'];
        $folder='images/';
        move_uploaded_file($filetmpname,$folder.$filename);



        $q="INSERT INTO inputproduk VALUES('','$kode','$nama','$jenis','$harga','$deskripsi','$filename') ";
        mysqli_query($conn,$q);

        if(mysqli_affected_rows($conn)>0){
            echo "<script>
                alert('Data Berhasil Disimpan');
                // alert('".$filename ."');
                document.location.href='dataprodukadmin.php';
                </script>" ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Produk - Ujang Electronic Center</title>
    <link rel="stylesheet" href="inputprodukadmin.css">
</head>
<body>
<nav>
    <a class="logo" href="adminhome.php">Ujang Electronic Center</a>
        <ul>
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="inputprodukadmin.php"><b>Input Produk</b></a></li>
            <li><a href="dataprodukadmin.php">Data Produk</a></li>
            <li><a href="datapelangganadmin.php">Data Pelanggan</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
   
    <div class="container">
        <div class="produk">
            <h1>PRODUK PENJUALAN</h1><br>
            <form action="" method="post" enctype="multipart/form-data">
                <p>Kode Produk &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="kode" placeholder="Masukkan Kode Barang"></p>
                <p>Nama Produk &nbsp;&nbsp;&nbsp;: <input type="text" name="nama" placeholder="Masukkan Nama Produk"></p>
                <p>Jenis Produk &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="jenis" placeholder="Masukkan Jenis Produk"></p>
                <p>harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="harga" placeholder="Masukkan Harga Produk"></p>
                <p>Deskripsi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p> <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Masukkan Deskripsi Produk" ></textarea>
                <p>Foto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="file"  name="foto" placeholder="Choose File"></p>

                <button type="submit" name="Simpan" value="Simpan">Simpan</button>             
            </form>
        </div>
    </div>
</body>
</html>