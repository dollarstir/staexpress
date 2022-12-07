<?php
involve('functions.php');
begin();
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
                                                <input type="text" name="track" required class="text-field" placeholder="WayBill Number" />
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
        <div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url(images/parallax4.jpg) repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <span></span>
                    <h3>Contact Us</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->



        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="region-contact-info team-detail-info">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>OFFICE ADDRESS</h3>
                                        </div>
                                        <p><?php  app('appaddress'); ?></p>
                                        <div class="contact-detail">
                                            <span class="contact">
                                                <i class="fa fa-mobile"></i>
                                                <strong>Phone No</strong>
                                                <span><?php  app('appcontact'); ?></span>
                                                <!-- <span>+1 73 25 64 7820</span> -->
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Email Address</strong>
                                                <span><?php  app('appemail'); ?></span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Office Timing</strong>
                                                <span>10:00am - 06:00pm / Sunday: Close</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="get-quote-form contact-info-form">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>GET IN TOUCH</h3>
                                        </div>
                                        <p>Fill The Form Bellow. And Get In Touch Immediately</p>
                                        <div class="contactform">
                                            <div id="message"></div>
                                            <form id="contactform" method="post" action="#">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Complete Name" class="text-field input-style" id="name" name="name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" placeholder="Email Address" id="email" name="email" class="text-field input-style" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Subject" name="subject" class="text-field input-style" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Description" class="text-field input-style" id="comments" name="desc"></textarea>
                                                    </div>
                                                    <div class="col-md-12"><div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div></div>
                                                    <div class="col-md-12">
                                                        <button id="quote-btn" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Contact Now</button>
                                                        <img src="front/images/ajax-loader.gif" class="loader" alt="" />
                                                    </div>
                                                </div>
                                            </form>
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
                                    <span><?php app('appname'); ?></span>
                                    <h3>Office Address</h3>
                                </div>
                                <p><?php  app('appaddress'); ?></p>
                                <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span><?php  app('appcontact'); ?></span>
                                            <!-- <span>+1 73 25 64 7820</span> -->
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span><?php  app('appemail'); ?></span>
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
