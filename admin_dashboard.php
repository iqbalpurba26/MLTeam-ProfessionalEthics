<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login_admin"])){
    header("location: login.php");
    exit;
}

$nama = $_SESSION['username'];

$item = query("SELECT *
FROM sistem
INNER JOIN latarbelakang_sistem ON sistem.id_sistem = latarbelakang_sistem.id_sistem
INNER JOIN hasil_akhir ON sistem.id_sistem = hasil_akhir.id_sistem 
WHERE hasil_akhir.status = 'DALAM PROSES' ");

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
            <a href="admin_dashboard.php" ><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="history_pemeriksaan.php" ><i class='bx bx-history'></i><span>Histori Pemeriksaan</span></a>
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>

    <div class="content">
    <p id="sapaan" >Hallo <?php echo $nama ?></p>
    <h4 id="description">Silakan Cek Pengajuan Dari Klien Ya...!</h4>
     
    <table border="0" border-collapse="collapse" width="100%" id="tampil" style="margin-bottom:50px">
        <thead>
            <th style="text-align:center">No</th>
            <th style="text-align:center">Nama Sistem</th>
            <th style="text-align:center">Organisasi/Perusahaan</th>
            <th style="text-align:center">Penanggung Jawab</th>
            <th style="text-align:center">Email</th>
            <th style="text-align:center">Aksi</th>
        </thead>

        <tbody>
            <?php $i=1 ?>

           <?php foreach($item as $it) : ?>
            <tr>
                <td style="text-align:center"><?php echo $i ?></td>
                <td style="text-align:center"><?php echo $it["nama_sistem"]?></td>
                <td style="text-align:center"><?php echo $it["organisasi"]?></td>
                <td style="text-align:center"><?php echo $it["nama_penanggungjawab"]?></td>
                <td style="text-align:center"><?php echo $it["email"]?></td>
                <td  class="tabel_aksi" style="text-align:center">
                    <a href="cek_pengajuan.php?id_sistem=<?php echo $it["id_sistem"]; ?>" id="tbl-ubah"><i class="fa-solid fa-pen-to-square"></i>Periksa</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>

      </table>

    </div>
    
    <script src="js/script.js"></script>
</body>
</html>