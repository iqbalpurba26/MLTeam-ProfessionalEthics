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
  <h3>Kebutuhan Bisnis</h3>
    <form action="controller/cek_tambah_kebutuhan_bisnis.php" method="POST">
      
        <input type="hidden" name="id_sistem" class="form-control" id="id_user" value="<?php echo $id_sistem ?>">
        <div class="mb-3">
            <label for="komponen_bisnis1" class="form-label">Sistem Bergerak Dibidang Apa?</label>
            <input required type="text" name="komponen_bisnis1" class="form-control" id="komponen_bisnis1" placeholder="cont: Kesehatan">
        </div>


        <div class="mb-3">
            <label for="komponen_bisnis2" class="form-label">Ceritakan Megenai Sistem Anda</label>
            <textarea required class="form-control" name="komponen_bisnis2" id="komponen_bisnis2" rows="3" placeholder="cont: Bisnis kami adalah..."></textarea>
        </div>

        <div class="mb-3">
            <label for="komponen_bisnis3" class="form-label">Permasalahan apa yang ingin dipecahkan?</label>
            <textarea required type="text" name="komponen_bisnis3" class="form-control" id="komponen_bisnis3" rows="3" placeholder="cont: Kecepatan Deteksi Tumor"></textarea>
        </div>


        <div class="mb-3">
            <label for="komponen_bisnis4" class="form-label">Bagaimana Sistem Anda dapat memecahkannya?</label>
            <textarea required type="text" name="komponen_bisnis4" class="form-control" id="komponen_bisnis4" rows="3" placeholder="cont: Sistem kami akan mendeteksi berdasarkan..."></textarea>
        </div>

    <div class="d-grid gap-2">
      <button class="btn" type="submit" name="tambah">Kirim</button>
    </div>

  </form>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>