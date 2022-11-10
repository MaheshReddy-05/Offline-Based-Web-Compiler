<?php

$con=new mysqli('localhost','root','','client_det');
if(!$con){
    die(mysqli_error($con));
}