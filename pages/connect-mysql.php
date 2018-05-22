<?php

    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'basic_mysql';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(! $conn){
        echo "Error:" . mysql_connect_error();
        exit();
    }
    echo "kết nối thành công";

    $sql = 'SELECT * FROM students';
   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval )
   {
      die('Không thể lấy dữ liệu: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_assoc($retval))
   {
      echo "ID :{$row['id']}  <br> ".
         "name: {$row['name']} <br> ".
         "phone : {$row['phone']} <br> ";
   }
   
   echo "Lấy dữ liệu thành công\n";
   
//    mysql_close($conn);
?>