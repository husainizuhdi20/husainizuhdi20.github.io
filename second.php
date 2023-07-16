<?php
require "function.php";

$sql = mysqli_query($koneksi, "SELECT * FROM tb_avail_pos");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/johndoe.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $no = 1;
    // while($row = mysqli_fetch_assoc($sql)){
       ?>
        
<div class="row">
    <div class="col-4">
        <h4>DATA ALL </h4>
        
    </div>
    <?php
    while($row = mysqli_fetch_assoc($sql)){
       ?>
    <div class="col-4">
        <h4>DATA <?= $no++; ?></h4>
        <?= $row['job_name']; ?>
        <?= $row['place']; ?>
        <?= $row['comment']; ?>
    </div>
    
    <?php
    }
    
    ?>
</div>

</body>
</html>