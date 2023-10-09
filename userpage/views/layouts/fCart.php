<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    include 'header.php';
    ?>
</head>

<body>
    <!-- Page Preloder -->
  

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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tong = 0; ?>
                                <?php

                                foreach ($dataCart as $id => $item) {
                                ?>

                                    <?php $tong += $item['qty'] * $item['gia']; ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="<?php echo IMG_PRODUCT . '/' . $item['img'] ?>" alt="" width="70px" height="70px">
                                            <h5><?php echo $item['name'] ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?php echo number_format($item['gia']) ?>đ/kg
                                        </td>
                                        <td class="shoping__cart__quantity">
                                        <form action="cart.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <input type="number" name='qty' value="<?php echo $item['qty'] ?>" min=1 >
                                                <input type="hidden" name=action value='updateQuantity'>

                                        </form>
                                           
                                            

                                        </td>
                                        <td class="shoping__cart__total">

                                            <?php echo number_format($item['gia'] * $item['qty']) ?>đ/kg
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <form action="cart.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <input type="submit" name='action' value="X" class="btn btn-light">

                                            </form>
                                        </td>
                                    </tr>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span><?php echo number_format($tong) ?></span></li>
                        <li>Total <span><?php echo number_format($tong) ?></span></li>
                    </ul>
                    <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <?php
    include 'footer.php';
    ?>
    <script>
    $(document).ready(
        function() {

            $('input[name=qty]').click(function() {
                qty = $(this).val();
                id = $(this).parent().children(":first").val();
                console.log(id, qty);
                $.ajax({
                    url: 'cartUpdate.php',
                    data: {
                        id: id,
                        qty: qty,
                        action: 'updateQuantity'
                    },
                    type: 'POST',
                    success: function(dataReturn) {
                        console.log(dataReturn);
                        $('div.header__cart span#soluong').html(dataReturn);
                        location.reload();
                    },
                    error: function(dataReturn) {
                        console.log(dataReturn);
                    }
                });
            });
        }
    );
</script>


</body>

</html>