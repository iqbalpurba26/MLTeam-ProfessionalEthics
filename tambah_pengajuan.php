<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

$nama = $_SESSION['nama_sistem'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/6.15.0/simpleicons.svg">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="css/style_halaman_pengajuan.css">
    <title>Halaman Pengajuan</title>
</head>
<body>
    <header>
       <div class="left_area">
            <h3>PENGAJUAN PENGECEKAN SISTEM MACHINE LEARNING</h3>  
       </div>

       <div class="right_area">
            <i class="fa-solid fa-bars" id="btn"></i>
       </div>
    </header>

    <div class="sidebar">
        <div class="logo_profile">
            <img src="asset/ml.jpg " class="logo" alt="" width="200px" style="border-radius:50px">
        </div>
            
        <div class="menu">
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang,  <?php echo $nama?></span></p>
            <a href="index.php" target="_blank"><i class="fa-solid fa-gauge"></i><span>Halaman Awal</span></a>
            <a href="tambah_pengajuan.php"><i class="fa-solid fa-plus"></i><span>Tambah Pengajuan</span></a>
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>

    <div class="content">

    <h2>Halaman Pengajuan</h2>

    <p class="warning">Ada beberapa hal yang perlu diperhatikan dalam megisi pengajuan tersebut. Pastikan anda telah memahami tata cara pengisiannya dengan baik dan benar</p>

    <h3 style="color:#5893D4">
        Tata Cara Pengisian
    </h3>

    <ul style="margin-bottom:50px">
        <li>Masukkan Dokumen Diminta Kedalam Google Drive</li>
        <li>Copy Link Tersebut Ke Form yang telah disediakan</li>
        <li>Pastikan Link Tersebut Dapat Dilihat Oleh Semua Orang</li>
        <li>Berhati-hati lah mengisinya</li>
        <li>Jika ada dokumen yang tidak terpenuhi, maka pengajuan akan ditolak</li>
        <li>Anda dapat mengajukan ulang jika ditolak</li>
        <li>Semua Dokumen dan Jawaban, tidak bisa diperbaiki. Oleh karena itu, baca dengan teliti sebelum mengklik tombol kirim</li>
    </ul>


    <center><a href="sistem.php" 
    style="
    margin-top:50px;
    text-decoration:none;
    color:#fff;
    background-color:#5893D4;
    border-radius:20px;
    padding:10px 20px
    ">
    Selanjutnya
    </a></center>

    </div>
    
    <script src="js/script.js"></script>
</body>
</html>