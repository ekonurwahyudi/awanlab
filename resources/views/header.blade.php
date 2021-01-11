<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Health & Medical Laboratory Html Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
<title>Lab Kalibrasi Telkom</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="../images/facivon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="../css/animate.css"/>

<!-- fontawesome -->
<!-- <link rel="stylesheet" href="../https://use.fontawesome.com/releases/v5.15.1/css/all.css">
<link rel="stylesheet" href="../https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css"> -->
<link rel="stylesheet" type="text/css" href="../css/all.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="../css/themify-icons.css"/>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="../css/flaticon.css"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="../css/slick.css">

<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="../revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="../css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="../css/main.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="../css/megamenu.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="../css/responsive.css"/>

<link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.css"/>

<link rel="stylesheet" type="text/css" href="../css/floating-wpp.min.css">
<link rel="stylesheet" href="../css/modal-video.min.css">
<!-- <link href="../halamanadmin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->
 <!-- <link rel="stylesheet" type="text/css" href="css/tambah.css"> -->
<style>
    textarea {
        padding: 10px;
        vertical-align: top;
        width: 200px;
    }
    textarea:focus {
        outline-style: solid;
        outline-width: 2px;
    }
</style>
</style>
</head>

<body>
    

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <!-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> -->
        <!-- preloader end -->       

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- top_bar -->
            <div class="top_bar ttm-bgcolor-skincolor clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 d-flex flex-row align-items-center ">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-phone"></i></div>021-21480341</div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fal fa-envelope"></i></div><a href="../mailto:yourdomain@gmail.com">labkalibrasi@telkom.co.id</a></div>
                            <div class="top_bar_contact_item ml-auto"><div class="top_bar_icon"><i class="fal fa-clock"></i></div>{{ __('lang.Waktu')}}</div>
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item">
                                    <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fal fa-globe"></i></div>{{ __('lang.Bahasa')}}</div>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ url('en')}}"></i>English</a></li>
                                            <li><a href="{{ url('id')}}"></i>Indonesia</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <a href="../home"><div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-user"></i></div>{{ __('lang.Login')}}</div></a>
                        </div>
                    </div>
                </div>
            </div><!-- top_bar end-->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row">
                                    <!-- site-branding -->
                                    <div class="site-branding mr-auto">
                                        <a class="home-link" href="../" rel="home">
                                            <img id="logo-img" class="img-center" src="../images/logo-img.png" alt="logo-img">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item">
                                                <a href="../" >{{ __('lang.Beranda')}}</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="../tentang-kami" class="mega-menu-link">{{ __('lang.Tentang')}}</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="../tentang-kami">{{ __('lang.Profil')}}</a>
                                                    <li><a href="../sertifikat-iso">{{ __('lang.Sertifikat')}}</a></li>
                                                    <li><a href="../struktur-organisasi">{{ __('lang.Struktur')}}</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="../layanan-kalibrasi" class="mega-menu-link">{{ __('lang.Layanan')}}</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="../layanan-kalibrasi">{{ __('lang.Kalibrasi')}}</a>
                                                    <li><a href="../konsultasi">{{ __('lang.Konsultasi')}}</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="../#" class="mega-menu-link">{{ __('lang.Info')}}</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="../ruanglingkup" >{{ __('lang.Ruang')}}</a>
                                                    <!-- <ul class="mega-submenu">
                                                        <li><a href="../labjakarta">Lab Kalibrasi Jakarta</a>
                                                        <li><a href="../labmedan">Lab Kalibrasi Medan</a></li>
                                                        <li><a href="../labsurabaya">Lab Kalibrasi Surabaya</a></li>
                                                        <li><a href="../labmakassar">Lab Kalibrasi Makassar</a></li>
                                                    </ul> -->
                                                    <!-- <li><a href="../#">Tarif Kalibrasi</a></li> -->
                                                    <li><a href="#">{{ __('lang.Client')}}</a>
                                                    <li><a href="../kritik-saran">{{ __('lang.Kritik')}}</a>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="../artikel" >{{ __('lang.Artikel')}}</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="../hubungi-kami" >{{ __('lang.Hubungi')}}</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="#" >Tracking order</a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!--header end-->
        