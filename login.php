<?php 
session_start();
if (isset($_SESSION['login'])) {
    header('Location:index.php');
}
require "function.php";
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //cek username 
        $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
       if(mysqli_num_rows($result)===1){
            $cek = mysqli_fetch_assoc($result);
            if ($password == $cek['password']) {
                $_SESSION['login'] = true;
                header("Location: index.php");
            }

     } 
        if($username== '' AND $password == ''){
            echo "<script>alert('masukan username dan password anda!')</script>";
       } else if ($username != 1 AND $password != 1) {
        echo "<script>alert('username dan password anda salah')</script>";
       }
        
}      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Masukan Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Masukan Password :</label>
                <input type="text" name="password" id="password" >
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>