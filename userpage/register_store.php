<?php

include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
if (isset($_POST['email'])) {
    $dangky = new Users();
   
    if ($dangky->find($_POST['email'])) {
        echo "<script>alert('Tai khoan da ton tai')</script>";
        include("./views/layouts/registerU.php") ;
     
    } else {
       
        $dangky->register();
        header("location: loginU.php");
    }
}
