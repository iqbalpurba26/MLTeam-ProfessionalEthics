<?php 

include '../conn/connection.php';

if(isset($_POST["setuju"])){
    $id_sistem = $_POST["id_sistem"];
    $status = "DISETUJUI";

    $query = "UPDATE hasil_akhir SET status='$status' WHERE id_sistem='$id_sistem'";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0){
        echo "
        <script>
            alert('Data berhasil disetujui');
            document.location.href='../admin_dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal disetujui');
            document.location.href='../cek_pengajuan.php';
        </script>";
    }
}


if(isset($_POST["tolak"])){
    $id_sistem = $_POST["id_sistem"];
    $status = "DITOLAK";

    $query = "UPDATE hasil_akhir SET status='$status' WHERE id_sistem='$id_sistem'";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0){
        echo "
        <script>
            alert('Data berhasil ditolak');
            document.location.href='../admin_dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditolak');
            document.location.href='../cek_pengajuan.php';
        </script>";
    }
}

?>
