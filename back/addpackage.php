<?php
mainchecker('admin', 'login');

involve('stafffunctions');

begin('Add Package'); ?>

<body class="crm_body_bg">



<?php staffsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php staffheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">App New Package</h3>
                                </div>
                            </div>
                            <form class="addpackage">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Item </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="item">
                                </div>

                                <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Shipping Status</label>
                                            <select class="form-select" id="inputGroupSelect01" name="status">
                                                <option >Choose...</option>
                                                <?php echo status(); ?>
                                                
                                            </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Shipping from</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="origin">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Current Location</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="current">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Destination Service Area</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="destination">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Pickup Date</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="pickupdate">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Pickup Time</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="pickuptime">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Expected Delivery Date</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="edeliverydate">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Depature Time</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="departuretime">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Weight of Package (add unit eg: Kg)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="weight">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Shipper's Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="shippername">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Shipper's Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="shipperaddress">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Reciever's Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="recievername">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Reciever Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="recieveraddress">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Payment Mode(eg: Cash)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="paymode">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Shipping Mode (eg : Air)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="shipmode">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Remarks</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="remarks">
                                </div>


                                <button type="submit" class="btn btn-primary"> Save </button>
                                
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <div class="footer_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_iner text-center">
                            <p>2020 © Moveit <a href="#"> <i class="ti-heart"></i> </a><a href="#">
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
    <script src="processor/processor.js"></script>
</body>

</html>