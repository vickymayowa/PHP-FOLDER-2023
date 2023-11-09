<?php
    $localhost = 'localhost'
    $username = 'root'
    $password = ''
    $database = 'scholl_db';
    $dbconnection = new mysqll($localhost,$username,$password,$database);

    if($dbconnection->connect_error){
        echo 'Not Connected to Database';$dbconnection->connect_error;
    }
    else{
        echo 'Connected to Database';
    }
?>