<?php
involve('functions.php');
begin('Welcome');
?>
<body itemscope="">
<div class="theme-layout">
    <?php topnav(); ?>



    <div id="calculate-form-popup">
        <div class="calculate-form-popup">
            <div class="modal-dialog2">
                <div class="modal-content2">
                    <div class="modal-body2">
                        <button type="submit"><img src="front/images/close1.png" alt="" /></button>
                        <div class="cargo-shipment">
                            <div class="calculate-shipping">
                                <div class="dark-title">
                                    <span><i class="fa fa-steam"></i>Please Enter the tracking number to see the status of your item.</span>
                                    <h3>Track Shipment</h3>
                                </div>

                                <div class="calculate-shipping-form">
                                    <form method="get" action="track">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <input type="text" name="tracking" required class="text-field" placeholder="Tracking Number" />
                                            </div>





                                            <div class="col-md-12">
                                                <button type="submit" href="front/#" title="" class="theme-btn"><i class="fa fa-paper-plane"></i> Track Shipment</button>
                                            </div>
                                            <!--<div class="col-md-12">
                                                <div class="total">
                                                    <div class="cargo-total"><h4>TOTAL:</h4> $345</div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Calculate Shipping -->
                        </div><!-- Cargo Shipment -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-slider overlape">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%; height:696px; ">

                <div class="ls-slide" data-ls="transition2d:35; timeshift:-1000; slidedelay: 7000;">
                    <img itemprop="image" src="front/images/resource/slide1.jpg" class="ls-bg" alt="Slide background"/>

                    <div class="ls-slide"
                         style="font-family:raleway; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; color:#ffffff; top:214px; left:100px;"
                         data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">
                        We Offer Transport
                    </div>

                    <div class="ls-slide"
                         style="font-family:raleway; color:#ffffff; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; top:240px; left:100px;"
                         data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">
                        <span style="color:#ebe814;">Quick &amp; Powerful</span> Solution
                    </div>

                    <div class="ls-slide"
                         style="font-family:roboto; font-size:150px; color:#ffffff; font-weight:900; top:275px; left:100px;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:900; delayin:1000; easingin:easeOutExpo; fadein:false; easingout:easeInBack; fadeout:false;">
                        CAR<span style="color:#ebe814;">G</span></div>

                    <div class="ls-slide"
                         style="font-family:roboto; font-size:250px; color:#ebe814; font-weight:900; top:180px; left:500px;"
                         data-ls="offsetyout:top; offsetyin:bottom; durationin:1000; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        O
                    </div>

                    <div class="ls-slide"
                         style="line-height:28px; font-family:lato; font-size:15px; color:#ffffff; top:445px; left:100px;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1300; delayin:1200; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>

                    <!-- <a href="front/track.html" itemprop="url" title="" class="ls-slide slide-icon"
                       style="padding:16px 45px; background:#ffb400; color:#ffffff; font-size:12px; top:539px; left:100px;"
                       data-ls="offsetxout:left; offsetyin:bottom; durationin:1500; delayin:1300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">ORDER
                        NOW</a> -->

                    <img src="front/images/resource/slide-model.png" alt="" itemprop="image" class="ls-slide"
                         style="top:0; left:540px;"
                         data-ls="offsetyout:top; offsetyin:bottom; durationin:2000; delayin:1500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"/>
                </div><!-- Slide 1 -->

                <div class="ls-slide" data-ls="transition2d:40; timeshift:-1000; slidedelay: 6000;">

                    <img itemprop="image" src="front/images/resource/slide2.jpg" class="ls-bg" alt="Slide background"/>

                    <img src="front/images/resource/logo2.png" alt="" itemprop="image" class="ls-slide"
                         style="top:200px; left:50%;"
                         data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"/>

                    <h4 class="ls-slide text-color"
                        style="top:324px; left:50%; font-family:raleway; font-size:60px; line-height:55px; font-weight:900; text-transform:uppercase;"
                        data-ls="offsetxout:left; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:true; easingout:easeInBack; fadeout:false;">
                        Cargo Freight</h4>

                    <span class="ls-slide"
                          style="top:390px; left:50%; font-family:roboto; color:#ffffff; border-radius:3px; padding:12px 40px; background:rgba(31,66,93,.81); font-size:20px; font-weight:200;"
                          data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Logistics &amp; Transportation</span>

                    <div class="ls-slide"
                         style="top:467px; left:50%; line-height:28px; font-family:lato; font-size:15px; color:#ffffff; text-align:center;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>
                </div><!-- Slide 2 -->

                <div class="ls-slide" data-ls="transition2d:30; timeshift:-1000; slidedelay: 6000;">
                    <img itemprop="image" src="front/images/resource/slide3.jpg" class="ls-bg" alt="Slide background"/>

                    <div class="ls-slide"
                         style="top:223px; left:0;font-family:roboto; font-size:22px; color:#ffffff; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);"
                         data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        Making Transportation
                    </div>

                    <h3 class="ls-slide text-color"
                        style="top:260px; left:0; line-height:70px; font-family:raleway; font-weight:900; font-size:70px; text-transform:uppercase; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);"
                        data-ls="offsetyout:top; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        Fast &amp; Safe</h3>

                    <strong class="ls-slide"
                            style="top:345px; left:0; letter-spacing:3px; font-family:raleway; color:#ffffff; text-transform:uppercase; border-radius:3px; padding:14px 25px; background:#1f425d; font-size:13px;"
                            data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Fast
                        &amp; Secure Delivery</strong>

                    <div class="ls-slide"
                         style="top:425px; left:0;line-height:28px; font-family:lato; font-size:15px; color:#ffffff;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>

                    <a href="front/track.html" itemprop="url" title="" class="ls-slide slide-btn slide-icon"
                       style="top:515px; left:0; text-transform:uppercase; padding:16px 40px; color:#ffb400; border:2px solid #ffb400; font-family:raleway; font-size:13px; font-weight:700;"
                       data-ls="offsetxout:left; offsetyin:bottom; durationin:1700; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">CALCULATE
                        PACKAGE</a>
                </div><!-- Slide 3 -->
            </div>
        </div>
    </div><!-- Main Slider -->

    <section class="overlape track-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="track-form">
                        <div class="heading2">
                            <img src="front/images/resource/track-form.png" alt=""/>
                            <span>BY SEAFREIGHT</span>
                            <h3>SHIPMENT VISIBILITY</h3>
                        </div>
                        <form action="track" method="get">
                            <label><i class="fa fa-stumbleupon"></i><input name="tracking" type="text" placeholder="Track a Shipment: Enter Way Bill Number"/></label>
                            <button title=""  class="theme-btn"
                               ><i class="fa fa-paper-plane"></i>Track</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <span>WHAT WE PROVIDE FOR CLIENTS</span>
                        <h2>QUICK CARGO SERVICES</h2>
                    </div>

                    <div class="top-margin packages">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages1.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info1.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Air
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>Flat Rate For Each Shipment.</li>
                                                <li>Delivery On Your Doorstep</li>
                                                <li>Charters &amp; Intermodal Transportation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages2.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info2.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Road
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>100% Sure And Safe Cargo Service</li>
                                                <li>Direct Door-To-Door Service.</li>
                                                <li>Same-Day Or Overnight Delivery</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages3.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info3.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Ocean
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>No Commission Or Monthly Fees</li>
                                                <li>Save Hundreds Of Dollars</li>
                                                <li>Over 42,000 Dedicated Employees</li>
                                            </ul>
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


    


    




    
<?php foot(); ?>

