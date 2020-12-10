<?php
    include ('../koneksi.php');
    
    $nim= $_GET['nim'];

    $result = "SELECT * FROM user WHERE nim=$nim";

    $hasil = mysqli_query($conn, $result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

    <!-- css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

  <span class="d-block p-4 bg-light text-black text-center">
    <h1>Silahkan Edit Data</h1>
  </span>

  <div class="container">
    <form action="update.php" method="POST">
      <?php 
          while($i = mysqli_fetch_array($hasil)) :
      ?>
      <div class="mb-3 mx-5">
        <label class="form-label">NIM</label>
        <input type="number" class="form-control" name="nim" value="<?php echo $i['nim']; ?>">
      </div>
      <div class="mb-3 mx-5">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $i['nama']; ?>">
      </div>
      <div class="mb-3 mx-5">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $i['alamat']; ?>">
      </div>
      <input type="hidden" name="id" value="<?php echo $i['nim']; ?>">
      <div class="d-flex justify-content-between mx-5">
        <button class="btn btn-primary" type="submit">Edit</button>     
      </div> 
      <?php endwhile ?>    
    </form>
  </div>
    
</body>
</html>