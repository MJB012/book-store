@extends('layouts.main')
@section('title','contact')
@section('main-container')

        <section class="contact-area">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.6137352941464!2d74.31692147469832!3d31.562213645075133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191b530dc2bfa9%3A0xf623bce4c48ba683!2sBOOK%20CENTRE!5e0!3m2!1sen!2s!4v1735302783205!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-lg-8 ms-auto">
                        <div class="contact-form wow fadeInLeft" data-wow-delay="0.4s">
                            <h3 class="title">Contact. Get in touch</h3>
                            <p class="mb-35">LEAVE US A MESSAGE</p>
                            <form action="https://html-template.spider-themes.net/bookjar/contact_process.php" method="post" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name *</label>
                                        <div class="input-group ">
                                            <i class="input-icon fa-solid fa-user"></i>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <div class="input-group">
                                            <i class="input-icon fa-solid fa-envelope-open"></i>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here"></textarea>

                                    </div>
                                </div>
                                <button type="submit" class="bj_theme_btn"><i class="fa-solid fa-paper-plane"></i>SEND
                                    MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="support-area sec_padding wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section_title">
                            <h2 class="title">Keep In Touch With Us</h2>
                            <p>You can get all the contact informations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="assets/img/map-icon.svg" alt="">
                            <p class="support-title">Visit Us</p>
                            <p class="support-text">Mall Road – Lahore, Pakistan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="assets/img/phone-icon.svg" alt="">
                            <p class="support-title">Call Us</p>
                            <a class="support-text d-block" href="tel:9666698821521">+92 3165538010</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="support-item">
                            <img class="support-icon" src="assets/img/envelope-icon.svg" alt="">
                            <p class="support-title">Email Us</p>
                            <a class="support-text d-block" href="mailto:example@example.com">eman@gmail.com</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

