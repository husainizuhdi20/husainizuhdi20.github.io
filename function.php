<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "datacenter";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if($koneksi){
	// echo "OK";
}else{
	echo "Disconnected";
}

function availPos(){
	global $koneksi;
	$availpos= "SELECT * FROM tb_avail_pos";
	$result = mysqli_query($koneksi, $availpos);
	return $result;

}


?>