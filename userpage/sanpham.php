<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$id=isset($_POST['id'])?$_POST['id']:'';
$qty=isset($_POST['qty'])?$_POST['qty']:'';
$kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$cart=new Cart();

$sanpham= new Sanpham();
$data=$sanpham->getAll();
$data = $sanpham->find($kw);
$danhmuc= new Danhmuc();
$dataDM=$danhmuc->getAll();

$dataBestSeller=$sanpham->bestSeller();


include './views/layouts/sanpham.php';