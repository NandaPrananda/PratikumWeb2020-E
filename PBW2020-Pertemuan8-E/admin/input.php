<?php
    include ('../koneksi.php');

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO user SET nim='$nim',nama='$nama',alamat='$alamat'";;
    
    mysqli_query($conn, $query);

    header("location:indexAdmin.php");
?>