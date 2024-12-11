<?php
    include 'koneksi.php';
    
    $conn = mysqli_connect('localhost','root','','webprogdb');
    if (isset($_POST['regis'])){
        $nama= $_POST['nama'];
        $Username= $_POST['username'];
        $Password= $_POST['password'];
        $email= $_POST['email'];
        $notelp=$_POST['notelp'];

        $q="INSERT INTO loginadmin VALUES('','$nama','$Username','$Password','$email','$notelp','pelanggan') ";
        mysqli_query($conn,$q);

        if(mysqli_affected_rows($conn)>0){
            echo "<script>
            
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
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
    <title>Register - Ujang Electronic Center</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="regis">
            <h1>REGISTRASI</h1><br>
            <form action="" method="post">
                <p>Nama Lengkap : <input type="text" name="nama" placeholder="Masukkan Nama Lengkap"></p>
                <p>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="username" placeholder="Masukkan Username"></p>
                <p>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="password" placeholder="Masukkan Password"></p>
                <span class="eye">
                    <i id="eye1" class="fa-solid fa-eye"></i>
                </span>
                <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="email" placeholder="Masukkan Email"></p>
                <p>No Telepon &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="notelp" placeholder="Masukkan Nomor"></p>

                <button type="submit" name="regis" value="regis">Registrasi</button>             
            </form>
        </div>
    </div>
</body>
</html>