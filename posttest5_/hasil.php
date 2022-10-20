<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.2.css" />
    <title>Form Pendataan</title>
</head>
<body>
    <h2>Pendataan Produk Feel My Bag</h2><br>
    <a href="form.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
    <form action="hasil.php" method="POST">
        <table border="1" cellspacing="0" width="100%">
            <tr style="text-align:center;font-weight:bold;background-color:#f2d6f2">
                <td>No</td>
                <td>Merk Tas</td>
                <td>Tanggal Stok</td>
                <td>Size</td>
                <td>Jumlah Stok</td>
                <td>Warna</td>
                <td>Opsi</td>
            </tr>

            <?php 
            include 'koneksi.php';
            $id = 1;
            $select = mysqli_query($conn, "SELECT *FROM fmb");
            if(mysqli_num_rows($select) > 0)
            while($hasil = mysqli_fetch_array($select)){
            ?>
            <tr style="text-align:center;background-color:#eee">
                <td><?php echo $hasil['no']?></td>
                <td><?php echo $hasil['merk_tas']?></td>
                <td><?php echo $hasil['tanggal_stok']?></td>
                <td><?php echo $hasil['size']?></td>
                <td><?php echo $hasil['jumlah_tas']?></td>
                <td><?php echo $hasil['warna']?></td>
                <td>
                    <a href="edit.php?no=<?php echo  $hasil['no']?>">Edit</a> ||
                    <a href="delete.php?no=<?php echo  $hasil['no']?>">Hapus</a>
                </td>
            </tr>
            <?php }else{ ?>
                <tr>
                    <td colspan="7" align="center">Data Kosong</td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>