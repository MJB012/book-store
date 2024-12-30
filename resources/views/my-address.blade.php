@extends('layouts.main')
@section('title','my-address')
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
                                    <div class="name">Muaz BK</div>

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
                        <div class="account_dashboard_body">
                            <div class="account_dashboard_content">
                                <div class="account_dashboard_content_header d-flex justify-content-between align-items-center">
                                    <div>
                                        My Addresses
                                    </div>

                                    <a href="{{route("addaddress")}}" class="bj_theme_btn">Add New Address</a>

                                </div>
                                <div class="content_body">
                                    <div class="row gy-3 my_address_book_list">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th scope="col">Full Name</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Postcode</th>
                                                            <th scope="col">Phone Number</th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Muaz BK
                                                            </td>
                                                            <td>123 Main Street, Apt 4B New York, NY 10001</td>
                                                            <td>New York, Usa</td>

                                                            <td>0123456789</td>
                                                            <td><span class="office_label">Office</span></td>
                                                            <td>
                                                                <button class="bj_theme_btn strock_btn addres_sidebar_cart_trigger">Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Muaz BK
                                                            </td>
                                                            <td>123 Main Street, Apt 4B New York, NY 10001</td>
                                                            <td>New York, Usa</td>

                                                            <td>0123456789</td>
                                                            <td><span class="home_label">Home</span></td>
                                                            <td>
                                                                <button class="bj_theme_btn strock_btn addres_sidebar_cart_trigger">Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Muaz BK
                                                            </td>
                                                            <td>123 Main Street, Apt 4B New York, NY 10001</td>
                                                            <td>New York, Usa</td>

                                                            <td>0123456789</td>
                                                            <td><span class="office_label">Office</span></td>
                                                            <td>
                                                                <button class="bj_theme_btn strock_btn addres_sidebar_cart_trigger">Edit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

