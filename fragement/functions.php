<?php

function begin($title = '')
{
    echo '<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.app1('appname').' | '.$title.' </title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="yolkassets/upload/'.app1('favicon').'" type="image/png">

        <!-- Styles -->
        <link rel="stylesheet" href="front/css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
        <link rel="stylesheet" href="front/css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->
        <link rel="stylesheet" href="front/css/icons.css" type="text/css" /><!-- Font Awesome -->
        <link rel="stylesheet" href="front/css/select2.min.css" type="text/css" /><!-- Select2 -->
        <link rel="stylesheet" href="front/css/perfect-scrollbar.css" /><!-- Scroll Bar -->
        <link rel="stylesheet" href="front/css/style.css" type="text/css" /><!-- Style -->
        <link rel="stylesheet" href="front/css/responsive.css" type="text/css" /><!-- Responsive -->
        <link rel="stylesheet" href="front/css/colors/color.css" type="text/css" /><!-- Color -->
        <link rel="stylesheet" href="front/layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->
    
    </head>';
}

function topnav()
{
    echo '<header class="fancy-header stick">
    <div class="top-sec">
        <div class="top-bar">
            <div class="container">
                <span class="cargo-time"><i class="fa fa-clock-o"></i>Working Time : 08:00AM - 9:00PM</span>
                <div class="connect-us">
                    <ul class="social-btn">
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-twitter"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-reddit"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="extra-links">
                    <a itemprop="url" href="front/contact" title="">Support</a>   /   <a itemprop="url" href="front/#" title="" class="popup2">Track Item</a>
                </div>
            </div>
        </div>
    </div><!-- Top Sec -->
    <div class="logo-menu-sec">
        <div class="logo-menu">
            <div class="logo">
                <a itemprop="url" href="home" title=""><img itemprop="image" src="yolkassets/upload/'.app1('applogo').'" alt="" /></a>
            </div>
            <div class="quick-contact">
                <ul>
                    <li>
                        <img src="front/images/resource/phone.png" alt="" />
                        <span>'.app1('appcontact').'</span>
                        <p></p>
                    </li>
                    <li>
                        <img src="front/images/resource/sms.png" alt="" />
                        <span>'.app1('appemail').'</span>
                        <p>Have Any Question?</p>
                    </li>
                    <li>
                        <a href="#" title="" itemprop="url" class="theme-btn popup2">Track Item</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="menu-curve">
            <ul>
                <li class=""><a itemprop="url" href="home" title="">HOME</a>

                </li>
                <li class=""><a itemprop="url" href="about" title="">ABOUT</a>

                </li>
                <li class=""><a itemprop="url" href="services" title="">SERVICES</a>

                </li>

                <!--<li class=""><a itemprop="url" href="gallery" title="">GALLERY</a>-->

                </li>

                <li><a itemprop="url" href="contact" title="">CONTACT</a></li>
            </ul>
        </nav>
    </div><!-- Logo Menu Sec -->
</header>

<div class="responsive-header">
    <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
    <div class="responsive-top-sec">
        <div class="responsive-top-bar top-bar">
            <div class="container">
                <span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>
                <div class="connect-us">
                    <ul class="social-btn">
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a itemprop="url" href="front/#" title=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Responsive Top Bar -->
        <div class="responsive-quick-contact">
            <div class="container">
                <div class="quick-contact">
                    <ul>
                        <li>
                            <img src="front/images/resource/phone.png" alt="" />
                            <span>'.app1('appcontact').'</span>
                            <p></p>
                        </li>
                        <li>
                            <img src="front/images/resource/sms.png" alt="" />
                            <span>'.app1('appemail').'</span>
                            <p>Have Any Question?</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- Responsive Quick Contact -->
    </div>
    <div class="responsive-nav">
        <div class="container">
            <div class="responsive-logo">
                <div class="logo">
                    <a itemprop="url" href="front/home" title=""><img itemprop="image" src="yolkassets/upload/'.app1('applogo').'" alt="" /></a>
                </div>
            </div>
            <span class="responsive-btn"><i class="fa fa-list"></i></span>
            <div class="responsive-menu">
                <span class="close-btn"><i class="fa fa-close"></i></span>
                <ul class="responsive-popup-btns">
                    <li><i class="fa fa-user"></i><a itemprop="url" href="front/#" title="" class="popup1">Sign In</a></li>
                    <li><i class="fa fa-paper-plane"></i><a itemprop="url" href="front/#" title="" class="popup2">REQUEST A RATE</a></li>
                </ul>
                <ul>
                    <li class=""><a itemprop="url" href="home" title="">HOME</a>

                    </li>
                    <li class=""><a itemprop="url" href="about" title="">ABOUT</a>

                    </li>
                    <li class=""><a itemprop="url" href="services" title="">SERVICES</a>

                    </li>

                    <li class=""><a itemprop="url" href="gallery" title="">GALLERY</a>

                    </li>

                    <li><a itemprop="url" href="contact" title="">CONTACT</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div>
    </div>
</div><!--Responsive header-->';
}

