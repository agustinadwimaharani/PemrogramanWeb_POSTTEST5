<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.2.css" />
    <title>Form Input Data</title>
</head>
<body>
    <h2>Pendataan Produk Feel My Bag</h2><br>
    <a href="hasil.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Feel My Bag</a><br>
    <form action="" method="POST">
        <table style="text-align:center;widht:100%;background-color:#f2d6f2">
            <tr>   
                <td>No</td>
                <td><input type="number" name="no" placeholder="No" required></td>
            </tr>
            <tr>   
                <td>Merk Tas</td>
                <td><input type="text" name="merk_tas" placeholder="Merk Tas" required></td>
            </tr>
            <tr>
                <td>Tanggal Stok</td>
                <td><input type="date" name="tanggal_stok" required></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><input type="radio" name="size" value="S">S
                <input type="radio" name="size" value="M" required>M</td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="number" name="jumlah_tas" placeholder="Jumlah Stok" required></td>
            </tr>
            <tr>   
                <td>Warna</td>
                <td><input type="text" name="warna" placeholder="Warna" required></td>
            </tr>
            <br>
                <td><button type="submit" name="submit">Submit </button></td>
        </table>
    </form>

    <?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
    $insert = mysqli_query($conn, "INSERT INTO fmb VALUES 
                        ('".$_POST['no']."',
                        '".$_POST['merk_tas']."',
                        '".$_POST['tanggal_stok']."',
                        '".$_POST['size']."',
                        '".$_POST['jumlah_tas']."',
                        '".$_POST['warna']."')");
        if($insert){
            echo 'Data Berhasil Disimpan';
        }else{
            echo 'Data Gagal Disimpan';
        }                    
    }
    ?>
</body>
</html>