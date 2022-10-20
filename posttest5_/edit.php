<?php
    include 'koneksi.php';
    if(isset($_GET['no'])){
        $result = mysqli_query($conn, "SELECT FROM fmb WHERE no ='".$_GET['no']."'");
        $row = mysqli_fetch_array($data_edit);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.2.css" />
    <title>Form Edit data</title>
</head>
<body>
    <h2>Edit Produk Feel My Bag</h2><br>
    <a href="hasil.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Feel My Bag</a><br>
    <form action="" method="POST">
        <table style="text-align:center;widht:100%;background-color:#f2d6f2">
            <tr>   
                <td>No</td>
                <td><input type="text" name="no" placeholder="No" value="<?php echo $row['no'] ?>" required></td>
            </tr>
            <tr>   
                <td>Merk Tas</td>
                <td><input type="text" name="merk_tas" placeholder="Merk Tas" value="<?php echo $row['merk_tas'] ?>"  required></td>
            </tr>
            <tr>
                <td>Tanggal Stok</td>
                <td><input type="date" name="tanggal_stok" value="<?php echo $row['tanggal_stok'] ?>" required ></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><input type="radio" name="size" value="S">S
                <input type="radio" name="size" value="M" value="<?php echo $row['size'] ?>" required>M</td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="number" name="jumlah_tas" placeholder="Jumlah Stok" value="<?php echo $row['jumlah_tas'] ?>"  required></td>
            </tr>
            <tr>   
                <td>Warna</td>
                <td><input type="text" name="warna" placeholder="Warna" value="<?php echo $row['warna'] ?>"  required></td>
            </tr>
            <br>
                <td><button type="submit" name="edit" value="submit">Submit </button></td>
        </table>
    </form>

    <?php
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE fmb SET merk_tas = '".$_POST['merk_tas']."', 
            tanggal_stok = '".$_POST['tanggal_stok']."', size = '".$_POST['size']."',
            jumlah_stok = '".$_POST['jumlah_tas']."', warna= '".$_POST['warna']."',
            WHERE no = '".$_GET['no']."'"); 
    if($update){
            echo 'Data Berhasil Diedit';
        }else{
            echo 'Data Gagal Diedit';
        }                               
    }

    ?>
</body>
</html>
