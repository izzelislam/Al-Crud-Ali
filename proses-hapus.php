<?php
	include 'koneksi.php';
	
	$id			=	$_POST['id'];
	
	$query	=	"DELETE FROM siswa WHERE id='$id'";
	$res		=	mysqli_query($koneksi, $query);
	if ( $res ) {
		header('location:index.php');
	} else {
		echo 'data gagal di hapus';
	}
	
