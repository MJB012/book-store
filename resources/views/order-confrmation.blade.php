@extends('layouts.main')
@section('title','order-confrmation')
@section('main-container')

        <div class="cart-header-separator"></div>


        <section class="bj_account_dashboard pb-0" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="account_dashboard_content account_order_confirmation mt-4 me-lg-2">
                            <div class="content_body">
                                <div class="thanksgiving_title">
                                    <div>
                                        <div class="icon">
                                            <i class="fas fa-check"></i>
                                        </div>

                                    </div>
                                    <div>
                                        <h4 class="mb-2">Thank you for your order</h4>
                                        <div class="ordr_number">Order Number: <span class="copy_number_widget"><span class="target">47852846584854</span> <button class="actn_btn bj_theme_btn strock_btn btn_small">Copy</button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_information">
                                    <p class="mb-4">You will recieve an order confirmation via email or mobile number
                                    </p>
                                    <div class="row gy-lg-0 gy-3">
                                        <div class="col-lg-4">
                                            <h6>Contact</h6>
                                            <div class="info">Eman</div>
                                            <div class="info">03165538010</div>
                                        </div>



                                        <div class="col-lg-4">
                                            <h6>Payment Method</h6>
                                            <div class="info">cash on delivery</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-end gap-3">
                                    <a href="{{route("shop")}}" class="bj_theme_btn strock_btn">Continue shopping </a>
                                    <a href="{{route("ordertrack")}}" class="bj_theme_btn">Track Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_checkout_summary mt-4 ms-lg-2">
                            <div class="cart_checkout_header">
                                <h5>Order Summary</h5>
                            </div>
                            <div class="cart_checkout_body">
                                <div class="checkout_item">
                                    <span>Subtotal</span>
                                    <span>1,243 Tk</span>
                                </div>

                                <div class="checkout_item">
                                    <span>Total</span>
                                    <span>777 Tk</span>
                                </div>
                                <div class="checkout_item strong">
                                    <span>Payable Total</span>
                                    <span>1,243 Tk</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
        @endsection
