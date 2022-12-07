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
                        <button type="submit"><img src="images/close1.png" alt="" /></button>
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
                                                <button type="submit"  title="" class="theme-btn"><i class="fa fa-paper-plane"></i> Track Shipment</button>
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
            <div class="parallax" data-velocity="-.1" style="background: url(front/images/parallax4.jpg) repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <span></span>
                    <h3>Gallery</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->


        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery1">
                            <div class="row masonary" id="masonary">
                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="front/images/resource/gallery1-1.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>Worldwide Shipping</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-1.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-2.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>New Service</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-2.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-3.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>We Are Hiring</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-3.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-4.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>First Quartal</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-4.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-5.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>Revenu Report</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-5.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-6.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>Justify</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-6.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-7.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>Cras Cursus</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-7.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-8.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>New Services</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-8.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="gallery-img">
                                        <img src="https://www.moveitfast.co/images/resource/gallery1-9.jpg" alt="" itemprop="image" />
                                        <div class="gallery-detail">
                                            <h3>Logistics</h3>
                                            <a data-lightbox="gallery-set2" href="https://www.moveitfast.co/images/resource/gallery1-9.jpg" title="" itemprop="url"><i class="fa fa-search-plus"></i></a>
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
                            aria-hidden="true"><img src="images/close.png" alt="" itemprop="image"/></span></button>
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
                                <img src="images/resource/contact.jpg" alt="" itemprop="image"/>
                                <p></p>
                                <a class="theme-btn" href="#" title="" itemprop="url">CONTACT US NOW</a>
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
                    <span><img src="images/resource/submission.png" alt=""/></span>
                    <h1>SUBMISSION SUCCESSFUL</h1>
                    <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                    <a href="#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i
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
