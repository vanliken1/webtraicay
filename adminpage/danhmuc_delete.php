<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');

$id=isset($_GET['id'])?$_GET['id']:'';
if($id !=='')
{
    $danhmuc=new Danhmuc();
    $data = $danhmuc->getAll();
    $n = $danhmuc->delete($id);
    if($n)
    {
        $_SESSION['check1']= 'a';
        header('location:quanlydanhmuc.php');
       
    }
    else{
        $_SESSION['check2']= 'b';
        header('location:quanlydanhmuc.php');
        
    }
}
// header('location:quanlydanhmuc.php');