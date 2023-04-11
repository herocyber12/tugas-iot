<?php 

$data_request = $_GET['data_request'];


$host = "localhost"; 
$user = "root";
$pass = ""; 
$db = "wemoz";

$conn = mysqli_connect($host,$user,$pass,$db);


if ($data_request == 'grafik1') {
	# code...
	$query = mysqli_query($conn,"SELECT * FROM tabel1");

	while ($row = mysqli_fetch_assoc($query)) {
		# code...
		$data[]  = array('y' => (int)$row['jarak'],
						  'label' => $row['tanggal'],
		 );
	}
		echo json_encode(array('data'=>$data,'tipe'=>'column'));

	die();
}
 ?>