<?php
class Db{
    protected $connect =null;
    public $n=0; //số dòng kết quả
    //ketnoi CSDL
    function __construct()
    {
        $this->connect = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PW);
        $this->connect->query('set names utf8');
    }
    /*
    hàm sử dung cho sql đê select
    sql:query có tham số
    arr Pram:mảng chứa data tham số
    return các dòng data trong database
    */
    protected function selectQuery($sql,$arrParam=[]){
        $stm=$this->connect->prepare($sql);
        $stm->execute($arrParam);
        $data=$stm->fetchAll(PDO::FETCH_ASSOC);
        $this->n=$stm->rowCount();
        return $data;
    }
    /*
    Hàm sử dụng để update,insert,delete
    */
    protected function updateQuery($sql,$arrParam=[]){
        $stm=$this->connect->prepare($sql);
        $stm->execute($arrParam);
        $this->n=$stm->rowCount();
        return $this->n;
    }
}