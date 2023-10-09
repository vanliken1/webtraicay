<?php 

include './config.php';
function loadClass($className){
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
// print_r($_POST);
// $_SESSION['giohang']=$cartArr;
//Chuc nang gio hang:THem SP, Sua so luong,Delete,Hien thi

//Tao class Cart co chua function cho cac chuc nang

$id=isset($_POST['id'])?$_POST['id']:'';
$qty=isset($_POST['qty'])?$_POST['qty']:'';
$action=isset($_POST['action'])?$_POST['action']:'';
$cart=new Cart();
if($action=='Add')
    $cart->add($id,$qty);
if($action=='X')
    $cart->delete($id,$qty);
    // print_r($cart->show());

header('location:cart2.php');
