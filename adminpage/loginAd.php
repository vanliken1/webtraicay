<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$username = isset($_POST['username'])?$_POST['username']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
$password=md5($password);

if ($username && $password){
    $check = new Admin();
    if ($check->checkAdmin($username, $password)) {

        $data = $check->checkAdmin($username, $password);
        $_SESSION["admin"] = $data[0];
        // var_dump($_SESSION['admin']);

        header("location:" . URLAD);
    
    } else {
        echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu.')</script>";
    }
}

include './view/layouts/loginAdmin.php';