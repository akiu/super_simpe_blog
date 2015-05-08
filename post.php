<?php

require "conncet.php";

if(isset($_POST['judul']) && isset($_POST['isi']))
{

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$sql = "INSERT INTO blog(judul, isi) VALUES (:judul, :isi)";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':judul', $judul, PDO::PARAM_STR);		
	$stmt->bindParam(':isi', $isi, PDO::PARAM_STR);

	$stmt->execute();

	header("location: view.php");



} else {


	$conn = null;

}


?>