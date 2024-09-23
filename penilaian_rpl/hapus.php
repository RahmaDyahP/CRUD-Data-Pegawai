<?php 
if($_GET['Id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from Tabel_pegawai where Id='".$_GET['Id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus pegawai');location.href='tampil_pegawai.php';</script>";
        }
    }
?>