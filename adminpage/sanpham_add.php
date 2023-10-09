<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$cat = new Danhmuc();
$dataCat = $cat->getAll(); 

$sup = new Supplier();
$dataSup = $sup->getAll(); 
 include 'view/layouts/formSP_add.php';
   
