<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    include 'header.php';
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php
    include 'menu.php';
    ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danhmuc</h4>
                            <ul>

                                <?php foreach ($dataDM as $item) {
                                ?>
                                    <li><a href="danhmuc.php?cat_id=<?php echo $item['cat_id'] ?>"><?php echo $item['cat_name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Best Seller</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <?php
                                foreach ($dataBestSeller as $item) {
                                ?>
                                    <div class="col-lg-4">

                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg" data-setbg="<?php echo IMG_PRODUCT . '/' . $item['img'] ?>">
                                                <div class="product__discount__percent">Hot</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="detail.php?id=<?php echo $item['idsanpham'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>Product</span>
                                                <h5><a href="detail.php?id=<?php echo $item['idsanpham'] ?>"><?php echo $item['tensanpham'] ?></a></h5>
                                                <div class="product__item__price"><?php echo number_format($item['gia']) ?>đ/kg</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($data as $item) {
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">

                                    <div class="product__item__pic set-bg" data-setbg="<?php echo IMG_PRODUCT . '/' . $item['img'] ?>">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                            <li><a href="detail.php?id=<?php echo $item['idsanpham'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="detail.php?id=<?php echo $item['idsanpham'] ?>"><?php echo $item['tensanpham'] ?></a></h6>
                                        <h5><?php echo number_format($item['gia']) ?>đ/kg</h5>
                                    </div>


                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>



</body>

</html>