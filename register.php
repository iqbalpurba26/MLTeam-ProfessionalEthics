<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | Buat Akun</title> 
    <link rel="stylesheet" href="css/style_register.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Buat Akun</h2>
    <form action="controller/tambah_user.php" method="post">
      <div class="input-box">
          <input type="text" name="nama_sistem" placeholder="Nama Sistem" required>
      </div>
  
      <div class="input-box">
        <input type="text" name="organisasi" placeholder="Nama Organisasi/Perusahaan" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Email Organisasi/Perusahaan" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Buat Password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>Saya setuju dengan kebijakan dan privasi</h3>
      </div>
      <div class="input-box button">
       <center> <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button> </center>
      </div>
      <div class="text">
        <h3>Sudah punya akun? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>