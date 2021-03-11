<?php 
   // phpinfo();
    $conn = new mysqli('localhost','root','','php_artical');
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        echo 'loi connect';
    }
