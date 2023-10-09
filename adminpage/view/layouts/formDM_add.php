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
                            <h6 class="mb-4">Thêm</h6>
                            <form action="danhmuc_store.php" method="POST" >                            
                                <div class="row mb-3">
                                    <label for="exampleInput1" class="form-label">Mã danh mục</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleInput1" name="cat_id" >
                                
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInput2" class="form-label">Tên danh mục</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleInput2" name="cat_name" >                                        
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Thay doi" class="btn btn-success me-2">
                                    <a href="quanlydanhmuc.php" class="btn btn-danger me-2">Tro ve</a>
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