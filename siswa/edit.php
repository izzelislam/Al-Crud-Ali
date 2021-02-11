<?php 
	include 'koneksi.php';
	
	$id 		= $_GET['id'];
	$query 	= "SELECT * FROM siswa WHERE id='$id'";
	$res 		= mysqli_query($koneksi, $query);
	$data 	= mysqli_fetch_assoc($res);
	
	//var_dump($data);
	
?>

<h2>Edit Data</h2>
<br>
<br>
<form method="POST" action="proses-edit.php">
	<input type="hidden" name="id" value="<?= $id ?>">
  <label>nama</label>
  <input type="text" name="name" value="<?= $data['name'] ?>">
  
  <br>
  <br>
  <label>email</label>
  <input type="email" name="email" value="<?= $data['email'] ?>">

  <br>
  <br>
  <label>alamat</label>
  <textarea name="address" ><?= $data['address'] ?></textarea>

  <br>
  <br>
  <button type="submit">kirim</button>
</form>