</div>

<!-- Region Popup -->
<div class="modal fade region" id="region" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><img src="front/images/close.png" alt="" itemprop="image"/></span></button>
                <div class="region-detail">
                    <div class="row">
                        <div class="col-md-6 column">
                            <div class="region-contact-info">
                                <div class="heading2">
                                    <span>Fast And Safe</span>
                                    <h3>Office Address</h3>
                                </div>
                                <p>Transport logitec, ltd. 2258 millenioum Street Columbia, DK 85966</p>
                                <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span>+17425647820</span>
                                            <span>+1 72 25 64 7820</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span>info@MoveItFasts.tk</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-time"></i>
                                            <strong>Office Timing</strong>
                                            <span>10:00am - 06:00pm / Sunday: Close</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="loc-thumb">
                                <img src="front/images/resource/contact.jpg" alt="" itemprop="image"/>
                                <p></p>
                                <a class="theme-btn" href="front/#" title="" itemprop="url">CONTACT US NOW</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Region Detail -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="submission-message" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="submission-data">
                    <span><img src="front/images/resource/submission.png" alt=""/></span>
                    <h1>SUBMISSION SUCCESSFUL</h1>
                    <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                    <a href="front/#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                </div><!-- Submission-data -->
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<?php scripts(); ?>
<script>
    $(document).ready(function () {
        "use strict";

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Reviews **//
        $("#customers-review-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 1,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                0: {
                    nav: false
                },
                900: {
                    nav: true
                }
            }
        });

        $("#modern-services-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 30,
            items: 3,
            responsiveClass: true,
            responsive: {
                1200: {items: 3},
                980: {items: 2},
                480: {items: 2},
                0: {items: 1}
            }
        });

        // Accordion //
        $('#toggle .content').hide();
        $('#toggle h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('#toggle h3').on("click", function () {
            if ($(this).next().is(':hidden')) {
                $('.toggle h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                return false;
            }
        });
    });
</script>
</body>


</html>
