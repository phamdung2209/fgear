<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="body">

        <div class="body__banner-main">
            <img class="banner__main--img" src="images/banner.jpg" alt="banner" />

            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="banner__main--img" src="images/banner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="banner__main--img"
                    src="https://theme.hstatic.net/200000065946/1000806110/14/slideshow_1.jpg?v=1625"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="banner__main--img"
                    src="https://theme.hstatic.net/200000065946/1000806110/14/slideshow_1.jpg?v=1625"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="banner__main--img"
                    src="https://theme.hstatic.net/200000065946/1000806110/14/slideshow_10.jpg?v=1625"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

        </div>

        <div class="body__banner-slideShow">
            <img class="body__banner-slideShow--img" src="images/banner1.jpg" alt="banner" />
            <img class="body__banner-slideShow--img" src="images/banner2.jpg" alt="banner" />
            <img class="body__banner-slideShow--img" src="images/banner3.jpg" alt="banner" />
            <img class="body__banner-slideShow--img" src="images/banner4.jpg" alt="banner" />
        </div>


        <!-- start -->

        <?php
            require('search.php');
        ?>


        <!-- end -->


        <div class="body__products">
            <div class="body__products-wardrobe">

                <div class="products__tittle">
                    <div class="products__tittle--line"></div>
                    <div class="products__tittle--bs">WARDROBE - BEST SELLER</div>
                    <div class="products__tittle--line"></div>
                </div>

                <div class="products-wardrobe__order">

                    <div class="wardrobe__order">
                        <div class="order__pad">
                            <a class="wardrobe__order-link" href="details.php">

                                <div class="wardrobe__order--img">
                                    <img class="wardrobe__order--img-main" src="images/productWardrobe.jpg"
                                        alt="Wardrobe" />
                                </div>

                                <div class="wardrobe__order--content">
                                    Tủ Quần Áo Gỗ 2 Cánh MOHO VIENNA 201 4 Màu
                                </div>

                                <div class="wardrobe__order--pay">
                                    <div class="wardrobe__order--price">
                                        5.490.000 <span style="text-decoration:underline">đ</span>
                                    </div>

                                    <div class="wardrobe__order--discount">
                                        <del>
                                            6.000.000 <span style="text-decoration:underline">đ</span>
                                        </del>
                                    </div>

                                    <div class="wardrobe__order-add">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>

                                <div class="wardrobe__order--detail">

                                    <div class="wardrobe__order--detail-size wardrobe__order--detail-ali">
                                        <img class="wardrobe__order--detail--img" src="images/size.png" alt="size" />
                                        <span class="wardrobe__order--detail--content">Dài 100cm x Rộng 60cm x Cao
                                            2m1</span>
                                    </div>

                                    <div class="wardrobe__order--detail-material wardrobe__order--detail-ali">
                                        <img class="wardrobe__order--detail--img" src="images/material.png"
                                            alt="material" />
                                        <span class="wardrobe__order--detail--content">Gỗ Công Nghiệp</span>
                                    </div>

                                    <div class="wardrobe__order--detail-color wardrobe__order--detail-ali">
                                        <img class="wardrobe__order--detail--img" src="images/color.png" alt="color" />
                                        <span class="wardrobe__order--detail--content">4 Màu</span>
                                    </div>

                                    <div class="wardrobe__order--detail-cate wardrobe__order--detail-ali">
                                        <img class="wardrobe__order--detail--img" src="images/category.png"
                                            alt="color" />
                                        <span class="wardrobe__order--detail--content">Nhà Ở Gia Đình</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <?php

            $conn = new mysqli('localhost', 'root', '', 'websitefgear');
            $cmd = mysqli_query($conn, "select * from products");

            while ($row_product = mysqli_fetch_array($cmd)) {
                $product_id = $row_product['p_ID'];
                $product_name = $row_product['p_Name'];
                $product_des = $row_product['p_Des'];
                $product_price = $row_product['p_Price'];
                $product_discount = $row_product['p_Discount'];
                $product_size = $row_product['p_Size'];
                $product_material = $row_product['p_Material'];
                $product_color = $row_product['p_Color'];
                $product_category = $row_product['p_Category'];
                $product_menu = $row_product['p_Menu'];
                $product_img = $row_product['img'];

                if ($product_menu == "1") {

                    echo "
<div class='wardrobe__order'>
    <div class='order__pad'>
        <a class='wardrobe__order-link' href='details.php'>

    <div class='wardrobe__order--img'>
        <img class='wardrobe__order--img-main' src='images_products/$product_img' alt='Wardrobe' />
    </div>

    <div class='wardrobe__order--content'>
        $product_des
    </div>

    <div class='wardrobe__order--pay'>
        <div class='wardrobe__order--price'>
            $product_price <span style='text-decoration:underline'>đ</span>
        </div>

        <div class='wardrobe__order--discount'>
            <del>$product_discount <span style='text-decoration:underline'>đ</span></del>
        </div>

        <div class='wardrobe__order-add'>
            <i class='fa-solid fa-cart-shopping'></i>
        </div>
    </div>

    <div class='wardrobe__order--detail'>

        <div class='wardrobe__order--detail-size wardrobe__order--detail-ali'>
            <img class='wardrobe__order--detail--img' src='images/size.png' alt='size' />
            <span class='wardrobe__order--detail--content'>$product_size</span>
        </div>

        <div class='wardrobe__order--detail-material wardrobe__order--detail-ali'>
            <img class='wardrobe__order--detail--img' src='images/material.png' alt='material' />
            <span class='wardrobe__order--detail--content'>$product_material</span>
        </div>

        <div class='wardrobe__order--detail-color wardrobe__order--detail-ali'>
            <img class='wardrobe__order--detail--img' src='images/color.png' alt='color' />
            <span class='wardrobe__order--detail--content'>$product_color</span>
        </div>

        <div class='wardrobe__order--detail-cate wardrobe__order--detail-ali'>
            <img class='wardrobe__order--detail--img' src='images/category.png' alt='color' />
            <span class='wardrobe__order--detail--content'>$product_category</span>
        </div>
            </div>
            </a>
            </div>
        </div>
        ";
                } else {
                    $result;
                }
            }

            ?>
                </div>
                <div class="products__tittle">
                    <div class="products__tittle--line"></div>
                    <div class="products__tittle--bs">DINING TABLES - BEST SELLER</div>
                    <div class="products__tittle--line"></div>
                </div>


                <div class="products-wardrobe__order">

                    <?php

            $conn = new mysqli('localhost', 'root', '', 'websitefgear');
            $cmd = mysqli_query($conn, "select * from products");

            while ($row_product = mysqli_fetch_array($cmd)) {
                $product_id = $row_product['p_ID'];
                $product_name = $row_product['p_Name'];
                $product_des = $row_product['p_Des'];
                $product_price = $row_product['p_Price'];
                $product_discount = $row_product['p_Discount'];
                $product_size = $row_product['p_Size'];
                $product_material = $row_product['p_Material'];
                $product_color = $row_product['p_Color'];
                $product_category = $row_product['p_Category'];
                $product_menu = $row_product['p_Menu'];
                $product_img = $row_product['img'];

                if ($product_menu == "2") {
                    echo "
                        <div class='wardrobe__order'>
                            <div class='order__pad'>
                                <a class='wardrobe__order-link' href='details.php'>

                            <div class='wardrobe__order--img'>
                                <img class='wardrobe__order--img-main' src='images_products/$product_img' alt='Wardrobe' />
                            </div>

                            <div class='wardrobe__order--content'>
                                $product_des
                            </div>

                            <div class='wardrobe__order--pay'>
                                <div class='wardrobe__order--price'>
                                    $product_price <span style='text-decoration:underline'>đ</span>
                                </div>

                                <div class='wardrobe__order--discount'>
                                    <del>$product_discount <span style='text-decoration:underline'>đ</span></del>
                                </div>

                                <div class='wardrobe__order-add'>
                                    <i class='fa-solid fa-cart-shopping'></i>
                                </div>
                            </div>

                            <div class='wardrobe__order--detail'>

                                <div class='wardrobe__order--detail-size wardrobe__order--detail-ali'>
                                    <img class='wardrobe__order--detail--img' src='images/size.png' alt='size' />
                                    <span class='wardrobe__order--detail--content'>$product_size</span>
                                </div>

                                <div class='wardrobe__order--detail-material wardrobe__order--detail-ali'>
                                    <img class='wardrobe__order--detail--img' src='images/material.png' alt='material' />
                                    <span class='wardrobe__order--detail--content'>$product_material</span>
                                </div>

                                <div class='wardrobe__order--detail-color wardrobe__order--detail-ali'>
                                    <img class='wardrobe__order--detail--img' src='images/color.png' alt='color' />
                                    <span class='wardrobe__order--detail--content'>$product_color</span>
                                </div>

                                <div class='wardrobe__order--detail-cate wardrobe__order--detail-ali'>
                                    <img class='wardrobe__order--detail--img' src='images/category.png' alt='color' />
                                    <span class='wardrobe__order--detail--content'>$product_category</span>
                                </div>
                            </div>
                            </a>
                            </div>
                        </div>
                    ";
                } else {
                    $result;
                }
            }

            ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>