<?php

include 'koneksi.php';

 $name=$_POST['name'];
 $email=$_POST['email'];
 $address=$_POST['address'];

 $query="INSERT INTO siswa (name, email, address) VALUES ('$name', '$email', '$address')";

 $result=mysqli_query($koneksi, $query);

 if ($result) {
   header('location:index.php');
 } else {
   echo "data gagal di tambahkan.";
 }
