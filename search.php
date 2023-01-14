<?php
if (isset($_GET['search'])) {
    echo "<div class='products__tittle'>
                <div class='products__tittle--line'></div>
                <div class='products__tittle--bs'>KẾT QUẢ TÌM KIẾM</div>
                <div class='products__tittle--line'></div>
                </div>";
}
?>
<div class="products-wardrobe__order">
    <?php
            if (isset($_GET['search'])) {
                $search = $_GET['search_query'];
                $conn = new mysqli('localhost', 'root', '', 'websitefgear');
                $cmd = mysqli_query($conn, "select * from products where p_Des LIKE '%$search%'");



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
                }
            }
            ?>
</div>