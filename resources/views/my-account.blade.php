@extends('layouts.main')
@section('title','my account')
@section('main-container')

        <div class="cart-header-separator"></div>

        <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="account_dashboard_sidebar">
                            <div class="sidebar_widget_body d-flex account_dashboard_sidebar_profile">
                                <div class="">

                                </div>
                                <div class="">
                                    <div class="greetings">Hello</div>
                                    <div class="name">Eman</div>

                                </div>
                            </div>
                            <div class="sidebar_widget_body p-0">
                                <ul class="sidebar_widget_menu">
                                    <li><a class="active " href="{{route("myaccount")}}">My Profile</a></li>
                                    <li><a href="{{route("address")}}">My Address</a></li>
                                    <li><a href="{{route("myorder")}}">My Orders</a></li>
                                    <li><a href="{{route("wishlist")}}">My Wishlist</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-9">
                        <div class="account_dashboard_body">
                            <div class="account_dashboard_content">
                                <div class="account_dashboard_content_header">
                                    Personal Information
                                </div>
                                <div class="content_body">
                                    <form action="#">
                                        <div class="row gy-4">
                                            <div class="col-12">

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" required>
                                                    <label class="floating-label">First Name</label>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" required>
                                                    <label class="floating-label">Last Name</label>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group ">
                                                    <label class="form-label">Your Date of Birth</label>
                                                    <input type="date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <div class="d-flex flex-row">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" value="" id="genderMale" name="gender_radio">
                                                            <label class="form-check-label" for="genderMale">
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="" id="genderFemale" name="gender_radio">
                                                            <label class="form-check-label" for="genderFemale">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="email_address" required>
                                                    <label class="floating-label" for="email_address">Email
                                                        Address</label>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="phone" required>
                                                    <label class="floating-label" for="phone">Mobile Number</label>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="account_dashboard_content_title mt-3">
                                            <h4>Password </h4>
                                        </div>
                                        <div class="row mt-1 gy-3">
                                            <div class="col-lg-6">
                                                <div class="form-group pass-field-with-icon">
                                                    <input type="password" id="toggle_passowrd_field" class="form-control" required>
                                                    <label class="floating-label">New Password</label>
                                                    <i data-toggleTarget="#toggle_passowrd_field" class="icon fas fa-eye toggle-password"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group pass-field-with-icon">
                                                    <input type="password" id="toggle_passowrd_field2" class="form-control" required>
                                                    <label class="floating-label">Confirm Password</label>
                                                    <i data-toggleTarget="#toggle_passowrd_field2" class="icon fas fa-eye toggle-password"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="bj_theme_btn mt-3">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
