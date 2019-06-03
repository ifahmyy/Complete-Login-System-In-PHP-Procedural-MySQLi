<?php



$servername="localhost";
$dBUsername="admin";
$dBPassword="000202";
$dBName="loginsystemtut";

$conn= mysqli_connect($servername,$dBUsername, $dBPassword, $dBName);

if (!$conn)
{
	die("connection failed !".$mysql_connect_error());
}