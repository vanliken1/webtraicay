<?php
class Cart {
    protected $cart=[];
    function __construct()
    {
        if(!isset($_SESSION)) session_start();
        $this->cart=isset($_SESSION['cart'])?$_SESSION['cart']:[];
    }
    //Ham them san pham co ma la id va so luong mac dinh la 1 vao gio hang
    function add($id,$qty=1)
    {
        //kiem tra co ton ma san pham do ko nếu có thì tăng số lượng
        if(isset($this->cart[$id])) //ton tai thi tang thêm
        {
            $this->cart[$id]['qty']+=$qty;
        }
        else
        { //kiem tra lay thong tin trong DB nếu có thì them ko thì thôi
            $sp=new Sanpham();
            $data=$sp->details($id);
            if(Count($data)>0){//co san pham->them moi
                $this->cart[$id]=['name'=>$data['tensanpham'],'gia'=>$data['gia'],'img'=>$data['img'],'qty'=>$qty];
            }
        }
    }
    function show(){
        
        return $this->cart;
    }
    //huy gio hang
    function __destruct()
    {
        $_SESSION['cart']=$this->cart;
    }
    function delete($id){
        unset($this->cart[$id]);
    }

    function update($id, $qty)
    {
        if(isset($this->cart[$id])) 
        {
            $this->cart[$id]['qty']=$qty;
        }
    }

    function numItem()
    {
        $t=0;
        foreach($this->cart as $item) $t +=$item['qty'];
        return $t;
    }
}