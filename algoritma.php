<?php 
include 'conn/connection.php';

session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

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
  <h3>Pemilihan Algoritma</h3>
    <form action="controller/cek_tambah_algoritma.php" method="POST" class="row g-3" >

        <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">

        <div class="mb-3">
            <label for="komponen_algoritma1" class="form-label">Apa saja variabel dependen Anda?</label>
            <textarea required class="form-control" name="komponen_algoritma1" id="komponen_algoritma1" rows="3" placeholder="cont: Stroke ... "></textarea>
        </div>


        <div class="mb-3">
            <label for="komponen_algoritma2" class="form-label">Apa Variabel Independen Anda></label>
            <input required class="form-control" name="komponen_algoritma2" id="komponen_algoritma2" rows="3" placeholder="cont: umur, jenis kelamin, ...">
        </div>

        <div class="mb-3">
            <label for="komponen_algoritma3" class="form-label">Algoritma Apa yang Anda Pakai?</label>
            <input required type="text" name="komponen_algoritma3" class="form-control" id="komponen_algoritma3" rows="3" placeholder="cont: Support Vector Machine">
        </div>

        <div class="mb-3">
            <label for="komponen_algoritma4" class="form-label">Link Proses Pembentukan Model Algoritma</label>
            <input required type="text" name="komponen_algoritma4" class="form-control" id="komponen_algoritma4" rows="3" placeholder="Link Google Drive">
        </div>

    <div class="d-grid gap-2">
      <button class="btn" type="submit" name="tambah">Kirim</button>
    </div>

  </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>