<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login_admin"])){
    header("location: login.php");
    exit;
}

$id_sistem = $_GET["id_sistem"];

$nama = $_SESSION['username'];


$sistem = query("SELECT * FROM sistem a, latarbelakang_sistem b WHERE a.id_sistem = '$id_sistem' AND b.id_sistem='$id_sistem'")[0];

$data = query("SELECT * FROM persiapan_data a WHERE a.id_sistem = '$id_sistem'")[0];

$ag = query("SELECT * FROM pemilihan_algoritma a WHERE a.id_sistem = '$id_sistem'")[0];

$model = query("SELECT * FROM pelatihan_model a WHERE a.id_sistem = '$id_sistem'")[0];

$hasil = query("SELECT * FROM interpretasi_hasil a WHERE a.id_sistem = '$id_sistem'")[0];

$deployment = query("SELECT * FROM deployment a WHERE a.id_sistem = '$id_sistem'")[0];

$lp = query("SELECT * FROM laporan a WHERE a.id_sistem = '$id_sistem'")[0];



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
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>

    <div class="content">
        <h2>Kelengkapan Pengajuan Sistem Berbasis Machine Learning</h2>

       
        <table width=100% id="tambah" border=0 style="margin-top:-15px; margin-bottom:40px">
        <!-- Deskripsi Sistem -->
            <tr>
                <td><h3 style="color:#5893D4">Deskripsi Sistem</h3></td>
            </tr>
            <tr>
                <td>Nama Sistem</td>
                <td> : </td>
                <td><?php echo $sistem["nama_sistem"] ?></td>
            </tr>
            <tr>
                <td>Organisasi/Perusahaan Pengaju</td>
                <td> : </td>
                <td><?php echo $sistem["organisasi"]?></td>
            </tr>
            <tr>
                <td>Email Perusahaan</td>
                <td> : </td>
                <td><?php echo $sistem["email"]?></td>
            </tr>

            <tr>
                <td>Penanggung Jawab</td>
                <td> : </td>
                <td><?php echo $sistem["nama_penanggungjawab"] ?></td>
            </tr>
            <!-- Akhir Deskripsi Sistem -->

            <!-- Awal Proses Data -->
            <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>PROSES DATA</h3></td>
            </tr>
            <tr>
                <td>Sistem Pengumpulan Data</td>
                <td> : </td>
                <td><?php echo $data["komponen_data1"] ?></td>
            </tr>
            <tr>
                <td>Jenis Data Yang Dikumpulkan</td>
                <td> : </td>
                <td><?php echo $data["komponen_data2"]?></td>
            </tr>
            <tr>
                <td>Link Surat Izin Pengumpulan Data</td>
                <td> : </td>
                <td><a href="<?php echo $data["komponen_data3"]?>">DISINI</a></td>
            </tr>
            <tr>
                <td>Perbandingan Data Training dan Testing</td>
                <td> : </td>
                <td><?php echo $data["komponen_data4"]?></td>
            </tr>

            <tr>
                <td>Total Data</td>
                <td> : </td>
                <td><?php echo $data["komponen_data5"] ?></td>
            </tr>

            <tr>
                <td>Link Proses Cleaning Data</td>
                <td> : </td>
                <td><a href="<?php echo $data["komponen_data6"]?>">DISINI</a></td>
            </tr>
            <!-- Akhir Proses Data -->

            <!-- Awal Algoritma -->
            <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>PEMILIHAN ALGORITMA</h3></td>
            </tr>

            <tr>
                <td>Variabel Independen</td>
                <td> : </td>
                <td><?php echo $ag["komponen_algoritma1"] ?></td>
            </tr>
            <tr>
                <td>Variabel Dependen </td>
                <td> : </td>
                <td><?php echo $ag["komponen_algoritma2"]?></td>
            </tr>
            <tr>
                <td>Algoritma Yang Dipakai</td>
                <td> : </td>
                <td><?php echo $ag["komponen_algoritma3"]?></td>
            </tr>
            <tr>
                <td>Link Proses Pembentukan Model Dengan Algoritma</td>
                <td> : </td>
                <td><a href="<?php echo $ag["komponen_algoritma4"]?>">DISINI</a></td>
                
            </tr>
            <!-- Akhir Algoritma -->

            <!-- Awal Model -->
            <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>PELATIHAN MODEL</h3></td>
            </tr>
            <tr>
                <td>Jumlah Epoch</td>
                <td> : </td>
                <td><?php echo $model["komponen_model1"] ?></td>
            </tr>
            <tr>
                <td>Jumlah Batch Size</td>
                <td> : </td>
                <td><?php echo $model["komponen_model2"]?></td>
            </tr>
            <tr>
                <td>Apakah Menggunakan CallBack?</td>
                <td> : </td>
                <td><?php echo $model["komponen_model3"] ?></td>
            </tr>
            <tr>
                <td>Akurasi Yang Diperoleh</td>
                <td> : </td>
                <td><?php echo $model["komponen_model4"]?></td>
            </tr>

            <tr>
                <td>Link Pelatihan Model</td>
                <td> : </td>
                <td><a href="<?php echo $model["komponen_model5"]?>">DISINI</a></td>
                
            </tr>
            <!-- Akhir Model -->


             <!-- Awal Interpretasi -->
             <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>INTERPRETASI HASIL</h3></td>
            </tr>
            <tr>
                <td>Link Screenshot Pengujian Hasil</td>
                <td> : </td>
                <td><a href="<?php echo $hasil["komponen_hasil1"]?>">DISINI</a></td>
            </tr>
            <tr>
                <td>Apakah Hasilnya Akurat?</td>
                <td> : </td>
                <td><?php echo $hasil["komponen_hasil2"]?></td>
            </tr>
            <tr>
                <td>Link Pengujian Model</td>
                <td> : </td>
                <td><a href="<?php echo $hasil["komponen_hasil3"]?>">DISINI</a></td>
                
            </tr>
            <!-- Akhir Interpretasi -->


            <!-- Awal Deploy -->
            <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>DEPLOYMENT</h3></td>
            </tr>
            <tr>
                <td>Kemana Sistem di Deploy?</td>
                <td> : </td>
                <td><?php echo $deployment["komponen_deployment1"] ?></td>
            </tr>
            <tr>
                <td>Link Screenshot Tampilan Deploy</td>
                <td> : </td>
                <td><a href="<?php echo $deployment["komponen_deployment2"]?>">DISINI</a></td>
            </tr>
            <tr>
                <td>Bagaimana Hasil Pengujian Setelah Deployment?</td>
                <td> : </td>
                <td><?php echo $deployment["komponen_deployment3"] ?></td>
            </tr>
            <tr>
                <td>Bagaimana Performa Model Setelah Deployment</td>
                <td> : </td>
                <td><?php echo $deployment["komponen_deployment4"]?></td>
            </tr>

            <!-- Akhir Deploy -->


             <!-- Awal Laporan -->
             <tr>
                <td style="padding-top:40px; color:#5893D4" ><h3>LAPORAN</h3></td>
            </tr>
            <tr>
                <td>Link Laporan</td>
                <td> : </td>
                <td><a href="<?php echo $laporan["komponen_laporan1"] ?>">DISINI</a></td>
            </tr>
          

            <!-- Akhir Laporan -->

        </table>

        <form action="controller/ubah_status.php" method="POST">
        <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">
        <div class="tombol" style="display:flex; justify-content:center; margin-top:100px; margin-bottom:100px">
        <button type="submit" name="setuju"  id="setuju" 
            style=" background-color:#5893D4; text-decoration:none; color:#fff; border-radius:20px; padding:10px 50px; margin-right:100px;border: none; cursor:pointer">
            SETUJUI
        </button>

        <button type="submit" name="tolak"  id="tolak"
            style=" background-color:red; text-decoration:none; color:#fff; border-radius:20px; padding:10px 50px;border: none; cursor:pointer"">
            TOLAK
        </button>

    
        </div>

        </form>

    
        
   
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>