<?php
include('connect.php');

if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    unset($_SESSION['password']);
    unset($_SESSION['id_user']);
    
    $check = session_destroy();
    if($check){
        header("location:index.php");
    }
}