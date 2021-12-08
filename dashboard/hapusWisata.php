<?php 
    include "koneksi.php";

    $id = $_GET['id'];    
    $sql = "DELETE FROM wisata WHERE id='$id'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "Data berhasil dihapus";
        ?>
        <a href="/uts/dashboard/admin.php"> Lihat Data di Tabel</a>
<?php
    }else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }
?>  