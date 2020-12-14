@include('header')
<!-- page-title -->
        <div class="">
            <div class="">
                <div class="container">
                    <br/>
                    <br/>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-12">
                            <div class="">
                                <h2 class="title">Artikel</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="/">Beranda</a>
                                </span>
                                <span>Artikel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <div class="row multi-columns-row ttm-boxes-spacing-15px">
                @foreach ($artikels as $artikel)
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="{{ url('storage/artikels/'.$artikel->artikel_gambar)}}" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>{{$artikel->artikel_editor}}</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{$artikel->artikel_date}}</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="/artikel/{{$artikel->artikel_id}}">{{$artikel->artikel_judul}}</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>{{Str::limit(Strip_tags($artikel->artikel_deskripsi),80)}}</p>
                                </div>
                                <br/>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="/artikel/{{$artikel->artikel_id}}" tabindex="0">Selengkapnya</a>
                                    
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                  {{$artikels->links()}}
                </div>
        </section>
        <!--grid-section end-->

      
    </div><!--site-main end-->

@include('footer')