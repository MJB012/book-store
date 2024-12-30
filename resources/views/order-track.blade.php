@extends('layouts.main')
@section('title','order-track')
@section('main-container')
    <div class="cart-header-separator"></div>

    <!-- Dashboard area -->
    <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4">
            <div class="account_dashboard_sidebar">
              <div class="sidebar_widget_body sidebar_rating_review">
                <div class="sidebar_rating_review_icon">
                  <img class="" src="assets/img/cart/rok-icon-thumbs-up.svg" alt="account" />
                </div>
                <div class="">



                </div>
              </div>
              <div class="sidebar_widget_body sidebar_address_widget">
                <div class="sidebar_header">
                  <h5>Delivery Address</h5>
                </div>
                <div class="location_wrapper">
                  <div class="location_icon">
                    <img class="" src="assets/img/cart/rok-icon-delivery-location.svg" alt="" />
                  </div>
                  <div class="location_content">
                    <h6>Home:</h6>
                    <p>
                        Gulberg Lahore, Street#8 ,House#35
                    </p>
                    <p>03335632998</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-8">
            <div class="account_dashboard_body">
              <div class="account_dashboard_content">
                <div class="content_body">
                  <div class="account_dashboard_content_title mb-0">
                    <h5 class="mb-0">Order No: 87150273205266</h5>
                  </div>

                  <div class="{{route("ordertrack")}}">
                    <div class="single_track_step active">
                      <div class="step_icon">
                        <i class="fa-solid fa-caret-up"></i>
                        <img src="assets/img/cart/rok-icon-delivered.svg" alt="" />
                      </div>
                      <div class="step_content">
                        <h6>Order Delivered</h6>
                        <p>02 Oct 2024, 5:18 PM</p>
                        <p>Order has been delivered</p>
                      </div>
                    </div>
                    <div class="single_track_step">
                      <div class="step_icon">
                        <i class="fa-solid fa-caret-up"></i>
                        <img src="assets/img/cart/rok-icon-order-courier.svg" alt="" />
                      </div>
                      <div class="step_content">
                        <h6>Order Handover to Courier</h6>
                        <p>02 Oct 2024, 5:18 PM</p>
                        <p>
                          Order given to Bookjar (Comilla) courier for
                          delivery
                        </p>
                      </div>
                    </div>

                    </div>
                    <div class="single_track_step second_step">
                      <div class="step_icon">
                        <i class="fa-solid fa-caret-up"></i>
                        <img src="assets/img/cart/rok-icon-order-approved.svg" alt="" />
                      </div>
                      <div class="step_content">
                        <h6>Order Approved</h6>
                        <p>02 Oct 2024, 5:18 PM</p>
                        <p>Preparing the order</p>
                      </div>
                    </div>
                    <div class="single_track_step first_step">
                      <div class="step_icon">
                        <i class="fa-solid fa-caret-up"></i>
                        <img src="assets/img/cart/rok-icon-order-approved.svg" alt="" />
                      </div>
                      <div class="step_content">
                        <h6>Order Placed</h6>
                        <p>02 Oct 2024, 5:18 PM</p>
                        <p>
                          The order has been accepted. Awaiting confirmation.
                        </p>
                      </div>
                    </div>

                    <div class="text-center">
                      <button class="view_more_btn" id="track_view_more_btn">
                        View More <i class="fa-solid fa-chevron-down"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="account_dashboard_content">
                <div class="content_body">
                  <div class="account_dashboard_content_title">
                    <h5 class="mb-0">Order Summary</h5>
                  </div>

                  <div class="order_summary_list">
                    <div class="my_account_book list-view">
                      <div class="my_account_book_img">
                        <img src="assets/img/cart/best_book1.jpg" alt="cart" />
                      </div>
                      <div class="my_account_book_content">
                        <a href="product-single.html">
                          <div class="my_account_book_title">
                            House of Mirth
                          </div>
                        </a>
                        <div class="author_name">Saim Ali</div>
                      </div>
                      <div class="book_price align-items-center">
                        <p class="mb-0">Price</p>
                        <span class="mrp_amount"> 3,000PKR </span>
                        <span class="discount_amount"> 2000PKR </span>
                      </div>
                      <div class="product-qty">Qty:<span>1</span></div>
                      <div class="book_price me-0">
                        <span class="discount_amount"> 2000PKR </span>
                      </div>
                    </div>
                    <div class="my_account_book list-view">
                      <div class="my_account_book_img">
                        <img src="assets/img/cart/best_book3.jpg" alt="cart" />
                      </div>
                      <div class="my_account_book_content">
                        <a href="product-single.html">
                          <div class="my_account_book_title">
                            The Alchemist
                          </div>
                        </a>
                        <div class="author_name">Arham Ijaz</div>
                      </div>
                      <div class="book_price align-items-center">
                        <p class="mb-0">Price</p>
                        <span class="mrp_amount"> 1500PKR </span>
                        <span class="discount_amount"> 1000 PKR</span>
                      </div>
                      <div class="product-qty">Qty:<span>1</span></div>
                      <div class="book_price me-0">
                        <span class="discount_amount"> 1000 PKR</span>
                      </div>
                    </div>
                    <div class="my_account_book list-view">
                      <div class="my_account_book_img">
                        <img src="assets/img/cart/best_book2.jpg" alt="cart" />
                      </div>
                      <div class="my_account_book_content">
                        <a href="product-single.html">
                          <div class="my_account_book_title">
                            The Midnight Whispers
                          </div>
                        </a>
                        <div class="author_name">Sajid Salar</div>
                      </div>
                      <div class="book_price align-items-center">
                        <p class="mb-0">Price</p>
                        <span class="mrp_amount"> 2000PKR </span>
                        <span class="discount_amount"> 1500PKR</span>
                      </div>
                      <div class="product-qty">Qty:<span>1</span></div>
                      <div class="book_price me-0">
                        <span class="discount_amount"> 1500PKR </span>
                      </div>
                    </div>
                  </div>
                  <div class="order_summary__payment">
                    <div class="payable-info">
                      <div class="payable-info__label">
                        <p>Total Items:</p>
                        <p>Sub-Total:</p>

                      </div>
                      <div class="payable-info__value">
                        <p>3 Product(s)</p>
                        <p>2000</p>
                        <p>1500</p>
                        <P>1000</P>
                      </div>
                    </div>
                    <div class="total-payable d-flex align-items-start justify-content-end text-right">
                      <div class="total-payable__label text-left">
                        <p>Payable Amount:</p>
                      </div>
                      <div class="total-payable__value">
                        <p class="mb-0">4500PKR</p>
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

