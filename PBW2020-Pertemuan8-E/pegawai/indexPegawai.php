<?php 
include ('../koneksi.php');
session_start();
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
    <h1>Selamat Datang, <?php echo $_SESSION['username'] ?> </h1>
  </span>

  <div class="container">
    <a href="insert.php">+Tambah Data</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $result = mysqli_query ($conn, 'SELECT * FROM user order by nim');
          while($i = mysqli_fetch_array($result)) :
        ?>
        <tr>
          <th><?php echo $i['nim']; ?></th>
          <td><?php echo $i['nama']; ?></td>
          <td><?php echo $i['alamat']; ?></td>
          <td><a href="edit.php?nim=<?php echo $i['nim']; ?>">edit</a></td>
        </tr>
        <?php endwhile ?>
      </tbody>
    </table>
    <a class="btn btn-secondary" href="../index.php">Logout</a>
  </div>
    
</body>
</html>