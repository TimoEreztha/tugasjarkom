<?php 
session_start();
    if(!isset($_SESSION['login'])) {
        header("Location:login.php");
        exit;
    }
require 'function.php';
$id = $_GET['id_guru'];
$guru = query("SELECT * FROM guru WHERE id_guru = $id")[0];

if (isset($_POST['tambah'])) {
    if (ubah($_POST) > 0 ) {
        echo "<script>
                alert('data bsehasil diubah');
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
    <title>Ubah Data Guru</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id_guru" value="<?php echo $guru['id_guru']; ?>">
        <ul>
            <li>
                <label for="nama">Masukan Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?php echo $guru['nama']; ?>">
            </li>
            <li>
                <label for="jenis_kelamin">Masukan Jenis Kelamin :</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?php echo $guru['jenis_kelamin']; ?>">
            </li>
            <li>
                <button type="submit" name="tambah">ubah</button>
            </li>
            <li>
               <button> <a href="index.php">Kembali</a></button>
            </li>

        </ul>
    </form>
</body>
</html>