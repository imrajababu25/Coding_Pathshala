<?php


$username="root";
$password="";
$server='localhost';
$db='registration';

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die(mysqli_error($con));
}
?>