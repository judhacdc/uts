<?php 
    include "koneksi.php";
    $statusMsg = '';

    if (isset($_POST['kirim']) && !empty($_FILES["file"]["name"])) {
        $title = $_POST['title'];
        $deskripsi = $_POST['description'];
        $latitude = $_POST['title'];
        $deskripsi = $_POST['description'];

        // Upload Image
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        
        $sql = "INSERT INTO wisata(title, deskripsi, image)
        VALUES('$title', '$deskripsi', '".$fileName."')";

        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        // if(in_array($fileType, $allowTypes)){
        //     // Upload file to server
        //     if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        //         // Insert image file name into database
        //         $insert = $connect->query("INSERT into mobil (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        //     }
        // }
        if (mysqli_query($connect, $sql)) {
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    header("location:/uts/dashboard/admin.php");
                }else{
                    echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
                }
            }
            // echo "\nData berhasil ditambahkan";            
        }else{
            echo "Data gagal ditambahkan <br> " . mysqli_error($connect);
        }    
    }
?>