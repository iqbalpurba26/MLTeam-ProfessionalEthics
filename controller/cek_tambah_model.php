<?php 

include '../conn/connection.php';

if(isset($_POST["tambah"])){
    $id_sistem = $_POST["id_sistem"];
    $k1 = $_POST["komponen_model1"];
    $k2 = $_POST["komponen_model2"];
    $k3 = $_POST["komponen_model3"];
    $k4 = $_POST["komponen_model4"];
    $k5 = $_POST["komponen_model5"];

    $query = "INSERT INTO pelatihan_model VALUES('', '$id_sistem', '$k1', '$k2','$k3', '$k4','$k5')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dikirim');
            document.location.href='../interpretasi_hasil.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dikirim');
            document.location.href='../pelatihan_model.php';
        </script>
        ";
    }
}


?>