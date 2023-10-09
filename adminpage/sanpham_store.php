<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');


    $sanpham=new Sanpham();
    $sanpham->insert();

    


    header('location:quanlysanpham.php');