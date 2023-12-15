<?php 

include '../conn/connection.php';

if(isset($_POST["tambah"])){
    $id_sistem = $_POST["id_sistem"];
    $nama_sistem = $_POST["nama_sistem"];
    $penanggung_jawab = $_POST["penanggung_jawab"];
    $organisasi = $_POST["organisasi"];
    $tujuan_sistem = $_POST["tujuan_sistem"];

    $query = "INSERT INTO latarbelakang_sistem VALUES('', '$id_sistem', '$nama_sistem', '$organisasi','$penanggung_jawab', '$tujuan_sistem')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dikirim');
            document.location.href='../kebutuhan_bisnis.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dikirim');
            document.location.href='../sistem.php';
        </script>
        ";
    }
}


?>