<?php 
include '../conn/connection.php';
session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";


    
    $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['login_admin'] = true;
        $_SESSION['username'] = $row["username"];

        header("Location:../admin_dashboard.php");
    } 
    else 
    { 
        echo "
        <script>
            alert('Email atau Password Salah');
            document.location.href='../login_admin.php';
        </script>
        ";

     }
}


?>