<?php
    include ('../koneksi.php');

    $nim   = $_GET['nim'];

    $query = "DELETE FROM user WHERE nim=$nim";
    
    mysqli_query($conn, $query);

    header("location:indexAdmin.php");
?>