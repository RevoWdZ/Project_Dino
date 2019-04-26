<?php

$servername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "ai";

$conn = mysqli_connect($servername,$DBusername,$DBpassword,$DBname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}