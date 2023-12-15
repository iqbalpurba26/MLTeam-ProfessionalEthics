<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

$nama = $_SESSION['nama_sistem'];
$organisasi = $_SESSION['organisasi'];
$id_sistem = $_SESSION['id_sistem'];


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_sistem.css">
  </head>
  <body>
    

  <div class="container">
  <h3>Latar Belakang Sistem</h3>
    <form action="controller/cek_tambah_sistem.php" method="POST">
    
    <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">


    <div class="form-floating mb-3">
        <input type="text" readonly name="nama_sistem" class="form-control" id="nama_sistem" value="<?php echo $nama ?>">
        <label for="nama_sistem" >Nama Sistem</label>
    </div>

    <div class="form-floating mb-3">
    <input type="text" readonly name="organisasi" class="form-control" id="organisasi" value="<?php echo $organisasi ?>">
        <label for="organisasi" >Nama Organisasi/Perusahaan</label>
    </div>


    <div class="form-floating mb-3">
        <input type="text" name="penanggung_jawab" class="form-control" id="penanggung_jawab" placeholder="M. Iqbal Purba" required>
        <label for="penanggung_jawab" >Nama Penanggung Jawab</label>
    </div>


    <div class="form-floating">
      <textarea class="form-control" name="tujuan_sistem" placeholder="Tujuan Sistem" id="tujuan_sistem" style="height: 200px" required></textarea>
      <label for="tujuan_sistem">Tujuan Sistem Anda</label>
    </div>


    <div class="d-grid gap-2">
      <button class="btn" type="submit" name="tambah">Kirim</button>
    </div>

  </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>