<?php
  include "koneksi.php";
?>

<html>
<head>
  <title>Data Siswa</title>
</head>
<body>
  <?php
    include 'judul.php';
  ?>
<a href="create.php">BUAT DATA</a>
<br>
<table border="1" cellpadding="10">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Action</th>
  </tr>

  <?php
    $query="SELECT * FROM siswa";
    $result=mysqli_query($koneksi,$query);
    
    $no = 1;
    while($data=mysqli_fetch_assoc($result)){
  ?>

  <tr>
    <td><?= $no++; ?></td>
    <td><?= $data['name']; ?></td>
    <td><?= $data['email']; ?></td>
    <td><?= $data['address']; ?></td>
    <td>
    	<a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
    	
    	<form method="POST" action="proses-hapus.php">
    		<input type="hidden" name="id" value="<?= $data['id'] ?>" />
    		<button type="submit">Hapus</button>
    	</form>
    	
    </td>
  </tr>
  
  <?php
    };
  ?>

</table>


</body>
</html>
