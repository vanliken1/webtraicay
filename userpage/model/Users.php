<?php
class Users extends Db{
    function getAll()
    {
        $sql="select * from users";
        return $this->selectQuery($sql);
    }

    function checkUser($email,$password){
        $sql="select *from users where email like ?";
        $arrParam=["%$email%"];
        if($password !='')
        {
            $sql=$sql .'and password=?';
            $arrParam[]=$password;
        }
        return $this->selectQuery($sql,$arrParam);

    }
    function register(){
         
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $password=md5($password);        
        $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
        $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
        $sql = "INSERT INTO users (email,password,name,diachi,sdt) 
        values (?,?,?,?,?)";
        $arrParam = [$email,$password, $name, $diachi, $sdt];
        $this->updateQuery($sql, $arrParam);
    }
    function find($email){
        $sql="select *from users where email like ?";
        $arrParam=["%$email%"];
     
        return $this->selectQuery($sql,$arrParam);
    }
   
 
}
?>