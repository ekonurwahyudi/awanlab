@include('header')
        <!-- page-title -->
        <!-- <div class="container">
            <br/>
            <br/>
            <div class="row align-items-center text-center">
                <div class="col-lg-12">
                    <div class="">
                        <h4 class="title">Frequently Asked Questions</h4>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a href="/">Beranda</a>
                        </span>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div> -->


    <!--site-main start-->
    <div class="site-main pt-0">


        <section class="ttm-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-30">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="title">Frequently Asked Questions</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>

                       
                        <div class="accordion">
                            @foreach($faq as $faq)
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true">
                                <div class="toggle-title"><a href="#" >{{$faq->faq_pertayaan}}</a></div>
                                <div class="toggle-content">
                                    <p>{{$faq->faq_jawaban}}</p>
                                </div>
                            </div><!-- toggle end -->
                            @endforeach
                       </div>
                        

                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="ttm-bgcolor-grey ttm-bg pt-25 pr-30 pb-30 pl-30 res-991-mt-30">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">{{__('lang.Konsultasi')}}</h2>
                                    </div>
                                    <div class="title-desc">{{__('lang.formkonsultasi')}}</div>
                                </div><!-- section title end -->
                                <form action="konsultasi-proses" method="post" id="ttm-contactform" class="ttm-contactform wrap-form clearfix">
                                     @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="konsultasi_nama" type="text"  placeholder="{{__('lang.nama')}}" required></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><input name="konsultasi_hp" type="text"  placeholder="{{__('lang.nohp')}}" required></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><input name="konsultasi_email" type="email"  placeholder="Email" required></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><textarea name="konsultasi_pesan" rows="4" style="width: 300px;" placeholder="{{__('lang.pertayaan')}}" required></textarea></span>
                                            </label>
                                            <label>
                                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">submit</button>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div><!--site-main end-->

@include('footer')