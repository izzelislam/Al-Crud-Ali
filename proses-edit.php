<?php
	include 'koneksi.php';
	
	$id			=	$_POST['id'];
	$name		=	$_POST['name'];
	$email	=	$_POST['email'];
	$address=	$_POST['address'];
	
	$query	=	"UPDATE siswa SET name='$name', email='$email', address='$address' WHERE id='$id'";
	$res		=	mysqli_query($koneksi, $query);
	
	if ( $res ) {
		header('location:index.php');
	} else {
		echo 'data gagal di update';
	}
	
