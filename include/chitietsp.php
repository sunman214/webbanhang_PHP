<!-- page -->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
}
$sql_chitiet = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE id='$id'")
?>

<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Home</a>
                    <i>|</i>
                </li>
                <li>Single Product 1</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            Chi tiết sản phẩm
        </h3>
        <!-- //tittle heading -->
        <div class="row">
            <?php
            while ($sql_rowsp = mysqli_fetch_array($sql_chitiet)) {
            ?>
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="images/<?php echo $sql_rowsp['image'] ?>">
                                    <div class="thumb-image">
                                        <img src="images/<?php echo $sql_rowsp['image'] ?>" data-imagezoom="true" class="img-fluid" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3"><?php echo $sql_rowsp['name'] ?></h3>
                    <p class="mb-3">
                        <span class="item_price">$200.00</span>
                        <del class="mx-2 font-weight-light">$280.00</del>
                        <label>Free delivery</label>
                    </p>
                    <div class="single-infoagile">
                        <ul>
                            <li class="mb-3">
                                Cash on Delivery Eligible.
                            </li>
                            <li class="mb-3">
                                Shipping Speed to Delivery.
                            </li>
                            <li class="mb-3">
                                EMIs from $655/month.
                            </li>
                            <li class="mb-3">
                                Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
                            </li>
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>1 Year</label>Manufacturer Warranty
                        </p>
                        <ul>
                            <li class="mb-1">
                                3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
                            </li>
                            <li class="mb-1">
                                5.5 inch Full HD Display
                            </li>
                            <li class="mb-1">
                                13MP Rear Camera | 8MP Front Camera
                            </li>
                            <li class="mb-1">
                                3300 mAh Battery
                            </li>
                            <li class="mb-1">
                                Exynos 7870 Octa Core 1.6GHz Processor
                            </li>
                        </ul>
                        <p class="my-sm-4 my-3">
                            <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="?quanly=giohang" method="post">
                                <fieldset>
                                    <input type="hidden" name="tensp" value="<?php echo $sql_rowsp['name'] ?>" />
                                    <input type="hidden" name="giasp" value="<?php echo $sql_rowsp['giakm'] ?>" />
                                    <input type="hidden" name="hinhanh" value="<?php echo $sql_rowsp['image'] ?>" />
                                    <input type="hidden" name="soluong" value="1" />
                                    <input type="hidden" name="sanpham_id" value="<?php echo $sql_rowsp['id'] ?>" />
                                    <input type="submit" name="themgiohang" value="Add to cart" class="button" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>