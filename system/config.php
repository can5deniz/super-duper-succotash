<?php

    //database connection

    //database server
    $dbserver = '127.0.0.1';
    //database username
    $dbusername = 'root';
    //database password
    $dbpassword = '12345';
    //database name
    $db = 'mmort';


    //connection settings

    //open connection to mysql db
    $connection = mysqli_connect($dbserver,$dbusername,$dbpassword,$db) or die("Error " . mysqli_error($connection));
    //check connection
    if($connection){
        echo "Connected";
    }else{
        echo "Not Connected";
    }


    //general settings

    //declare and initialize variables
    $title= 'MORTS';
    $seperator= ' . ';
    $description= 'My awesome MORTS game';


    //technical settings

    //set $maintance to true
    $maintance = false;

?>