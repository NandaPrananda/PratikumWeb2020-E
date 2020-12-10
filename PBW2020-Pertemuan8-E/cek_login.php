<?php
  session_start();

  include ('koneksi.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($conn,"select * from multiuser where username='$username' and password='$password'");
  $cek = mysqli_num_rows($login);

  if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
   
    if($data['role']=="admin"){
   
      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['role'] = "admin";
      // alihkan ke halaman dashboard admin
      header("location:./admin/indexAdmin.php");
   
    // cek jika user login sebagai pegawai
    }else if($data['role']=="pegawai"){
      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['role'] = "pegawai";
      // alihkan ke halaman dashboard pegawai
      header("location:./pegawai/indexPegawai.php");
   
    }else{
   
      // alihkan ke halaman login kembali
      header("location:index.php?pesan=gakadacuk");
    }	
  }else{
    header("location:index.php?pesan=gagal");
  }
?>