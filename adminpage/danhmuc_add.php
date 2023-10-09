<?php 
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$cat = new Danhmuc();
$dataCat = $cat->getAll(); 

 include 'view/layouts/formDM_add.php';