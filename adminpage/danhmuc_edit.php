<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');

$id=isset($_GET['id'])?$_GET['id']:'';
if($id !=='')
{
    $cat = new Danhmuc();
    $detail = $cat->details($id);

    include 'view/layouts/formDM_edit.php';
}
else

header('location:quanlydanhmuc.php');