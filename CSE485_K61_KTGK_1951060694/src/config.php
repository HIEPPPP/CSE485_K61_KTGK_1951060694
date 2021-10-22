<?php
  //bước 1: kết nối tới cơ sở dữ lệu
   define('HOST','localhost');
   define('USER','root');
   const PASS='';
   const DB = 'db_cars';
   $conn = mysqli_connect(HOST, USER, PASS, DB);
   if(!$conn){
      die('không kết nối');
    }
?>