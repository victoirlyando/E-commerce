<?php
    require 'koneksi.php';

    $conn = mysqli_connect('localhost','root','','webprogdb');
    $id = $_GET["id"];

    mysqli_query($conn, "DELETE FROM inputproduk WHERE id='$id'");

    if (mysqli_affected_rows($conn)>0) {
        echo "<script>
        
            alert('Data Berhasil dihapus');
            document.location.href='dataprodukadmin.php';
            </script>";
    }
?>