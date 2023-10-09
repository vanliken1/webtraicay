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
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Quản lý Sản phẩm</h6>
                            <a href="sanpham_add.php" class="btn btn-primary">Them</a>
                            <form action="quanlysanpham.php" method='GET'>
                                <div class="col-md-5" >
                                    Tên sản phẩm cần tìm <input class="form-control" type="text" name="keyword" value="<?php echo $kw ?>">
                                </div>
                                
                                <div class="col-md-2" style="float:right">
                                    Loại sản phẩm<select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="cat_id" >
                                        <option value="">Tất cả</option>
                                        <?php
                                        foreach($dataCat as $item){
                                            ?>
                                            <option value="<?php echo $item['cat_id'] ?>"><?php echo $item['cat_name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                        
                                    </select>
                                    Nhà cung cấp <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="sup_id" >
                                        <option value="">Tất cả</option>
                                        <?php
                                        foreach($dataSup as $item){
                                            ?>
                                            <option value="<?php echo $item['sup_id'] ?>"><?php echo $item['sup_name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                        
                                    </select>

                                </div>
                                
                                <input type="submit" value="Tim kiem" class="my-2" >
                            
                            </form>
                            <div>
                                <h6 class="my-4">So san pham la: <?php echo $n ?></h6>
                            </div>
                            <table class="table table-striped">
                                
                                <thead>
                                    <tr>
                                        <th scope="col">Mã sản phẩm</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Gía</th>
                                        <th>Hình ảnh</th>
                                        <th>Mã danh mục</th>
                                        <th>Mã nhà cung cấp</th>

                                        <th ></th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $item) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $item['idsanpham'] ?></th>
                                            <td><?php echo $item['tensanpham'] ?></td>
                                            <td><?php echo $item['mota'] ?></td>
                                            <td><?php echo $item['gia'] ?></td>
                                            <td>
                                            <img src="<?php echo IMG_PRODUCT .'/'.  $item['img'] ?>" alt="" width="60px" height="60px">
                                            </td>
                                            <td><?php echo $item['cat_id'] ?></td>
                                            <td><?php echo $item['sup_id'] ?></td>
                                            <td>
                                                <a href="sanpham_delete.php?id=<?php echo $item['idsanpham'] ?> " onclick="return confirm('Ban co muon xoa that a ?')" class="btn btn-primary">Xoa</a>
                                                <a href="sanpham_edit.php?id=<?php echo $item['idsanpham'] ?> " class="btn btn-primary">Sua</a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>


                            </table>
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