function foot()
{
    echo '<footer>
    <section class="block">
        <div class="parallax dark" data-velocity="-.2"
             style="background: rgba(0, 0, 0, 0) url(front/images/parallax2.jpg) no-repeat 50% 0;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 column">
                            <div class="widget">
                                <div class="about-widget">
                                    <div class="logo">
                                        <a itemprop="url" href="home" title=""><img itemprop="image"
                                                                                         src="yolkassets/upload/'.app1('applogo').'" alt="
                                                                                         alt=""/></a>
                                    </div>
                                    <p itemprop="description"></p>
                                    <ul class="social-btn">
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="front/#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <Div class="row">
                                <div class="col-md-12 column">
                                    <div class="widget">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>USEFUL LINKS</h3>
                                        </div>
                                        <div class="links-widget">
                                            <ul>
                                                <li><a itemprop="url" href="about" title="">About Us</a></li>
                                                <li><a itemprop="url" href="services" title="">Services</a></li>
                                                <li><a itemprop="url" href="gallery" title="">Gallery</a>
                                                </li>
                                                <li><a itemprop="url" href="contact"
                                                       title="">Contact</a></li>
                                                <li><a itemprop="url" href="track" title="">Track Shipment</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- Widget -->
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 column">
                            <div class="widget blue1">
                                <div class="heading2">
                                    <span>FAST AND SAFE</span>
                                    <h3>Track Shipment</h3>
                                </div>
                                <div class="subscription-form">
                                    <p itemprop="description"></p>
                                    <form action="track" method="get">
                                        <input type="text" name="tracking" required placeholder="Enter Tracking Number"/>
                                        <button type="submit" title=""  class="theme-btn"
                                           ><i class="fa fa-paper-plane"></i>TRACK NOW</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 column">
                    <span>&copy; '.date('Y').'  <a itemprop="url" title="" href="front/home">'.app1('appname').'</a> - All Rights Reserved</span>
                </div>
                <div class="col-md-6 column">
                    <ul>
                        <li><a itemprop="url" href="front/home" title="">HOME</a></li>
                        <li><a itemprop="url" href="front/services" title="">SERVICES</a></li>
                        <li><a itemprop="url" href="front/gallery" title="">GALLERY</a></li>
                        <li><a itemprop="url" href="front/contact" title="">CONTACT</a></li>
                        <li><a itemprop="url" href="front/about" title="">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blank"></div>
</footer>';
}

function scripts()
{
    echo '<script type="text/javascript" src="front/js/modernizr-2.0.6.js"></script><!-- Modernizr -->
    <script type="text/javascript" src="front/js/jquery-2.2.2.js"></script><!-- jQuery -->
    <script type="text/javascript" src="front/js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="front/js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
    <script type="text/javascript" src="front/js/jquery.scrolly.js"></script><!-- Scrolly -->
    <script type="text/javascript" src="front/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="front/js/icheck.js"></script><!-- iCheck -->
    <script type="text/javascript" src="front/js/select2.full.js"></script><!-- Select2 -->
    <script type="text/javascript" src="front/js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
    <script type="text/javascript" src="front/js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->
    
    <!-- External libraries: jQuery & GreenSock -->
    <script src="front/layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="front/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="front/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script src="front/js/script.js"></script>';
}

function app1($data)
{
    $d = fetchall('settings');

    return $d[0][$data];
}

function app($data)
{
    $d = fetchall('settings');

    echo $d[0][$data];
}
