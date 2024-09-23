<?php 
    if($_POST){
        $NIK=$_POST['NIK'];
        $password=$_POST['password'];
        if(empty($NIK)){
            echo "<script>alert('NIK tidak boleh kosong');location.href='login_pegawai.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_pegawai.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from Tabel_pegawai where NIK = '".$NIK."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['Id']=$dt_login['Id'];
                $_SESSION['Nama']=$dt_login['Nama'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('NIK dan Password tidak benar');location.href='login_pegawai.php';</script>";
            }
        }
    }
?>

