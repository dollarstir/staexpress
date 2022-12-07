<?php
mainchecker('admin', 'login');
involve('stafffunctions');

begin('Home'); ?>

<body class="crm_body_bg">



    <?php staffsidebar(); ?>


    <section class="main_content dashboard_part">

        <?php staffheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="back/img/icon/man.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter"><?php echo countall('package'); ?></span> </h3>
                                                    <p> Total Packages</p>
                                                </div>
                                            </div>
                                            <!-- <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="back/img/icon/cap.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">20</span> </h3>
                                                    <p>Worked on</p>
                                                </div>
                                            </div> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Moveit <a href="back/#"> <i class="ti-heart"></i> </a><a href="back/#">
                                    Admin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="back/js/jquery1-3.4.1.min.js"></script>

    <script src="back/js/popper1.min.js"></script>

    <script src="back/js/bootstrap1.min.js"></script>

    <script src="back/js/metisMenu.js"></script>

    <script src="back/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="back/vendors/chartlist/Chart.min.js"></script>

    <script src="back/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="back/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="back/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="back/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="back/vendors/gijgo/gijgo.min.js"></script>

    <script src="back/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="back/vendors/datatable/js/jszip.min.js"></script>
    <script src="back/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="back/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="back/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="back/js/chart.min.js"></script>

    <script src="back/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="back/vendors/tagsinput/tagsinput.js"></script>

    <script src="back/vendors/text_editor/summernote-bs4.js"></script>
    <script src="back/vendors/apex_chart/apexcharts.js"></script>
    <?php echo Yolk::uicore('jsa'); ?>

    <script src="back/js/custom.js"></script>
    <script src="back/vendors/apex_chart/bar_active_1.js"></script>
    <script src="back/vendors/apex_chart/apex_chart_list.js"></script>
</body>

</html>