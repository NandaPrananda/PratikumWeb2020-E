<?php 
include ('koneksi.php');
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
  <div class="container rounded-3 bg-light mt-2 p-4">
    <span class="d-block p-4 mx-5 text-black text-center">
      <h1>LOGIN</h1>
    </span>
    <form action="cek_login.php" method="POST">
      <div class="mb-3 mx-5">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-3 mx-5">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button class="btn btn-primary mx-5" type="submit">Login</button>
    </form>
  </div>
</body>
</html>