@extends('layouts.main')
@section('title','add-new-address')
@section('main-container')
        <div class="cart-header-separator"></div>


        <!-- Dashboard area -->
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
                                    <li><a class="active" href="{{route("address")}}">My Address</a></li>
                                    <li><a href="{{route("myorder")}}">My Orders</a></li>
                                    <li><a href="{{route("wishlist")}}">My Wishlist</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-9">
                        <div class="bj_checkout_content me-0 mt-20">
                            <div class="content_header">
                                Add New Address
                                <span>(Please Fill Out Your Information)</span>
                            </div>
                            <div class="content_body">
                                <div class="porduct_pickup_location_wrapper mb-3">
                                    Pick up your parcel from:
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="porduct_pickup_location" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Home
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="porduct_pickup_location" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Office
                                        </label>
                                    </div>
                                </div>
                                <form class=" row gy-3" action="#" method="post">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" required>
                                        <label class="floating-label">Full Name *</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="phone_no" required>
                                        <label class="floating-label">Phone No *</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="alternative_phone_no" required>
                                        <label class="floating-label">Alternative Phone No </label>
                                    </div>


                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control message" required></textarea>
                                        <label class="floating-label">Address</label>
                                    </div>
                                    <div class="col-md-12 text-start">
                                        <button type="submit" class="bj_theme_btn">Save Address</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Dashboard area -->
@endsection
