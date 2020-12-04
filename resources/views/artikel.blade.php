@include('header')
@foreach ($artikels as $artikel)
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">{{$artikel->artikel_judul}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>{{$artikel->artikel_judul}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->

                <div class="row">
                {{$artikel->artikel_id}}
                    <div class="col-lg-8 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-single clearfix">
                             <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ url('storage/artikels/'.$artikel->artikel_gambar)}}" alt="">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By {{$artikel->artikel_editor}}</span>
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                        <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><time class="entry-date published" datetime="2018-07-28T00:39:29+00:00">{{$artikel->artikel_date}}</time></span>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                    {{$artikel->artikel_deskripsi}}
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="input-text" placeholder="Enter Your Keyboard...." value="" name="s">
                                </label>
                                <button class="btn" type="submit" value="Search"> <i class="ti ti-search" aria-hidden="true"></i> </button>
                            </form>
                        </aside>
                        <aside class="widget widget-Categories with-title">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Chemistry</a><span>3</span></li>
                                <li class="active"><a href="#">Biosafety</a><span>2</span></li>
                                <li><a href="#">Gemological</a><span>2</span></li>
                                <li><a href="#">Biochemistry</a><span>1</span></li>
                                <li><a href="#">Forensic science</a><span>3</span></li>
                                <li><a href="#">Commercial</a><span>1</span></li>
                                <li><a href="#">Artificial intelligence</a><span>1</span></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="https://via.placeholder.com/100x95?text=100x95+blog-01.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="blog-single.html">How much aspirin to take for stroke</a>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="https://via.placeholder.com/100x95?text=100x95+blog-02.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="blog-single.html">Implant Surgical equipment technology</a>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="https://via.placeholder.com/100x95?text=100x95+blog-03.jpg" alt="post-img"></a>
                                    <span class="post-date">April 05, 2019</span>
                                    <a href="blog-single.html">The Benefits of Middle-Age Fitness</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-archive with-title">
                            <h3 class="widget-title">Post Archives</h3>
                            <ul>
                                <li><a href="#">January  (18)</a></li>
                                <li><a href="#">February  (31)</a></li>
                                <li><a href="#">March  (22)</a></li>
                                <li><a href="#">April  (16)</a></li>
                                <li><a href="#">May  (07)</a></li>
                                <li><a href="#">June  (37)</a></li>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Laboratory specimen</a>
                                <a href="#" class="tag-cloud-link">Wet lab</a>
                                <a href="#" class="tag-cloud-link">Reagent bottle</a>
                                <a href="#" class="tag-cloud-link">Gemological</a>
                                <a href="#" class="tag-cloud-link">Laboratory safety</a>
                                <a href="#" class="tag-cloud-link">equipment‎</a>
                                <a href="#" class="tag-cloud-link">Biochemistry research</a>
                                <a href="#" class="tag-cloud-link">Commercial</a>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endforeach
@include('footer')