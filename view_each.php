<?php

include "conncet.php";

if (isset($_GET['id']))
{


	$id = $_GET['id'];


} else
{

	$conn = null;

}

	$sql = "SELECT * FROM blog WHERE id = $id";

	$hasil = $conn->query($sql);
	$row = $hasil->fetchObject();
	echo  $row->judul . "<br />";
	echo  $row->isi . "<br />"; 

?>