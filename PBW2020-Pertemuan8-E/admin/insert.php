<?php 
include ('../koneksi.php');
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
    <h1>Silahkan Tambahkan Data</h1>
  </span>

  <div class="container">
    <form action="input.php" method="POST">
      <div class="mb-3 mx-5">
        <label class="form-label">NIM</label>
        <input type="number" class="form-control" name="nim">
      </div>
      <div class="mb-3 mx-5">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3 mx-5">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <div class="d-flex justify-content-between mx-5">
        <button class="btn btn-primary" type="submit">Submit</button>     
      </div>
    </form>
  </div>
    
</body>
</html>