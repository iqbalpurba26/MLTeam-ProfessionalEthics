<?php 

session_start();
if(isset($_SESSION["login"])){
    header("location:user_dashboard.php");
    exit;
}
include 'conn/connection.php'


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login | MLTeam</title>
  </head>

  <body>
  <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="controller/cek_login.php" method="POST">
        <h3>Login Disini</h3>

        <label for="nama_sistem">Nama Sistem</label>
        <input type="text" placeholder="Nama Sistem Yang Diajukan" id="nama_sistem" name="nama_sistem">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <a href="login_admin.php">Admin?</a>
        <button type="submit" name="submit">Log In</button>
        <p style="margin-top:20px">Belum punya akun? <a href="register.php">Register</a></p>
  </body>

</html>