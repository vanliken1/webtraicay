<?php
include './config.php';
function loadClass($className)
{
    include "./model/$className.php";  //include Sanpham.php
}
spl_autoload_register('loadClass');
$email = isset($_POST['email'])?$_POST['email']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
$password=md5($password);
if ($email && $password){
    $check = new Users();
    if ($check->checkUser($email, $password)) {

        $data = $check->checkUser($email, $password);
        $_SESSION["users"] = $data[0];
        // var_dump($_SESSION['users']);
        
        header("location:" . URL);
    } else {
        echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu.')</script>";
    }
}

include './views/layouts/login.php';



