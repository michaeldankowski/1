<?php
	error_reporting(E_ALL);
	session_start();

        	require_once "connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$id=$_GET['id'];
echo $id;
             $polaczenie->query ("DELETE FROM wizyta_w_warsztacie WHERE id_wizyta='".$id."'");
   
//echo "Rekord zaktualizowany";
             header('Location:panela.php');
$polaczenie->close();


?>
