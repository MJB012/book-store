@extends('layouts.main')
@section('title','checkout')
@section('main-container')
        <div class="cart-header-separator"></div>


        <section class="bj_checkout_area" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row justify-content-center gy-lg-0 gy-4">
                    <div class="col-lg-7">
                        <div class="bj_checkout_content mb-4">
                            <div class="content_header">
                                Login
                            </div>
                            <div class="content_body">

                                <form class=" row gy-3" action="#" method="post">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="login_email" required>
                                        <label class="floating-label">Email *</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" class="form-control" id="password" required>
                                        <label class="floating-label">Password *</label>
                                    </div>
                                    <div class="col-12">
                                        New user? <a href="registration.html">Create an account</a>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="cart-happy-return-parent mt-4 mb-0">
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/happy-return-new.webp" alt="">
                                <p>7 Days Happy Return</p>
                            </div>
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/earn-points.svg" alt="">
                                <p>Purchase and Earn Point</p>
                            </div>
                        </div>
                        <div class="bj_checkout_content payment_method_wrapper mt-4">
                            <div class="content_header">
                                Payment Method
                                <span>(Please select a payment method)</span>
                            </div>
                            <div class="content_body">
                                <div class="porduct_payment_method_wrapper">
                                    <div class="field_title">Cash On Delivery</div>

                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <label class="form-check-label" for="cod_payment">
                                                    <input class="form-check-input" type="radio" name="check_payment_method" id="cod_payment">
                                                    <img src="assets/img/cart/cod.webp" alt="">
                                                    <span>Cash On Delivery</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="field_title mt-3">Mobile Wallet</div>
                                    <div class="row gy-2 gy-lg-0">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label" for="mobile_wallet_payment">
                                                    <input class="form-check-input" type="radio" name="check_payment_method" id="mobile_wallet_payment">
                                                Jazzcash
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label" for="mobile_wallet_payment_2">
                                                    <input class="form-check-input" type="radio" name="check_payment_method" id="mobile_wallet_payment_2">
                                                    Easypaisa
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="field_title mt-3">Debit/Credit Card</div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <label class="form-check-label" for="debit_card_payment">
                                                    <input class="form-check-input" type="radio" name="check_payment_method" id="debit_card_payment">
                                                    <img src="assets/img/cart/rok-ssl-card-icon-sslNew.webp" alt="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="payment_method_footer text-lg-end text-center">
                                <a href="{{route("orderconfrmation")}}" class="bj_theme_btn">Confirm Order <span class="price ms-1">1,585
                                        Tk</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="bj_checkout_sidebar">
                            <div class="cart_checkout_summary border-bottom-radius-0">
                                <div class="cart_checkout_header">
                                    <h5>Checkout Summary</h5>
                                </div>
                                <div class="cart_checkout_body">
                                    <div class="checkout_item">
                                        <span>Subtotal</span>
                                        <span>2000PKR</span>
                                    </div>

                                    <div class="checkout_item">
                                        <span>Total</span>
                                        <span>1500PKR</span>
                                    </div>
                                    <div class="checkout_item strong">
                                        <span>Payable Total</span>
                                        <span>3500PKR</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection



