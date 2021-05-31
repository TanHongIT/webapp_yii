<?php
require_once('protected/scripts/globals.php');
$this->breadcrumbs = array(
    'Product',
    'Detail'
);
?>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <?php foreach ($recent_data as $value) : ?>

                        <div class="thubmnail-recent">
                            <img id='imgProduct<?= $value->id ?>' src="<?= get_BaseUrl() . $value->image ?>" class="recent-thumb" alt="">
                            <h2><a href="<?= $value->id ?>"><?= $value->name ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><span id="price_<?= $value->id ?>"><?= number_format($value->price, 0, ',', '.') ?></span></ins> <del>$00.00</del>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <?php foreach ($recent_post_data as $value) : ?>
                            <li><a href="<?= $value->id ?>"><?= $value->title ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="product-images">
                            <div class="product-main-img">
                                <img id='imgProduct<?= $data->id ?>' src="<?= get_BaseUrl()  . $data->image ?>" alt="">
                            </div>

                            <div class="product-gallery">
                                <img src="/img/product-thumb-1.jpg" alt="">
                                <img src="/img/product-thumb-2.jpg" alt="">
                                <img src="/img/product-thumb-3.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="product-inner">
                            <h2 class="product-name"><?= $data->name ?></h2>
                            <div class="product-inner-price">
                                <ins><span id="price_add_cart_<?= $data->id ?>"><?= number_format($data->price, 0, ',', '.') ?></span></ins> <del>0.00</del>
                            </div>

                            <form action="" class="cart">
                                <div class="quantity">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                </div>
                                <a class="add_to_cart_button" onclick="addToCart(<?= $data->id ?>)" href="javascript:voice(0);">Add to cart</a>
                            </form>

                            <div class="product-inner-category">
                                <p>Category: <a href=""><?= $cate_data->name ?></a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                            </div>

                            <div role="tabpanel">
                                <ul class="product-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <h2>Product Description</h2>
                                        <?= $data->description ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile">
                                        <h2>Reviews</h2>
                                        <div class="submit-review">
                                            <p><label for="name">Name</label> <input name="name" type="text"></p>
                                            <p><label for="email">Email</label> <input name="email" type="email"></p>
                                            <div class="rating-chooser">
                                                <p>Your rating</p>

                                                <div class="rating-wrap-post">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                            <p><input type="submit" value="Submit"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="related-products-wrapper">
                    <h2 class="related-products-title">Related Products</h2>
                    <div class="related-products-carousel">
                        <?php foreach ($related_data as $value) : ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img id="imgProduct<?= $value->id ?>" src="<?= get_BaseUrl() . $value->image ?>" alt="">
                                    <div class="product-hover">
                                        <a href="javascript:voice(0);" onclick="addToCart(<?= $data->id ?>)" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="<?= $value->id ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="<?= $value->id ?>"><?= $value->name ?></a></h2>

                                <div class="product-carousel-price">
                                    <ins><?= number_format($value->price, 0, ',', '.') ?></ins> <del>$100.00</del>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>