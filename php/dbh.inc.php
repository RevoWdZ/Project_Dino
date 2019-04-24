<?php

$conn = mysqli_connect('localhost','root','','ai');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}