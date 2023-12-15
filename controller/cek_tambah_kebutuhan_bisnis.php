<?php 

include '../conn/connection.php';

if(isset($_POST["tambah"])){
    $id_sistem = $_POST["id_sistem"];
    $k1 = $_POST["komponen_bisnis1"];
    $k2 = $_POST["komponen_bisnis2"];
    $k3 = $_POST["komponen_bisnis3"];
    $k4 = $_POST["komponen_bisnis4"];

    $query = "INSERT INTO kebutuhan_bisnis VALUES('', '$id_sistem', '$k1', '$k2','$k3', '$k4')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dikirim');
            document.location.href='../data_proses.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dikirim');
            document.location.href='../kebutuhan_bisnis.php';
        </script>
        ";
    }
}


?>