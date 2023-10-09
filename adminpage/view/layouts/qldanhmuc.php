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
                            <h6 class="mb-4">Quản lý Danh mục</h6>
                            <a href="danhmuc_add.php" class="btn btn-primary">Thêm</a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã danh mục</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $item) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $item['cat_id'] ?></th>
                                            <td><?php echo $item['cat_name'] ?></td>
                                            <td>
                                                <a href="danhmuc_delete.php?id=<?php echo $item['cat_id'] ?> " onclick="return confirm('Bạn có muốn xóa thật à?')" class="btn btn-primary">Xóa</a>
                                                <a href="danhmuc_edit.php?id=<?php echo $item['cat_id'] ?> " class="btn btn-primary">Sửa</a>
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