<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

$nama = $_SESSION['nama_sistem'];
$id_sistem = $_SESSION['id_sistem'];

$item = query("SELECT * FROM sistem 
                INNER JOIN hasil_akhir using(id_sistem)
                WHERE sistem.id_sistem = '$id_sistem'") ;

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
    <link rel="stylesheet" href="css/style_user_dashboard.css">
    <title>Home Admin</title>
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
            <a href="user_dashboard.php" ><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
           
            <a href="tambah_pengajuan.php"><i class="fa-solid fa-plus"></i><span>Tambah Pengajuan</span></a>
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>

    <div class="content">
    <p id="sapaan" >Hallo <?php echo $nama ?></p>
    <p>Jika Pengajuan Anda Ditolak, Silakan Tekan Tombol Berikut </p>

    <form action="controller/reset_akun.php" method="POST">
        <input type="hidden" name="id_sistem" value="<?php echo $id_sistem ?>">
        <button type="submit" name="reset" style="background-color:red; border:none; padding:10px 20px; color:#fff; border-radius:20px; ">RESET</button>
    </form>

    <h4 id="description">Buat Pengajuan Pengecekan Sistem Machine Learningmu Sekarang Juga Ya!</h4>
     
    <table border="0" border-collapse="collapse" width="100%" id="tampil" style="margin-bottom:50px">
        <thead>
            <th style="text-align:center">No</th>
            <th style="text-align:center">Nama Sistem</th>
            <th style="text-align:center">Organisasi/Perusahaan</th>
            <th style="text-align:center">Nomor Pengajuan</th>
            <th style="text-align:center">Status</th>
    
        </thead>

        <tbody>
            <?php $i=1 ?>

           <?php foreach($item as $it) : ?>
            <tr>
                <td style="text-align:center"><?php echo $i ?></td>
                <td style="text-align:center"><?php echo $it["nama_sistem"]?></td>
                <td style="text-align:center"><?php echo $it["organisasi"]?></td>
                <td style="text-align:center"><?php echo $it["id_hasil"]?></td> 
                <td style="text-align:center"><?php echo $it["status"]?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>

      </table>

    </div>
    
    <script src="js/script.js"></script>
</body>
</html>