<?php
include "koneksi.php";
session_start();
unset($_SESSION["keranjang"]);
echo "<script>
        alert('pembayaran anda sedang di proses');
        document.location.href='selesaiuser.php';
        </script>";
?>