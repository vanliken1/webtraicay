<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
if (isset($_SESSION['admin'])) {
    $sanpham = new Sanpham();
    $kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
    $sup_id = isset($_GET['sup_id']) ? $_GET['sup_id'] : '';
    $data = $sanpham->find($kw, $cat_id, $sup_id);
    // $data=$sanpham->getAll();
    $n = $sanpham->n;

    $danhmuc = new Danhmuc();
    $dataCat = $danhmuc->getAll();

    $supplier = new Supplier();
    $dataSup = $supplier->getAll();
    include './view/layouts/qlsanpham.php';
} else {
    header('location:loginAd.php');
}
// $sanpham= new Sanpham();
// $kw = isset($_GET['keyword'])?$_GET['keyword']:'';
// $cat_id= isset($_GET['cat_id'])?$_GET['cat_id']:'';
// $sup_id= isset($_GET['sup_id'])?$_GET['sup_id']:'';
// $data=$sanpham->find($kw,$cat_id,$sup_id);
// // $data=$sanpham->getAll();
// $n=$sanpham->n;

// $danhmuc=new Danhmuc();
// $dataCat=$danhmuc->getAll();

// $supplier=new Supplier();
// $dataSup=$supplier->getAll();
// include './view/layouts/qlsanpham.php';