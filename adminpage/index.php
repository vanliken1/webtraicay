<?php 
// if(isset($_SESSION['admin'])){
// include './view/layouts/home.php';
// }
// else{
//     header('location:loginAd.php') ;
// }
include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
if(isset($_SESSION['admin'])){
include './view/layouts/home.php';
}
else{
    header('location:loginAd.php') ;
}
