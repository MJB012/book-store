@extends('layouts.main')
@section('title','cart')
@section('main-container')
        <div class="cart-header-separator"></div>


        <div class="cart-header-alert pt-3" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="alert alert-warning alert-dismissible fade show  mb-0" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h6>Dear customer,</h6>

                    <p>Use this alert box to share important updates, such as delivery delays due to floods or other
                        events.
                        Keep your customers informed with real-time messages and maintain transparency during temporary
                        disruptions. Customize it to fit your needs and keep communication clear.</p>

                    <p class="mb-0">We sincerely apologize for the temporary inconvenience.</p>
                </div>
            </div>
        </div>

        <section class="bj_cart_area" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row gy-lg-0 gy-3">
                    <div class="col-lg-8">
                        <div class="bj_cart_content_header">
                            <div class="form-check cart_total_select">
                                <input class="form-check-input" type="checkbox" value="" id="cart_total_select_check" checked>
                                <label class="form-check-label" for="cart_total_select_check">
                                    Select All (4 Items)
                                </label>
                            </div>
                            <div>
                                <span>Eman</span>, your total: <span class="cart_total_mrp">8000PKR</span> <span class="cart_total_price">5000PKR</span>
                            </div>
                        </div>
                        <div class="cart_item_wrapper">
                            <div class="single_cart_item">
                                <div class="cart_item_select">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <div class="cart_item_image">
                                    <img src="assets/img/cart/best_book1.jpg" alt="cart">
                                </div>
                                <div class="cart_item_content">
                                    <a href="product-single.html" class="book_name">Escape if you can</a>
                                    <div class="author_name">Alif</div>
                                    <div class="cart_action">
                                        <button class="cart_remove"><i class="ti-trash"></i></button>
                                        <button class="cart_wishlist"><i class="fa-regular fa-heart"></i>
                                            Wishlist</button>
                                    </div>
                                    <div class="book_available">Only 3 copies available</div>
                                </div>
                                <div class="cart_quantity">
                                    <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" min="1" max="99" step="1" value="1">
                                    <button class="quantity_btn plus"><i class="icon_plus"></i></button>
                                </div>


                                <div class="cart_item_price">
                                    <div class="cart_item_price_discount">2500PKR</div>
                                    <div class="cart_item_price_mrp">3000PKR</div>
                                </div>

                            </div>
                            <div class="single_cart_item">
                                <div class="cart_item_select">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <div class="cart_item_image">
                                    <img src="assets/img/cart/best_book2.jpg" alt="cart">
                                </div>
                                <div class="cart_item_content">
                                    <a href="product-single.html" class="book_name">The light we can’t see</a>
                                    <div class="author_name"> Samaira</div>
                                    <div class="cart_action">
                                        <button class="cart_remove"><i class="ti-trash"></i></button>
                                        <button class="cart_wishlist"><i class="fa-regular fa-heart"></i>
                                            Wishlist</button>
                                    </div>
                                    <div class="book_available">Only 3 copies available</div>
                                </div>
                                <div class="cart_quantity">
                                    <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" min="1" max="99" step="1" value="1">
                                    <button class="quantity_btn plus"><i class="icon_plus"></i></button>
                                </div>


                                <div class="cart_item_price">
                                    <div class="cart_item_price_discount">1200PKR</div>
                                    <div class="cart_item_price_mrp">1500PKR</div>
                                </div>

                            </div>
                            <div class="single_cart_item">
                                <div class="cart_item_select">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <div class="cart_item_image">
                                    <img src="assets/img/cart/best_book3.jpg" alt="cart">
                                </div>
                                <div class="cart_item_content">
                                    <a href="product-single.html" class="book_name">Narrow Shell</a>
                                    <div class="author_name"> David</div>
                                    <div class="cart_action">
                                        <button class="cart_remove"><i class="ti-trash"></i></button>
                                        <button class="cart_wishlist"><i class="fa-regular fa-heart"></i>
                                            Wishlist</button>
                                    </div>
                                    <div class="book_available">Only 3 copies available</div>
                                </div>
                                <div class="cart_quantity">
                                    <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" min="1" max="99" step="1" value="1">
                                    <button class="quantity_btn plus"><i class="icon_plus"></i></button>
                                </div>


                                <div class="cart_item_price">
                                    <div class="cart_item_price_discount">1500PKR</div>
                                    <div class="cart_item_price_mrp">2000PKR</div>
                                </div>

                            </div>

                            <div class="single_cart_item">
                                <div class="cart_item_select">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <div class="cart_item_image">
                                    <img src="assets/img/cart/best_book4.jpg" alt="cart">
                                </div>
                                <div class="cart_item_content">
                                    <a href="product-single.html" class="book_name">Keep an Eye</a>
                                    <div class="author_name"> Wahaj Baig</div>
                                    <div class="cart_action">
                                        <button class="cart_remove"><i class="ti-trash"></i></button>
                                        <button class="cart_wishlist"><i class="fa-regular fa-heart"></i>
                                            Wishlist</button>
                                    </div>
                                    <div class="book_available">Only 3 copies available</div>
                                </div>
                                <div class="cart_quantity">
                                    <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" min="1" max="99" step="1" value="1">
                                    <button class="quantity_btn plus"><i class="icon_plus"></i></button>
                                </div>


                                <div class="cart_item_price">
                                    <div class="cart_item_price_discount">1400PKR</div>
                                    <div class="cart_item_price_mrp">1500PKR</div>
                                </div>

                            </div>
                        </div>
                        <div class="cart-happy-return-parent mb-0">
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/happy-return-new.webp" alt="">
                                <p>7 Days Happy Return</p>
                            </div>
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/earn-points.svg" alt="">
                                <p>Purchase and Earn Point</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bj_checkout_sidebar">


                            <div class="cart_checkout_summary">
                                <div class="cart_checkout_header">
                                    <h5>Checkout Summary</h5>
                                </div>
                                <div class="cart_checkout_body">
                                    <div class="checkout_item">
                                        <span>Subtotal</span>
                                        <span>5000PKR</span>
                                    </div>

                                    <div class="checkout_item">
                                        <span>Total</span>
                                        <span>1500PKR</span>
                                    </div>
                                    <div class="checkout_item strong">
                                        <span>Payable Total</span>
                                        <span>5500PKR</span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart_proceed_checkout mt-3">


                                <a href="{{route("checkout")}}" class="bj_theme_btn w-100 border-0 mt-2">Proceed to Checkout <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
