<?php
include './config.php';
function loadClass($cName)
{
    include "./model/$cName.php";
}
spl_autoload_register('loadClass');


unset($_SESSION['users']);
header("location:" .URL);