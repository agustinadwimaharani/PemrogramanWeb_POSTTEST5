<?php
    include 'koneksi.php';
    if(isset($_GET['no'])){
        $delete = mysqli_query($conn, "DELETE FROM fmb WHERE no ='".$_GET['no']."'");
        header('location:hasil.php');
    }
?>