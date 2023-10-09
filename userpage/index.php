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
$dataNew=$sanpham->last(4);
$data = $sanpham->find($kw);
$dataRandom=$sanpham->random(8);
$danhmuc= new Danhmuc();
$dataDM=$danhmuc->getAll();

include './views/layouts/home.php';