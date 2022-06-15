<?php

ob_start();

include "./connection.php";

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($conn, str_replace(' ','',$_POST['username']));
    $pass = mysqli_real_escape_string($conn, str_replace(' ','',$_POST['password']));

    $result = mysqli_query($conn, "SELECT * FROM `akun` WHERE `username`='$user';");

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
        if($pass = $data['password']){
            session_start();
            $_SESSION['role'] = $data['role'];

            echo "<script>window.alert(\"Login Sukses\")</script>";
            header("refresh:0;url=../page/home.php");
        }
    }else{
        echo "<script>window.alert(\"Login Gagal\")</script>";
        header("refresh:0;url=../index.php");
    }
}

?>