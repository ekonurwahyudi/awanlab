@include('header')
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">{{__('lang.Tentang')}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">{{__('lang.Beranda')}}</a>
                                </span>
                                <span>{{__('lang.Tentang')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="col-bg-img-ten ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ml_100">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="pl-100 pt-35 pr-20 res-991-pt-0 res-991-pr-0 res-991-pb-50">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h5>{{ __('lang.Tentang')}}</h5>
                                            <h4 class="title">Laboratorium Calibration <br> PT. Telekomunikasi Indonesia, Tbk.</h4>
                                        </div>
                                        <div class="title-desc"> {{__('lang.telkom')}}</div> <br/>
                                        <div class="title-desc"> {{__('lang.tentanglab')}}</div>
                                        
                                        <br/>
                                        <h4 class="title">{{__('lang.visi')}}</h4>
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                            <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">{{__('lang.isivisi')}}</div></li>
                                        </ul>

                                        <br/>
                                        <h4 class="title">{{__('lang.misi')}}</h4>
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                            <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">{{__('lang.isimisi')}}</div></li>
                                        </ul>
                                        
                                    </div><!-- section title end -->
                                    <div class="d-sm-flex align-items-center pt-0">
                                        <h6 class="mr-2">{{__('lang.pertayaan')}} <u>{{__('lang.Hubungi')}}.</u></h6>
                                        <div class="d-flex"><h5>(021) 82491919</h5><span class="pl-5 pr-5">or</span><h5>82492121</h5></div>
                                    </div>
                                    <!-- <div class="sep_holder_box width-100 mt-20 mb-30">
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                    </div>
                                    <div class="mt-20">
                                        
                                        <div class="featured-icon-box icon-align-before-content">
                                            <div class="featured-icon">
                                                <div class="img-content">
                                                    <img src="images/author-sign.png" alt="ttm_single_image-wrapper">
                                                </div>
                                            </div>
                                            <div class="featured-content pl-30">
                                                <div class="featured-title">
                                                    <h5>Ferdinal</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>OSM INFRA MAINTENANCE SUPPORT</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> -->

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-1 col-lg-1 col-xs-1 order-lg-2 order-md-3 order-3">
                        
                        <div class="featured-icon-box style1 icon-align-top-content ttm-bgcolor-skincolor">
                            <div class="featured-icon-box-inner-1">
                                <div class="featured-icon-box-inner-2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                            <i class="flaticon-healthcare-and-medical"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>25 Tahun</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Experiance Of Laboratory</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-5 col-lg-5 col-xs-12 order-sm-2 order-md-2 order-2">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white pt-10 pl-10 pr-10 pb-10 z-index-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper text-center">
                                    <img class="img-fluid" src="../images/single-img-one.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor mr-10 mt-15 js-video-button"  data-video-id='v1mVEQ-pUcw' href=""> <i class="far fa-play-circle"></i> {{__('lang.nonton')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <!--introduction-section end-->
    </div><!--site-main end-->
    

@include('footer')