@extends('layouts.main')
@section('title','shop')
@section('main-container')
        <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
            <div class="bg_one" data-bg-image="assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
            <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/book_left1.png" alt="">
            </div>
            <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/book-left2.png" alt="">
            </div>
            <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/plane-1.png" alt="">
            </div>
            <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/plan-3.png" alt="">
            </div>
            <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 80}' src="assets/img/breadcrumb/plan-2.png" alt="">
            </div>
            <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -60}' src="assets/img/breadcrumb/book-right.png" alt="">
            </div>
            <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"x": 50}' src="assets/img/breadcrumb/book-right2.png" alt="">
            </div>
            <div class="container">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Book Shope</h2>
                <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop Sidebar</li>
                </ol>
            </div>
        </section>


        <section class="bj_shop_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop_sidebar">
                            <div class="widget filter_widget">
                                <h3 class="shop_sidebar_title"><a href="#"><img src="assets/img/shop/filter.svg" alt=""></a>Filter</h3>
                            </div>

                            <div class="widget author_widget">
                                <h4 class="shop_sidebar_title_small"><i class="fa-regular fa-star"></i>Rating</h4>
                                <div class="author_choose_list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rating_filter" id="5_star_filter" value="5 star">
                                        <label class="form-check-label" for="5_star_filter">
                                            <span class="rating">
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rating_filter" id="4_star_filter" value="5 star">
                                        <label class="form-check-label" for="4_star_filter">
                                            <span class="rating">
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star "></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rating_filter" id="3_star_filter" value="5 star">
                                        <label class="form-check-label" for="3_star_filter">
                                            <span class="rating">
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rating_filter" id="2_star_filter" value="5 star">
                                        <label class="form-check-label" for="2_star_filter">
                                            <span class="rating">
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="rating_filter" id="1_star_filter" value="1 star">
                                        <label class="form-check-label" for="1_star_filter">
                                            <span class="rating">
                                                <i class="fa-solid fa-star filled"></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                                <i class="fa-solid fa-star "></i>
                                            </span>
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form role="search" method="get" class="pr_search_form input-group" action="#">
                            <input type="text" name="s" value="" class="form-control search-field" id="search" placeholder="Serach  off book store..">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                        <div class="shop_top d-flex align-items-center justify-content-between">

                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6 projects_item">
                                <div class="best_product_item best_product_item_two shop_product">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/author_book1.jpg" alt="book"></a>
                                        <div class="pr_ribbon">
                                            <span class="product-badge">New</span>
                                            <div class="ratting">
                                                <img src="assets/img/star-1.png" alt="">4.9
                                            </div>
                                        </div>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="A Storytelling Workbook" data-img="assets/img/author_book1.jpg" data-price="25" data-mrp="120">
                                            <i class="icon_cart_alt"></i>Add To Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">A Storytelling Workbook</h4>
                                        </a>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price"><del>1200PKR</del>1000PKR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 projects_item">
                                <div class="best_product_item best_product_item_two shop_product">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/author_book2.jpg" alt="book"></a>
                                        <div class="pr_ribbon">
                                            <span class="product-badge">New</span>
                                            <div class="ratting">
                                                <img src="assets/img/star-1.png" alt="">4.9
                                            </div>
                                        </div>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="The Ruthless" data-img="assets/img/author_book2.jpg" data-price="25" data-mrp="120">
                                            <i class="icon_cart_alt"></i>Add To Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">The Ruthless ..</h4>
                                        </a>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price"><del>1200PKR</del>1000PKR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 projects_item">
                                <div class="best_product_item best_product_item_two shop_product">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/author_book3.jpg" alt="book"></a>
                                        <div class="pr_ribbon">
                                            <span class="product-badge">New</span>
                                            <div class="ratting">
                                                <img src="assets/img/star-1.png" alt="">4.9
                                            </div>
                                        </div>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="The Psychology of.." data-img="assets/img/author_book3.jpg" data-price="25" data-mrp="120">
                                            <i class="icon_cart_alt"></i>Add To Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">The Psychology of..</h4>
                                        </a>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price"><del>1200PKR</del>1000PKR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6 projects_item">
                                <div class="best_product_item best_product_item_two shop_product">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/author_book4.jpg" alt="book"></a>
                                        <div class="pr_ribbon">
                                            <span class="product-badge">New</span>
                                            <div class="ratting">
                                                <img src="assets/img/star-1.png" alt="">4.9
                                            </div>
                                        </div>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Your Next Five Moves" data-img="assets/img/author_book4.jpg" data-price="25" data-mrp="120">
                                            <i class="icon_cart_alt"></i>Add To Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Your Next Five Moves</h4>
                                        </a>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price"><del>1200PKR</del>1000PKR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
