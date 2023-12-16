<?php 

include '../conn/connection.php';

if(isset($_POST["reset"])){
    $id_sistem = $_POST["id_sistem"];

    $query_tabel_1 = "DELETE FROM deployment WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_1) or die(mysqli_error($conn));

    $query_tabel_2 = "DELETE FROM hasil_akhir WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_2) or die(mysqli_error($conn));

    $query_tabel_3 = "DELETE FROM interpretasi_hasil WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_3) or die(mysqli_error($conn));

    $query_tabel_4 = "DELETE FROM kebutuhan_bisnis WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_4) or die(mysqli_error($conn));

    $query_tabel_5 = "DELETE FROM laporan WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_5) or die(mysqli_error($conn));

    $query_tabel_6 = "DELETE FROM latarbelakang_sistem WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_6) or die(mysqli_error($conn));

    $query_tabel_7 = "DELETE FROM pemilihan_algoritma WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_7) or die(mysqli_error($conn));

    $query_tabel_8 = "DELETE FROM persiapan_data WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_8) or die(mysqli_error($conn));

    $query_tabel_9 = "DELETE FROM pelatihan_model WHERE id_sistem = '$id_sistem'";
    mysqli_query($conn, $query_tabel_9) or die(mysqli_error($conn));


    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil dihapus. Silakan Ajukan Kembali');
            document.location.href='../user_dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dihapus');
            // document.location.href='../user_dashboard.php';
        </script>
        ";
    }
}


?>