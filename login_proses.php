<?php

$defaultemail="admin@gmail.com";
$defaultpassword="admin";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    if($email === $defaultemail && $password === $defaultpassword){
        echo"<meta http-equiv='refresh' content='1;url=dashboard.php'>";
    }else{
        echo"email atau password salah";
        echo"<meta http-equiv='refresh' content='1;url=index.php'>";

    }
}else{

    echo"403-Akses ditolak!";
}