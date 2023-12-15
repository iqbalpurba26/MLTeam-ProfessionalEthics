<?php 

include '../conn/connection.php';

if(isset($_POST["tambah"])){
    $id_sistem = $_POST["id_sistem"];
    $k1 = $_POST["komponen_laporan1"];

    $status = "DALAM PROSES";

    $query = "INSERT INTO laporan VALUES('', '$id_sistem', '$k1')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    $query2 = "INSERT INTO hasil_akhir VALUES('','$id_sistem', '$status')";
    mysqli_query($conn, $query2) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dikirim');
            document.location.href='../hasil_akhir.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dikirim');
            document.location.href='../laporan.php';
        </script>
        ";
    }
}


?>