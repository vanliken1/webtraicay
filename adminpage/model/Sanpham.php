<?php
//kế thừa database của DB
class Sanpham extends Db
{
    function getAll()
    {
        $sql = "select * from sanpham";
        return $this->selectQuery($sql);
    }

    //lAY NGAU NHIEN
    function random($n = 4)
    {
        $sql = "select * from sanpham order by rand() limit 0,$n";
        return $this->selectQuery($sql);
    }

    function find($keyword, $cat_id = '', $sup_id = '')
    {
        $sql = "select *from sanpham where tensanpham like ?";
        $arrParam = ["%$keyword%"];
        if ($cat_id != '') {
            $sql = $sql . 'and cat_id=?';
            $arrParam[] = $cat_id;
        }
        if ($sup_id != '') {
            $sql = $sql . 'and sup_id=?';
            $arrParam[] = $sup_id;
        }
        return $this->selectQuery($sql, $arrParam);
    }
    function delete($idsanpham)
    {
        $sql = "delete from sanpham where idsanpham=?";
        $arrParam = [$idsanpham];
        $details = $this->details($idsanpham);
        $img = $details['img']; //lay hinh cua sach
        $n = $this->updateQuery($sql, $arrParam);
        //Xoa duoc 
        if ($n > 0) {
            unlink(IMG_PRODUCT . '/' . $img); //xoa(kiem tra hinh co ton tai hay ko)
        }
        return $n;
    }
    //Lay thong tin san pham bo vao form 
    function details($idsanpham)
    {
        $sql = "select *from sanpham where idsanpham=? ";
        $arrParam = [$idsanpham];
        $data = $this->selectQuery($sql, $arrParam); //mang 2 chieu co 1 phan tu data[0]
        if (count($data) > 0)
        return $data[0];
        return [];
    }
    function update()
    {
        // print_r($_POST);
        // print_r($_FILES);
        $idsanpham = isset($_POST['idsanpham']) ? $_POST['idsanpham'] : '';
        $tensanpham = isset($_POST['tensanpham']) ? $_POST['tensanpham'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : '';
        $sup_id = isset($_POST['sup_id']) ? $_POST['sup_id'] : '';
        if ($_FILES['img']['error'] > 0) { //error>0 la khong co hinh
            $sql = "update sanpham set tensanpham=?,mota=?,gia=?,cat_id=?,sup_id=? 
         where idsanpham=?";
            $arrParam = [$tensanpham, $mota, $gia, $cat_id, $sup_id, $idsanpham];
        } else {
            $sql = "update sanpham set tensanpham=?,mota=?,gia=?,img=?,cat_id=?,sup_id=? 
             where idsanpham=?";
            $img = time() . '-' . $_FILES['img']['name'];
            $details = $this->details($idsanpham);
            $old_img = $details['img'];
            unlink(IMG_PRODUCT . '/' . $old_img);
            $arrParam = [$tensanpham, $mota, $gia, $img, $cat_id, $sup_id, $idsanpham];

            move_uploaded_file($_FILES['img']['tmp_name'], IMG_PRODUCT . '/' . $img);
        }
        $n = $this->updateQuery($sql, $arrParam);
    }
    function insert(){
         
        $idsanpham = isset($_POST['idsanpham']) ? $_POST['idsanpham'] : '';
        $tensanpham = isset($_POST['tensanpham']) ? $_POST['tensanpham'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : '';
        $sup_id = isset($_POST['sup_id']) ? $_POST['sup_id'] : '';
        $img=$_FILES['img']['name'];
        $sql = "INSERT INTO sanpham (idsanpham,tensanpham,mota,gia,img,cat_id,sup_id) 
        values (?,?,?,?,?,?,?)";
        $arrParam = [$idsanpham,$tensanpham, $mota, $gia, $img, $cat_id, $sup_id];
        move_uploaded_file($_FILES['img']['tmp_name'],IMG_PRODUCT.'/'.$img);
        $n= $this->updateQuery($sql, $arrParam);
    }
}
