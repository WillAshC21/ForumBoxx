<?php
session_start();
$servername="localhost";
$username="BCAusers_user";
$password="@Horsec1928";
$database = "BCAusers_DB";

$connect=new mysqli($servername,$username,$password,$database);

/* Check the connection is created properly or not */
// if($connect->connect_error)
//     echo "Connection error:" .$connect->connect_error;
// else
//     echo "Connection is created successfully";

    if(!$connect){
        die('Could not Connect MySql Server:' .mysql_error());
      }
