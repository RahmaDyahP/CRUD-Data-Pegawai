<?php
if ($_POST) {
    $Id = $_POST['Id'];
    $Nama = $_POST['Nama'];
    $NIK = $_POST['NIK'];
    $Alamat = $_POST['Alamat'];
    $Jenis_kelamin = $_POST['Jenis_kelamin'];
    $No_telp = $_POST['No_telp'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['id_jabatan'];

    if (empty($Nama)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif (empty($NIK)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE `Tabel_pegawai` SET `NIK`='$NIK',`Nama`='$Nama',`Alamat`='$Alamat',`Jenis_kelamin`='$Jenis_kelamin',`No_telp`='$No_telp',`Jabatan`='$id_jabatan' WHERE `Id`='$Id' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id=" . $id . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "UPDATE `Tabel_pegawai` SET `NIK`='$NIK',`Nama`='$Nama',`Alamat`='$Alamat',`Jenis_kelamin`='$Jenis_kelamin',`No_telp`='$No_telp', 'password' = '".md5($password)."',`Jabatan`='$id_jabatan' WHERE `Id`='$Id' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id=" . $id . "';</script>";
            }
        }

    }
}

?>