<?php

    //set $maintance to true
    $maintance = false;

    //database connection

    //database server
    $dbserver = 'us-cdbr-east-06.cleardb.net';

    //database username
    $dbusername = 'b21c1ce0723288';

    //database password
    $dbpassword = 'f06f9991';

    //database name
    $db = 'heroku_0557db19b57d2b0';


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
