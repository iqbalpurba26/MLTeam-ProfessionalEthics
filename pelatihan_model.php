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
  <h3>Pelatihan Model</h3>
  <i><p style="font-size:12px"><span style="color:red">*</span>Jika pembentukan model hanya fit ke algoritma, cukup isi 0 pada isian 1-3</p></i>
    <form action="controller/cek_tambah_model.php" method="POST" class="row g-3" >
        <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">

        <div class="mb-3">
            <label for="komponen_model1" class="form-label">Berapa Epoch Yang Anda Gunakan?</label>
            <input class="form-control" name="komponen_model1" id="komponen_model1" rows="3" placeholder="cont: 20">
        </div>


        <div class="mb-3">
            <label for="komponen_model2" class="form-label">Berapa Batch Size Yang Anda Gunakan?></label>
            <input class="form-control" name="komponen_model2" id="komponen_model2" rows="3" placeholder="cont: 20">
        </div>

        <div class="mb-3">
            <label for="komponen_model3" class="form-label">Apakah Anda Menggunakan Callback</label>
            <select class="form-select" name ="komponen_model3"  id="komponen_model3" aria-label="Default select example">
                <option selected>Pilih</option>
                <option value="iya">Iya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="komponen_model4" class="form-label">Berapa Akurasi Yang Diperoleh?</label>
            <input type="text" name="komponen_model4" class="form-control" id="komponen_model4" rows="3" placeholder="cont:90%">
        </div>

        <div class="mb-3">
            <label for="komponen_model5" class="form-label">Link Pelatihan Model</label>
            <input type="text" name="komponen_model5" class="form-control" id="komponen_model5" rows="3" placeholder="Link Google Drive">
        </div>

    <div class="d-grid gap-2">
      <button class="btn" type="submit" name="tambah">Kirim</button>
    </div>

  </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>