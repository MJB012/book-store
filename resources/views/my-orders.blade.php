@extends('layouts.main')
@section('title','my-order')
@section('main-container')
        <div class="cart-header-separator"></div>


        <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="account_dashboard_sidebar">
                            <div class="sidebar_widget_body d-flex account_dashboard_sidebar_profile">
                                <div class="">
                                    <img src="assets/img/profile-img.png" alt="account">
                                </div>
                                <div class="">
                                    <div class="greetings">Hello</div>
                                    <div class="name">Eman</div>

                                </div>
                            </div>
                            <div class="sidebar_widget_body p-0">
                                <ul class="sidebar_widget_menu">
                                    <li><a href="{{route("myaccount")}}">My Profile</a></li>
                                    <li><a href="{{route("address")}}">My Address</a></li>
                                    <li><a class="active" href="{{route("myorder")}}">My Orders</a></li>
                                    <li><a href="{{route("wishlist")}}">My Wishlist</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-9">
                        <div class="account_dashboard_body">
                            <div class="account_dashboard_content">
                                <div class="account_dashboard_content_header">
                                    My Orders <span>(Your Total Order: 12)</span>

                                </div>
                                <div class="content_body">
                                    <div class="product_filter_search mb-4">
                                        <form action="#" class="search_form">
                                            <input type="text" placeholder="Search By Order ID" class="form-control">
                                            <button type="submit" class="search_btn"><i class="ti-search"></i></button>
                                        </form>


                                    </div>
                                    <div class="my_order_list">
                                        <div class="single_order_block">
                                            <div class="order_info">Your Order ID: <span class="order_no"><em>47162275294678</em></span> (2 items)</div>
                                            <div class="order_action">
                                                <div class="order_status success">Completed</div>
                                                <a href="{{route("ordertrack")}}"class="bj_theme_btn">Track My Order <i class="arrow_right"></i></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-sm-5 justify-content-between justify-content-sm-start">
                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/cart/best_book1.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">
                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Thriller Stories
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                2500PKR
                                                            </span>
                                                            <span class="mrp_amount">
                                                                3000PKR
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/cart/best_book3.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">

                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Suspense
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                1000PKR
                                                            </span>
                                                            <span class="mrp_amount">
                                                                1200PKR
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/cart/best_book2.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">
                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Tata Stories
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                2000PKR
                                                            </span>
                                                            <span class="mrp_amount">
                                                            2200PKR
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_order_block">
                                            <div class="order_info">Your Order ID: <span class="order_no"><em>47162275294678</em></span> (2 items)</div>
                                            <div class="order_action">
                                                <div class="order_status success">Refunded</div>
                                            </div>
                                            <div class="d-flex flex-wrap gap-5">

                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/cart/best_book3.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">
                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Shadow
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                1500PKR
                                                            </span>
                                                            <span class="mrp_amount">
                                                                1300PKR
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single_order_block">
                                            <div class="order_info">Your Order ID: <span class="order_no"><em>47162275294678</em></span> (2 items)</div>
                                            <div class="order_action">
                                                <div class="order_status warning">Cancelled</div>
                                                <a href="{{route("ordertrack")}}" class="bj_theme_btn">Track My Order <i class="arrow_right"></i></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-5">
                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/home-two/best_book1.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">
                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Fiction
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                1000PKR
                                                            </span>
                                                            <span class="mrp_amount">
                                                                1200PKR
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my_account_book">
                                                    <div class="my_account_book_img">
                                                        <img src="assets/img/home-two/best_book2.jpg" alt="cart">
                                                    </div>
                                                    <div class="my_account_book_content">
                                                        <a href="product-single.html">
                                                            <div class="my_account_book_title">Tata Stories
                                                            </div>
                                                        </a>

                                                        <div class="book_price">
                                                            <span class="discount_amount">
                                                                $19.99
                                                            </span>
                                                            <span class="mrp_amount">
                                                                $29.99
                                                            </span>
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

                </div>
            </div>
        </section>
@endsection
