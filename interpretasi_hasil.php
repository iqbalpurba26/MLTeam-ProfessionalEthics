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
    <form action="controller/cek_tambah_interpretasi.php" method="POST">
    <h3>Interpretasi Hasil</h3>
          <input type="hidden"name="id_sistem" class="form-control" id="id_sistem" value="<?php echo $id_sistem ?>">

          <div class="mb-3">
              <label for="komponen_hasil1" class="form-label">Link Screenshot Pengujian Model</label>
              <input required class="form-control" name="komponen_hasil1" id="komponen_hasil1" rows="3" placeholder="Link Google Drive">
          </div>


          <div class="mb-3">
              <label for="komponen_hasil2" class="form-label">Apakah Hasilnya Akurat?</label>
              <select required class="form-select" name ="komponen_hasil2"  id="komponen_hasil2" aria-label="Default select example">
                  <option selected>Pilih</option>
                  <option  value="iya">Iya</option>
                  <option value="tidak">Tidak</option>
              </select>
          </div>


          <div class="mb-3">
              <label for="komponen_hasil3" class="form-label">Link Pengujian Model></label>
              <input required class="form-control" name="komponen_hasil3" id="komponen_hasil3" rows="3" placeholder="Link Google Drive/Colab">
          </div>

          <div class="mb-3">
              <label for="komponen_hasil4" class="form-label">Link Model</label>
              <input required class="form-control" name="komponen_hasil4" id="komponen_hasil4" rows="3" placeholder="Link Google Drive/Colab">
          </div>

      

      <div class="d-grid gap-2">
        <button class="btn" type="submit" name="tambah">Kirim</button>
      </div>

    </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>