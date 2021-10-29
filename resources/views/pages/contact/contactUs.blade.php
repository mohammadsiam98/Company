@extends('Layout.mother_layout')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;700&display=swap" rel="stylesheet">
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 v-center">
                <div class="contact-details">
                    <div class="contact-card wow fadeIn" data-wow-delay=".2s">
                        <div class="info-card v-center">
                            <img src="{{asset('assets/images/mobile_number.png')}}" alt="">
                            <div class="info-body">
                                <p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
                                <a href="tel:+10000000000">(+91) 0000 000 000</a>
                            </div>
                        </div>
                    </div>
                    <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
                        <div class="info-card v-center">
                            <img src="{{asset('assets/images/gmail.png')}}" alt="">
                            <div class="info-body">
                                <p>Our support team will get back to in 24-h during standard business hours.</p>
                                <a href="https://separateweb.com/cdn-cgi/l/email-protection#d6bfb8b0b996b4a3a5bfb8b3a5a5b8b7bbb3f8b5b9bb"><span class="__cf_email__" data-cfemail="90f9fef6ffd0f2e5e3f9fef5e3e3fef1fdf5bef3fffd">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-8 m-mt30 pr30 pl30">
                <div class="common-heading text-l">
                    <h1 class="mt0 mb0 text-radius text-light text-animation bg-b">Get in touch</h1>
                    <p class="mb60 mt10">We will catch you as early as we receive the message</p>
                </div>
                <div class="form-block">
                    <form action="{{route('contact.store')}}" id="contactForm" data-toggle="validator" class="shake">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="name" name="name" placeholder="Enter name" required data-error="Please fill Out" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" id="email" name="email" placeholder="Enter email" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="mobile" name="number" placeholder="Enter mobile" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required data-error="Please fill Out">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Enter your message" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <p class="trm"><i class="fas fa-lock"></i> <b>We hate spam, and we respect your privacy.</b> </p>
                    </form>
                </div>
            </div>



        </div>
    </div>
</section>
<!--End Enquire Form-->


<!--Start Location-->
<div class="contact-location">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="map-div">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246247!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1611838825763!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>


    </div>
</div>
<!--End Location-->

@endsection
