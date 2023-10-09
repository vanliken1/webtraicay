<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'slidebar.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php' ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 d-flex justify-content-center">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Sửa</h6>
                            <form action="sanpham_update.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="put">
                                <div class="row mb-3">
                                    <label for="exampleInput1" class="form-label">Mã sản phẩm</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleInput1" name="idsanpham" value="<?php echo $detail['idsanpham'] ?>" readonly>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInput2" class="form-label">Tên sản phẩm</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleInput2" name="tensanpham" value="<?php echo $detail['tensanpham'] ?> " required>
                                        
                                    </div>
                                </div>

                                <textarea name="mota" id="mota" id="" cols="30" rows="10" > <?php echo $detail['mota'] ?></textarea> <br>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>


                                <div class="row mb-3">
                                    <label for="exampleInput2" class="form-label">Giá</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="exampleInput2" name="gia" value="<?php echo $detail['gia'] ?>" required>
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="exampleInput2" class="form-label">Hình ảnh</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" id="exampleInput2" name="img" required>
                                        <img src="<?php echo IMG_PRODUCT. '/' . $detail['img'] ?>" style="width:100px" > <br>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInput3" class="form-label"> Danh mục</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="exampleInput3" name="cat_id">
                                            <?php foreach($dataCat as $item){
                                                $s='';
                                                if($detail['cat_id']==$item['cat_id']) $s='selected';
                                                ?>
                                            <option value="<?php echo $item['cat_id'] ?>" <?php echo $s; ?> >
                                            
                                                <?php echo $item['cat_name'] ?></option>
                                            <?php } ?>
                                    
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInput3" class="form-label">Nhà cung cấp </label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="exampleInput3" name="sup_id">
                                            <?php foreach($dataSup as $item){
                                                $s='';
                                                if($detail['sup_id']==$item['sup_id']) $s='selected'; //
                                                ?>
                                            <option value="<?php echo $item['sup_id'] ?>" <?php echo $s; ?> >
                                            
                                                <?php echo $item['sup_name'] ?></option>
                                            <?php } ?>
                                    
                                        </select>
                                    </div>
                                </div>



                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Thay doi" class="btn btn-success me-2">
                                    <a href="quanlysanpham.php" class="btn btn-danger me-2">Tro ve</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <?php include 'footer.php' ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include 'script.php' ?>
</body>

</html>