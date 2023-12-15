<?php 
include '../conn/connection.php';
session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $nama_sistem = $_POST['nama_sistem'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM sistem WHERE nama_sistem='$nama_sistem' AND password='$password'";


    
    $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['login'] = true;
        $_SESSION['organisasi'] = $row['organisasi'];
        $_SESSION['nama_sistem'] = $row['nama_sistem'];
        $_SESSION['id_sistem'] = $row['id_sistem'];

        header("Location:../user_dashboard.php");
    } 
    else 
    { 
        echo "
        <script>
            alert('Email atau Password Salah');
            document.location.href='../login.php';
        </script>
        ";

     }
}


?>