<?php 

include '../conn/connection.php';

if(isset($_POST["submit"])){
    $nama_sistem = $_POST["nama_sistem"];
    $nama_organisasi = $_POST["organisasi"];
    $email = $_POST["email"];
    $pass =md5($_POST["password"]) ;

    $cek = "SELECT * FROM sistem WHERE nama_sistem = '$nama_sistem'";
    $hasil = mysqli_query($conn, $cek);

    if(mysqli_num_rows($hasil)>0){
        echo "
        <script>
            alert('Sistem Dengan Nama Tersebut Telah Terdaftar');
            document.location.href='../register.php';
        </script>
        ";
    } else {
        $query = "INSERT INTO sistem VALUES('','$nama_sistem','$nama_organisasi', '$email', '$pass')";
        mysqli_query($conn, $query);
    
        if(mysqli_affected_rows($conn)>0){
            echo "
            <script> 
                alert('Akun berhasil dibuat');
                document.location.href = '../login.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Akun gagal dibuat');
                document.location.href='../register.php';
            </script>
            ";
        }
    }

   
}



?>