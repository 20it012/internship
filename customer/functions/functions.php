<?php
$db = mysqli_connect("localhost","root","","ecom_store");
function getPro(){
    global $db;
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db,$get_products);
    while($row_products = mysqli_fetch_array($run_products)) {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
    

    echo "<div class='col-md-4 col-sm-6 single'><!-- class-sm-4 col-sm-6 single Begin -->

    <div class='product'><!-- product Begin -->

        <a href='details.php?pro_id=$pro_id'>

            <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 1'>

        </a>

        <div class='text'><!-- text Begin -->

            <h3>
                <a href='details.php?pro_id=$pro_id'>
                    $pro_title
                </a>
            </h3>
            
            <p class='price'>$ $pro_price</p>

            <p class='button'>

                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>

                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>

                    <i class='fa fa-shopping-cart'>
                        Add to cart
                    </i>
                    </a>

            </p>

        </div><!-- text Finish -->

    </div><!-- product Finish -->

</div><!-- class-sm-4 col-sm-6 single Finish -->";
}
}
function getPCats(){
    global $db;
    $get_p_cats = "select * from product_categories order by 1 DESC LIMIT 0,8";
    $run_p_cats = mysqli_query($db,$get_p_cats);
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        $p_cat_id = $row_p_cats['p_cat_id'];
    }
}
?>