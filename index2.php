<html>
<head>
  <title>Ngopi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='1'");
$row  = mysqli_fetch_array($data);
?>

<body>
    <div class="container">
        <h4>BLOWER</h4>
        <div class="row">
             <a href="relay1on.php" type="button" class="btn btn-primary btn-lg">ON</a>
             <a href="relay1off.php" type="button" class="btn btn-danger btn-lg">OFF</a>     
        </div>
        <label>Status: <?php echo $row['status']; ?></label>
    </div>
</body>

</html>
