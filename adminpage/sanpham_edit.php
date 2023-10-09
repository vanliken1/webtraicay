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
    $detail =$sanpham->details($id);

    $cat = new Danhmuc();
    $dataCat = $cat->getAll(); 

    $sup = new Supplier();
    $dataSup = $sup->getAll(); 
    include 'view/layouts/formSP_edit.php';
}
else

header('location:quanlysanpham.php');