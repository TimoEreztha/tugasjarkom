<?php 
    session_start();
    if(isset($_SESSION['login'])) {
        header('Location:login.php');
        exit;
    }
    require 'function.php';
    $id = $_GET['id_guru'];
    if (hapus($id) > 0 ) {
        echo "<script>
        alert('data bsehasil dihapus');
        document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
        alert('data tidak bsehasil dihapus');
        document.location.href = 'index.php';
    </script>";
    }
?>