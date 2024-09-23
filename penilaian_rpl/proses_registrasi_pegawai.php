<?php
if($_POST){
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Jenis_kelamin = $_POST['Jenis_kelamin']; 
    $No_telp = $_POST['No_telp'];
    $Jabatan = $_POST['Jabatan'];
    $password = $_POST['password'];

    include "koneksi.php";
        
    
    if(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } else if(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } else {
        $query = "INSERT INTO `Tabel_pegawai`(`NIK`, `Nama`, `Alamat`, `Jenis_kelamin`, `No_telp`, `Jabatan`, `password`) VALUES ('$NIK','$Nama','$Alamat','$Jenis_kelamin','$No_telp','$Jabatan','".md5($password)."')";
        $insert = mysqli_query($conn, $query);
        
        if($query){
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='registrasi_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='registrasi_pegawai.php';</script>";
        }
    }
}
?>