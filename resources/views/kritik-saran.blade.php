@include('../header')
<!-- page-title -->
                <div class="container">
                    <br/>
                    <br/>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-12">
                            <div class="">
                                <h3 class="title">Kritik & Saran</h4>
                                <h6>Kritik dan saran kamu sangat berarti untuk perkembangan Lab Kami.</h6>
                            </div>
                        </div>
                    </div>
                </div>

    <!--site-main start-->
    <div class="site-main">


        <!--grid-section-->
        <section class="ttm-row grid-section clearfix ">
            <div class="container  ">
                    <form action="konsultasi-proses" method="post" class="ttm-contactform wrap-form clearfix d-flex justify-content-end">
                            @csrf
                        <div class="row ">
                            <div class="col-lg-8 text-center" style="width:900px">
                                <label>
                                    <span class="text-input"><input name="konsultasi_nama" type="text"  placeholder="Nama (Optional)"></span>
                                </label>
                                <label>
                                    <span class="text-input"><textarea name="konsultasi_pesan" rows="4" cols="40" placeholder="Kritik & Saran"></textarea></span>
                                </label>
                                <label>
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Kirim</button>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        <!--grid-section end-->

      
    </div><!--site-main end-->

@include('../footer')