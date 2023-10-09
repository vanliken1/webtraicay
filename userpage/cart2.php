<?php 

include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$cart=new Cart();
$sanpham= new Sanpham();
$danhmuc= new Danhmuc();
$data = $sanpham->find($kw);
$dataDM=$danhmuc->getAll();
$dataCart=$cart->show();

include 'views/layouts/fCart.php';