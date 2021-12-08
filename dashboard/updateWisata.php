<?php 
    include "koneksi.php";

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['deskripsi'];

    $query = "UPDATE wisata SET title = '$title', deskripsi = '$description' WHERE id = '$id'";

    $result = mysqli_query($connect, $query);

    if ($result) {
            echo "Berhasil update ke database";
        ?>

    <a href="/uts/dashboard/admin.php"> Lihat Data di Tabel</a>
    <?php 
        }else{
            echo "Gagal update data ". mysqli_error($connect);
        }

?>