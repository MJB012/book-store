@extends('layouts.main')
@section('title','Home')
@section('main-container')
        <section class="banner_area_three banner_animation_03" data-bg-color="#CDF0F0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bj_banner_content_three">
                            <h2 class="banner_title wow fadeInUp" data-wow-delay="0.2s">The Best Online Book Shop</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Bookjar specifically created for authors and
                                writes to present and sell their books
                                online Soufflé tart sweet.</p>
                            <form action="#" class="search_form wow fadeInUp" data-wow-delay="0.4s">
                                <input type="text" placeholder="Search for books" class="form-control">
                                <button type="submit" class="search_btn"><i class="ti-search"></i></button>
                            </form>
                            <h5 class="wow fadeInUp" data-wow-delay="0.5s">Buy 3+ to save 25%</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_shop_img">
                            <img class="wow fadeInRight" data-wow-delay="0.3s" src="assets/img/home-three/banner/shop-img.png" alt="">
                            <img class="round" data-parallax='{"x": -10, "y": -80}' src="assets/img/home-three/banner/round.png" alt="">
                            <div class="women wow fadeInLeft" data-wow-delay="0.5s">
                                <img data-parallax='{"x":-50, "y": -20}' src="assets/img/home-three/banner/women-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="product_introduce_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="pr_intro_img wow fadeInLeft" data-wow-delay="0.2s" src="assets/img/home-three/intro-books.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="pr_introduce_content wow fadeInRight" data-wow-delay="0.4s">
                            <h5>INTRODUCING</h5>
                            <h2 class="title">A simple subscription for all your books</h2>
                            <p>Most students can't afford to buy textbooks. Get unlimited access to all of your learning
                                resources, whenever you need them, at a price that works for you. Choose a flexible
                                monthly plan, or save money on an annual subscription.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bj_best_book_area_two sec_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="section_title wow fadeInLeft" data-wow-delay="0.2s">
                            <h2 class="title">Recent best selling books</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 text-end wow fadeInRight" data-wow-delay="0.3s">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-6">
                        <div class="bj_best_book_item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bj_book_img">
                                <img src="assets/img/home-three/best_book1.jpg" alt="">
                            </div>
                            <div class="text">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">The Rage</h4>
                                </a>
                                <div class="bj_pr_meta">
                                    <div class="writer_name"><a href="author-single.html"></a> Sadaf Knwal</div>
                                    <div class="ratting">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                    </div>
                                </div>
                                <a href="{{route("checkout")}}"class="bj_theme_btn strock_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <div class="bj_best_book_item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="bj_book_img">
                                <img src="assets/img/home-three/best_book2.jpg" alt="">
                            </div>
                            <div class="text">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">The Art of Fashion</h4>
                                </a>
                                <div class="bj_pr_meta">
                                    <div class="writer_name"><a href="author-single.html">Naeem Baig</a> </div>
                                    <div class="ratting">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                    </div>
                                </div>
                                <a href="{{route("checkout")}}" class="bj_theme_btn strock_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <div class="bj_best_book_item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="bj_book_img">
                                <img src="assets/img/home-three/best_book3.jpg" alt="">
                            </div>
                            <div class="text">
                                <a href="product-single.html">
                                    <h4 class="bj_new_pr_title">Enemy</h4>
                                </a>
                                <div class="bj_pr_meta">
                                    <div class="writer_name"><a href="author-single.html"> </a> Zaid Ahmad</div>
                                    <div class="ratting">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                        <img src="assets/img/home/raiting.png" alt="">
                                    </div>
                                </div>
                                <a href="{{route("checkout")}}" class="bj_theme_btn strock_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best_selling_pr_area sec_padding" data-bg-color="#fff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section_title wow fadeInLeft">
                            <h2 class="title">People's Choice</h2>
                            <p>The most recent books that arrived in our bookstore.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <ul class="nav nav-pills best_pr_tab_btn d-flex justify-content-end wow fadeInRight" data-wow-delay="0.2s" id="pills-tab" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a class="nav-link active" id="pills-best-tab" data-bs-toggle="pill" data-bs-target="#pills-best" role="tab" aria-controls="pills-best" aria-selected="true">
                                    Bestseller</a>
                            </li>
                            <li role="presentation" class="nav-item">
                            </li>
                            <li role="presentation" class="nav-item">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" id="pills-tabContent">
                    <div class="tab-pane fade explore-menu show active" id="pills-best" role="tabpanel" aria-labelledby="pills-best-tab">
                        <div class="row gx-xl-5">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice1.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Enemy – Jake Gyllenhaal" data-img="assets/img/home-two/choice1.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">

                                            <h4 class="bj_new_pr_title">Enemy – Jake Gyllenhaal</h4>

                                        <div class="writer_name">By Zaid Ahmad  </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">1000PKR</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice2.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Knowledge of eart" data-img="assets/img/home-two/choice2.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">

                                            <h4 class="bj_new_pr_title">Knowledge of art</h4>

                                        <div class="writer_name">By  Daniyal Zafar</div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">1000PKR</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice3.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Book Cover Mockup" data-img="assets/img/home-two/choice3.jpg" data-price="35"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">

                                            <h4 class="bj_new_pr_title">Book Cover Mockup</h4>

                                        <div class="writer_name">By Alishba Ashraf  </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">1000PKR</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1220
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice4.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Create Your Own Bustiness" data-img="assets/img/home-two/choice4.jpg" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">

                                            <h4 class="bj_new_pr_title">Create Your Own Bustiness</h4>

                                        <div class="writer_name">By  Nouman Akram  </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">1000PKR</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade explore-menu" id="pills-offer" role="tabpanel" aria-labelledby="pills-best-tab">
                        <div class="row gx-xl-5">

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice4.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Create Your Own Bustiness" data-img="assets/img/home-two/choice4.jpg" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Create Your Own Bustiness</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$25</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice1.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Enemy – Jake Gyllenhaal" data-img="assets/img/home-two/choice1.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Enemy – Jake Gyllenhaal</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$25</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice2.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Knowledge of eart" data-img="assets/img/home-two/choice2.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Knowledge of eart</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$25</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice3.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Book Cover Mockup" data-img="assets/img/home-two/choice3.jpg" data-price="35"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Book Cover Mockup</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$35</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1220
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade explore-menu" id="pills-featured" role="tabpanel" aria-labelledby="pills-best-tab">
                        <div class="row gx-xl-5">


                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice3.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Book Cover Mockup" data-img="assets/img/home-two/choice3.jpg" data-price="35"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Book Cover Mockup</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$35</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1220
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice1.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Enemy – Jake Gyllenhaal" data-img="assets/img/home-two/choice1.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Enemy – Jake Gyllenhaal</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">$25</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice4.jpg" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Create Your Own Bustiness" data-img="assets/img/home-two/choice4.jpg" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Create Your Own Bustiness</h4>
                                        </a>
                                        <div class="writer_name">By -<a href="author-single.html"> Muaz Bk </a> </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price"></div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="best_product_item best_product_item_two box-shadow">
                                    <div class="img">
                                        <a href="#"><img src="assets/img/home-two/choice2.png" alt="book"></a>
                                        <div class="hover_item">
                                            <a class="quick_button" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Wishlist"><i class="icon_heart_alt"></i></a>
                                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Quickview"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Compare"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="Knowledge of eart" data-img="assets/img/home-two/choice2.png" data-price="25"><i class="icon_cart_alt"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="bj_new_pr_content">
                                        <a href="product-single.html">
                                            <h4 class="bj_new_pr_title">Knowledge of art</h4>
                                        </a>
                                        <div class="writer_name">By Yasmin </div>
                                        <div class="bj_pr_meta d-flex">
                                            <div class="book_price">1000PKR</div>
                                            <div class="ratting">
                                                <img src="assets/img/home/raiting.png" alt="">
                                                1221
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
       @endsection
