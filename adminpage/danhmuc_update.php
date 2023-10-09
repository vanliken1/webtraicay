<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');


$danhmuc = new Danhmuc();
$danhmuc->update();

 header('location:quanlydanhmuc.php');
