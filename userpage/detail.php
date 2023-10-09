<?php 

include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$id=isset($_POST['id'])?$_POST['id']:'';
$qty=isset($_POST['qty'])?$_POST['qty']:'';
$cart=new Cart();

$sanpham= new Sanpham();
$danhmuc= new Danhmuc();
$dataDM=$danhmuc->getAll();

$id=isset($_GET['id'])?$_GET['id']:'';
if($id=='')
{
    header('location:index.php'); exit;
}
$dataDetail=$sanpham->details($id);

include './views/layouts/singleSP.php';