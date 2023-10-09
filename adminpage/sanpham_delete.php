<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');

$id=isset($_GET['id'])?$_GET['id']:'';
if($id !=='')
{
    $sanpham=new Sanpham();
    $n = $sanpham->delete($id);
}

header('location:quanlysanpham.php');