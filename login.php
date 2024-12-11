<?php
    include 'koneksi.php';
    session_start();
    
    $conn = mysqli_connect('localhost','root','','webprogdb');
    if (isset($_POST['input'])){
        $Username= $_POST['username'];
        $Password= $_POST['password'];

        $login = mysqli_query($koneksi,"SELECT * FROM loginadmin WHERE username='$Username' AND password='$Password'");
        $cek = mysqli_num_rows($login);

        if($cek > 0){
        $data = mysqli_fetch_assoc($login);
 
        // cek jika user login sebagai admin
        if($data['level']=="admin"){
            // buat session login dan username
            $_SESSION['username'] = $Username;
            $_SESSION['password'] = $Password;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            // echo "login berhasil kedalam admin";
            header("location:adminhome.php");
            // echo "<script>
            // alert('login admin berhasil');
            // document.location.href='adminhome.php';
            // </script>";
     
        // cek jika user login sebagai pelanggan
        }else if($data['level']=="pelanggan"){
            $_SESSION['username'];
            $_SESSION['password'];
            $_SESSION['level'] = "pelanggan";    
            header("location:userhome.php");
            //     echo "<script>
            // alert('login Anda Berhasil');
            // document.location.href='userhome.php';
            // </script>";
            }
        }
        else{
            echo "<script>
        alert('login Anda gagal');
        document.location.href='index.php';
        </script>";
        }
    }
?>
