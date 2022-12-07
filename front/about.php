<?php
involve('functions.php');
begin('About Us');
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
    <div class="page-top blackish overlape" style="opacity:1 !important;">
        <div class="parallax" data-velocity="-.1" style="background: url(front/images/parallax4.jpg) repeat scroll 0 0"></div>
        <div class="container">
            <div class="page-title">
                <span></span>
                <h3>About Us</h3>
            </div><!-- Page Title -->
        </div>
    </div><!-- Page Top -->

    

   <!-- <section class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="reviews-sec">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading2 heading4 light">
                                    <span>What People Says About Us</span>
                                    <h3>COMPANY BENIFITS</h3>
                                </div>
                                <div class="company-benifits">
                                    <div class="toggle" id="toggle">
                                        <div class="toggle-item activate">
                                            <h3 class="active"><i class="fa fa-life-bouy"></i>Using This Dedicated
                                                Purpose Theme? <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-joomla"></i>Creative And Corporate Industries?
                                                <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-leaf"></i>Business Niche Or Creative Style?
                                                <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="heading2 heading4 light">
                                    <span>What People Says About Us</span>
                                    <h3>CUSTOMERS REVIEWS</h3>
                                </div>

                                <div class="customers-reviews">
                                    <div class="customers-review-carousel" id="customers-review-carousel">
                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review1.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem
                                                    ipsum dolor siamet, con ridiculus sum dolor sit ametum. Sociis, eget
                                                    mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Pellentesque.</p>
                                                <div class="customer-info">
                                                    <h4>YMYZ ADAMS</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review2.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Sociis,
                                                    eget mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Lorem ipsum dolor
                                                    siamet, con ridiculus sum dolor sit ametum Pellentesque.</p>
                                                <div class="customer-info">
                                                    <h4>JOHAN DOE</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review3.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Sociis,
                                                    eget mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Pellentesque. Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem
                                                    ipsum dolor siamet, con ridiculus sum dolor sit ametum. </p>
                                                <div class="customer-info">
                                                    <h4>JOHAN CARTER</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><
                </div>
            </div>
        </div>
    </section>-->


    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="what-make-us-different">
                        <div class="heading">
                            <!-- <span>WHAT WE PROVIDE FOR CLIENTS</span> -->
                            <h2>ABOUT US</h2>
                            <p></p>
                        </div>

                        <div class="top-margin">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-style2">
                                    <p itemprop="description"><?php  app('appabout'); ?></p>
                                    </div>
                                </div>

                                

                                <div class="col-md-6">
                                    <div class="post-style2">
                                        <img src="front/images/parallax4.jpg" alt=""
                                                   itemprop="image"/>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- <section class="block blackish">
        <div class="fixed-bg" style="background:url(images/parallax1.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="members-sec">
                        <div class="heading heading5">
                            <span>WHAT WE PROVIDE FOR CLIENTSENEFITS</span>
                            <h2>COMPANY EMPLOYES</h2>
                            <p></p>
                        </div>

                        <div class="members-area top-margin">
                            <div class="member clicked">
                                <div class="member-thumb">
                                    <img src="front/images/resource/team1.jpg" alt="" itemprop="image"/>
                                    <div class="member-info">
                                        <span>Founder / Ceo</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">JACOB HORAM</a></h4>
                                    </div>
                                </div>
                                <div class="member-detail">
                                    <div class="member-info">
                                        <span>Founder / Ceo</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">JACOB HORAM</a></h4>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus
                                        muse ore dolor sit ame dolor sit amet.</p>
                                    <ul class="social-btns">
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="member">
                                <div class="member-thumb">
                                    <img src="front/images/resource/team2.jpg" alt="" itemprop="image"/>
                                    <div class="member-info">
                                        <span>Marketing Assistant</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">Jessica Bonner</a></h4>
                                    </div>
                                </div>
                                <div class="member-detail">
                                    <div class="member-info">
                                        <span>Marketing Assistant</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">Jessica Bonner</a></h4>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus
                                        muse ore dolor sit ame dolor sit amet.</p>
                                    <ul class="social-btns">
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="member">
                                <div class="member-thumb">
                                    <img src="front/images/resource/team3.jpg" alt="" itemprop="image"/>
                                    <div class="member-info">
                                        <span>Insurance Manager</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">Patrick Oconor</a></h4>
                                    </div>
                                </div>
                                <div class="member-detail">
                                    <div class="member-info">
                                        <span>Insurance Manager</span>
                                        <h4><a href="front/team-detail.html" title="" itemprop="url">Patrick Oconor</a></h4>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus
                                        muse ore dolor sit ame dolor sit amet.</p>
                                    <ul class="social-btns">
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- <section class="block no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="partners" id="partners">
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner1.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner2.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner3.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner4.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner5.png"
                                                                     alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->


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
                                            <span>+17325647820</span>
                                            <span>+1 73 25 64 7820</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span>info@MoveItFasts.co</span>
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

<!-- Mirrored from html.webinane.com/unload/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 06:57:15 GMT -->
</html>
