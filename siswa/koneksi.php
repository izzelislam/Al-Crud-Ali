<?php

  $server= "localhost"; //nama server
  $username= "root";    //username
  $password= "1234";    //password
  $db     = "sekolah";  //nama database

  $koneksi= mysqli_connect($server, $username, $password, $db);

  if ($koneksi){
    // echo "koneksi berhasil";
  } else {
    echo "koneksi gagal";
  }