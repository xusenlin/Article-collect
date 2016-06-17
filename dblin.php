<?php
    require_once 'config.php';
    if(!($con=mysqli_connect(HOST,DBNAME,PASSWORD))){
        echo mysql_error();
    }


    if(!(mysqli_select_db($con,'article'))){
        echo mysql_error();
    }
    if(!(mysqli_query($con,'set names utf8'))){
        echo mysql_error();
    }
?>