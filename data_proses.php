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
  <h3>Persiapan Data</h3>
    <form action="controller/cek_tambah_proses_data.php" method="POST" class="row g-3" >

    <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">

        <div class="mb-3">
            <label for="komponen_data1" class="form-label">Bagaimana Anda Mengumpulkan Data?</label>
            <textarea class="form-control" name="komponen_data1" id="komponen_data1" rows="3" placeholder="cont: Menggunakan survey dari ..."></textarea>
        </div>


        <div class="mb-3">
            <label for="komponen_data2" class="form-label">Data Apa Yang Anda Kumpulkan</label>
            <textarea class="form-control" name="komponen_data2" id="komponen_data2" rows="3" placeholder="cont: Data teks berupa nama, ..."></textarea>
        </div>

        <div class="mb-3">
            <label for="komponen_data3" class="form-label">Link Surat Izin Persetujuan Pengumpulan Data</label>
            <input type="text" name="komponen_data3" class="form-control" id="komponen_data3" rows="3" placeholder="Link Google Drive">
        </div>


        <div class="col-md-6">
            <label for="komponen_data4" class="form-label">Data Training : Data Testing</label>
            <input type="teks" name="komponen_data4" class="form-control" id="komponen_data4" placeholder="60%:40%">
        </div>
        <div class="col-md-6">
            <label for="komponen_data5" class="form-label">Total Data</label>
            <input type="teks" name="komponen_data5"class="form-control" id="komponen_data5" placeholder="15000">
        </div>

        <div class="mb-3">
            <label for="komponen_data6" class="form-label">Link Proses Cleaning Data</label>
            <input type="text" name="komponen_data6" class="form-control" id="komponen_data6" rows="3" placeholder="Link Google Drive">
        </div>

    <div class="d-grid gap-2">
      <button class="btn" type="submit" name="tambah">Kirim</button>
    </div>

  </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>