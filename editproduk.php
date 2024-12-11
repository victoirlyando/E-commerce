<?php
require 'koneksi.php';

$conn = mysqli_connect('localhost', 'root','', 'webprogdb');
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM inputproduk WHERE id='$id'");

if(isset($_POST["edit"])){
	$kode = $_POST["kode"];
	$nama = $_POST["nama"];
    $jenis=$_POST["jenis"];
	$harga = $_POST["harga"];
	$deskripsi = $_POST["deskripsi"];
    $filename=$_FILES['foto']['name'];
    $filetmpname=$_FILES['foto']['tmp_name'];
    $folder='images/';
    move_uploaded_file($filetmpname,$folder.$filename);

	$q = "UPDATE inputproduk SET
 	kode ='$kode',
    nama = '$nama',
    jenis = '$jenis',
	harga = '$harga',
	deskripsi = '$deskripsi',
    foto = '$filename'

 	WHERE id='$id'";
	mysqli_query($conn,$q);


	if(mysqli_affected_rows($conn)>0){
		echo "<script>

		alert('Data Telah Berhasil Diubah');
		document.location.href='dataprodukadmin.php';
		</script>";
	} else {
		echo "<script>

		alert('Data Tidak Ada Yang Diubah');
		document.location.href='dataprodukadmin.php';
		</script>";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Ujang Electronic Center</title>
    <link rel="stylesheet" href="editproduk.css">
</head>
<body>
<nav>
    <div class="container">
        <div class="produk">
            <h1>Edit Data Produk</h1><br>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <p>Kode Produk &nbsp;&nbsp;&nbsp;:  <input type="text" name="kode" placeholder="Masukkan Kode Barang" value="<?php echo $row["kode"]; ?>"></p>
                    <p>Nama Produk &nbsp;&nbsp;&nbsp;: <input type="text" name="nama" placeholder="Masukkan Nama Produk" value="<?php echo $row["nama"]; ?>"></p>
                    <p>Jenis Produk &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="jenis" placeholder="Masukkan Jenis Produk" value="<?php echo $row["jenis"]; ?>"></p>
                    <p>harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="harga" placeholder="Masukkan Harga Produk" value="<?php echo $row["harga"]; ?>"></p>
                    <p>Deskripsi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <textarea name="deskripsi" id="deskripsi" cols="36" rows="5"><?php echo $row["deskripsi"]; ?></textarea></p>
                    <p>Foto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="file" name="foto" placeholder="Choose File" value="<?php echo $row["foto"]; ?>"></p>
                    <button type="submit" name="edit" value="edit">Simpan</button
                    
                    <?php endwhile; ?>>             
                </form>
                

        </div>
    </div>
</body>
</html>