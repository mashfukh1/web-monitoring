<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='1'");
$row  = mysqli_fetch_array($data);
$status =  $row['status'];

$json = array('relay1' => $status, 'relay2' => 'OFF');
echo json_encode($json);
?>