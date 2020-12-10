<?php
    include ('../koneksi.php');

    $id= $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE user SET nim=$nim,nama='$nama',alamat='$alamat' WHERE nim=$id";
    
    mysqli_query($conn, $query);

    header("location:indexPegawai.php");
?>