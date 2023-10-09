<?php
//kế thừa database của DB
class Sanpham extends Db{
    function getAll()
    {
        $sql="select * from sanpham";
        return $this->selectQuery($sql);
    }

    //lAY NGAU NHIEN
    function random($n)
    {
        $sql="select * from sanpham order by rand() limit 0,$n";
        return $this->selectQuery($sql);
    }

    function find($keyword){
        $sql="select *from sanpham where tensanpham like ?";
        $arrParam=["%$keyword%"];
     
        return $this->selectQuery($sql,$arrParam);

    }
    // Lay 6 san pham moi nhat
    function last($n=6){
        return $this->selectQuery("select * from sanpham where new=1 limit 0,$n");
    } 
    //Lay 6 san pham ban chay
    function bestSeller($n=6){
        return $this->selectQuery("select* from sanpham where bestseller=1 limit 0,$n");
    }
    function details($idsanpham)
    {
        $sql = "select *from sanpham where idsanpham=? ";
        $arrParam = [$idsanpham];
        $data = $this->selectQuery($sql, $arrParam); //mang 2 chieu co 1 phan tu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
    function findByIdCat($cat_id=''){
        $sql="select *from sanpham where cat_id = ?";
      
        $arrParam[]=$cat_id;
        
        return $this->selectQuery($sql,$arrParam);

    }
}