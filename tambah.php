<?php 
session_start();
    if(!isset($_SESSION['login'])) {
        header("Location:login.php");
        exit;
    }
require 'function.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0 ) {
        echo "<script>
                alert('data bsehasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Tambah Data Guru</title>

</head>
<body>
    <form action="" method="post" class="form">
        <h2>Tambah Data</h2>
        <ul>
            <li>
                <label for="nama">Masukan Nama :</label>
                <input type="text" name="nama" id="nama" required >
            </li>
            <li>
                <label for="jenis_kelamin">Masukan Jenis Kelamin :</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required >
            </li>
            <li>
                <button type="submit" name="tambah">tambah</button>
            </li>
            <li>
               <button> <a href="index.php">Kembali</a></button>
            </li>

        </ul>
    </form>
</body>
</html>

