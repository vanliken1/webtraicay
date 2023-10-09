<?php
//kế thừa database của DB
class Danhmuc extends Db{
    function getAll()
    {
        $sql="select * from category";
        return $this->selectQuery($sql);
    }

    //lAY NGAU NHIEN

    function findById($id){
        $sql="select *from category where cat_id = ?";
        $arrParam=["$id"];
        return $this->selectQuery($sql,$arrParam);

    }

}