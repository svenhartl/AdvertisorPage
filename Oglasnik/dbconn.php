<?php

$server="localhost";
$usr="root";
$password="";
$Baza="oglasnik";
$db=mysqli_connect ($server,$usr,$password,$Baza);


if(!$db){
	
	die("Baza neuspjesno spojena: ".mysqli_connect_errno());
}
else{
	//echo "Baza uspjesno spojena";
}
session_start();