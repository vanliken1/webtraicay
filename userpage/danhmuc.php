<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$id=isset($_POST['id'])?$_POST['id']:'';
$qty=isset($_POST['qty'])?$_POST['qty']:'';
$kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$cat_id= isset($_GET['cat_id'])?$_GET['cat_id']:'';

$cart=new Cart();
$danhmuc= new Danhmuc();
$dataDM=$danhmuc->getAll();
$sanpham= new Sanpham();
$dataBestSeller=$sanpham->bestSeller();
$data=$sanpham->findByIdCat($cat_id);
// $data = $sanpham->find($kw);
include './views/layouts/sanpham.php';