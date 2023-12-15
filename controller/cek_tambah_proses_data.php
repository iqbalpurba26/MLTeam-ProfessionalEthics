<?php 

include '../conn/connection.php';

if(isset($_POST["tambah"])){
    $id_sistem = $_POST["id_sistem"];
    $k1 = $_POST["komponen_data1"];
    $k2 = $_POST["komponen_data2"];
    $k3 = $_POST["komponen_data3"];
    $k4 = $_POST["komponen_data4"];
    $k5 = $_POST["komponen_data5"];
    $k6 = $_POST["komponen_data6"];

    $query = "INSERT INTO persiapan_data VALUES('', '$id_sistem', '$k1', '$k2','$k3', '$k4', '$k5', '$k6')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dikirim');
            document.location.href='../algoritma.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dikirim');
            document.location.href='../data_proses.php';
        </script>
        ";
    }
}


?>