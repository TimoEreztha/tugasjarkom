<?php 
session_start();
require 'function.php';
$guru =query("SELECT * FROM guru");

if (!isset($_SESSION['login'])) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="css">
    <title>Data Guru</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h2>Daftar Guru</h2>
    <a href="tambah.php">Tambah Data Guru</a>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>nama</th>
            <th>jenis_kelamin</th>
        </tr>
        <?php $i=1;?>
        <?php foreach( $guru as $row ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="hapus.php?id_guru=<?php echo $row["id_guru"]; ?>" onclick="return confirm('yakin')" >hapus</a>
                <a href="ubah.php?id_guru=<?php echo $row['id_guru']; ?>">edit</a>
            </td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["jenis_kelamin"]; ?></td>
         
        </tr>

        <?php $i++; ?> 
        <?php endforeach; ?>
    </table>
</body>
</html>