<?php
 session_start();
 if(!isset($_SESSION['LoginOk'])){
     header("Location:index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dang nhap thanh cong</h1>
    <h3><a href="logout.php">Dang xuat</a></h3>
    
</body>
</html>