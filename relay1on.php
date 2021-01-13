<?php
include('koneksi.php');
mysqli_query($koneksi, "UPDATE data SET status='ON' WHERE no='1' ");
header("Location: index3.php");
