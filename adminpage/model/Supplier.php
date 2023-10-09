<?php
class Supplier extends Db{
    function getAll()
    {
        return $this->selectQuery('select * from supplier');
    }
    //Them
    function store (){

    }
    //Xoa
    function delete(){

    }
    //Tra ve 1 category co cat_id=$id
    function edit($id){

    }
    //Cap naht
    function update(){
        
    }
}