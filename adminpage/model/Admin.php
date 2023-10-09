<?php
class Admin extends Db{
    function getAll()
    {
        $sql="select * from admin";
        return $this->selectQuery($sql);
    }

    function checkAdmin($username,$password){
        $sql="select *from admin where username like ?";
        $arrParam=["%$username%"];
        if($password !='')
        {
            $sql=$sql .'and password=?';
            $arrParam[]=$password;
        }
        return $this->selectQuery($sql,$arrParam);

    }
   
 
}
?>