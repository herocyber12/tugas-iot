<?php 
global $conn;

function select_data(){

$host = "localhost"; 
$user = "root";
$pass = ""; 
$db = "wemoz";

$conn = mysqli_connect($host,$user,$pass,$db);
    $query = "SELECT * FROM tabel1";
    return mysqli_query($conn,$query);
}
$select_data = select_data();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 3</title>
	<!-- Libraries Stylesheet -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="row navbar navbar-expand-lg bg-info navbar-light position-sticky py-lg-4 px-4 px-lg-5 wow fadeIn mb-2 m-2 shadow">
		<a class="navbar-brand p-0">
			<h1 class="m-0 text-light">Kelompok 3</h1>
		</a>
		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span>=</span>
		</button>
		<nav class="collapse navbar-collapse py-4 py-lg-0 justify-content-sm-end" id="navbarCollapse">
			<li class="navbar-nav ms-auto">
				<a class="nav-item nav-link px-4 text-light" href="index.php">Home</a>
				<a class="nav-item nav-link px-4 text-light" href="creator.php">Creator</a>
			</li>
		</nav>
	</div>