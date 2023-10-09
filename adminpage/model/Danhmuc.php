<?php
class Danhmuc extends Db{
    function getAll()
    {
        return $this->selectQuery('select * from category');
    }
    //Them
    function store (){
        $cat_id = $_POST['cat_id'] ?? '';
        $cat_name = $_POST['cat_name'] ?? '';
        $sql = "INSERT INTO category (cat_id, cat_name) 
        values (?,?)";
        $arrParam = [$cat_id, $cat_name];
        $n = $this->updateQuery($sql, $arrParam);
    }
    function details($cat_id)
    {

        $sql = "select * from category where cat_id=? ";
        $arrParam = [$cat_id];
        $data = $this->selectQuery($sql, $arrParam); //mang 2 chieu co 1 phan tu data[0]
       
        if (count($data) > 0)
            return $data[0];
        return [];
    }
    //Xoa
    function delete($cat_id){
        $sql = "delete from category where cat_id=?";
        $arrParam = [$cat_id];
        $n = $this->updateQuery($sql, $arrParam);
        return $n;
    }
    //Tra ve 1 category co cat_id=$id
    function edit($id){

    }
    //Cap naht
    function update(){
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : '';
        $cat_name = isset($_POST['cat_name']) ? $_POST['cat_name'] : '';
        $sql = "update category set  cat_name=? where cat_id=?";
        $arrParam = [ $cat_name,$cat_id];
        $n = $this->updateQuery($sql, $arrParam);
    }
}