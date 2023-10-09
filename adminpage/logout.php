<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');


unset($_SESSION['admin']);
header("location:loginAd.php" );