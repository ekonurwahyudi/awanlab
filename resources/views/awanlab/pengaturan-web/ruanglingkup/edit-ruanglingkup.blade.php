
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http:/www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https:/1.envato.market/EA4JP
Renew Support: https:/1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Dashboard Awanlab</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https:/keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https:/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="../../../../halamanadmin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../../halamanadmin/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../../halamanadmin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="../../../../halamanadmin/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../../halamanadmin/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../../halamanadmin/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="../../../../halamanadmin/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
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
	</head>
	<!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
                <p>Awanlab</p>
				<!-- <img alt="Logo" src="../../../halamanadmin/media/logos/logo-light.png" /> -->
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http:/www.w3.org/2000/svg" xmlns:xlink="http:/www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
                        <!--begin::Logo-->
                        <h2>Awanlab</h2>
						<!-- <a href="index.html" class="brand-logo"> -->
                            <!-- <p>halaman Admin</p> -->
							<!-- <img alt="Logo" src="../../../halamanadmin/media/logos/logo-light.png" /> -->
						<!-- </a> -->
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http:/www.w3.org/2000/svg" xmlns:xlink="http:/www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item" aria-haspopup="true">
									<a href="../awanlab" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<!-- <li class="menu-section">
									<h4 class="menu-text">Custom</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li> -->
								<li class="menu-item menu-item-submenu menu-item-active" aria-haspopup="true" data-menu-toggle="hover">
									<a href="../pengaturan-web" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Pengaturan Web</span>
										
									</a>
									
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div>
								<h5 class="pt-8">Pengaturan Web Kalibrasi</h5>
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Search-->
								
								<!--end::Search-->
								<!--begin::Notifications-->
								
								<!--end::Notifications-->
								<!--begin::Quick Actions-->
								
								<!--end::Quick Actions-->
								<!--begin::Cart-->
								
								<!--begin::User-->
								<div class="topbar-item">
								<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" data-toggle="dropdown" data-offset="10px,0px">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }}</span>
										<!-- <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
											
										</span> -->
										<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">E</span>
										</span>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">Profil</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item active">
												<a href="#" class="navi-link">
													<span class="navi-text">Ganti Password</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item">
												<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="navi-link">

												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>
													<span class="navi-text">Logout</span>
												</a>
											</li>
										</ul>
										<!--end::Nav-->
									</div>
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
										<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
											<!--begin::Header Nav-->
											<ul class="menu-nav">
												<li>
													<a href="#" class="btn btn-hover-light font-weight-bold">

													<span class="svg-icon svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"/>
																<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
															</g>
														</svg>
													</span>
														<span class="menu-text"style="color:#3f4254" >General</span>
													</a>
												</li>&nbsp;
												<li>
													<a href="/pengaturan/artikel" class="btn btn-hover-light font-weight-bold">
													<span class="svg-icon svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"/>
																<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
																<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
																<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
																<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
																<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
																<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
																<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
																<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
															</g>
														</svg>
													</span>
														<span class="menu-text" style="color:#3f4254">Blog & Artikel</span>
													</a>
												</li>
												<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
													<a href="javascript:;"class="menu-toggle btn btn-hover-light font-weight-bold active">
													<span class="svg-icon svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"/>
																<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
															</g>
														</svg>
													</span>
														<span class="menu-text" style="color:#3f4254">Halaman</span>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-left">
														<ul class="menu-subnav">
															<li class="menu-item active" aria-haspopup="true">
																<a href="../pengaturan/ruanglingkup" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Safe-chat.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"/>
																				<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
																				<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text">Ruang Lingkup</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"/>
																				<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																				<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"/>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text">Kritik & Saran</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="" class="menu-link">
																	<span class="svg-icon menu-icon">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"/>
																				<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
																				<path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z" fill="#000000"/>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="menu-text">FAQ</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#"class="btn btn-hover-light font-weight-bold">
													<span class="svg-icon svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
        													<path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000"/>
															</g>
														</svg>
													</span>
														<span class="menu-text" style="color:#3f4254">Slide</span>
													</a>
												</li>
											</ul>
											<!--end::Header Nav-->
										</div>
								<!--end::Header Menu-->
							</div>
									<!--end::Page Title-->
									<!--begin::Actions-->
									<!--end::Actions-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<!--end::Notice-->
								<!--begin::Card-->
								    <div class="card card-custom">
										<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h5 class="card-label">Tambah Ruang Lingkup</h5>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
                                            <a href="/pengaturan/ruanglingkup" class="btn btn-danger font-weight-bold mr-2">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Address-card.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>Kembali</a>
											<!--end::Dropdown-->
											<!--begin::Button-->
										</div>
									</div>
									<div class="card-body">
                                        <!--begin: Datatable-->
                                        @foreach($ruanglingkup as $ruanglingkup)
										<form action="/pengaturan/ruanglingkup-update/{{$ruanglingkup->ruanglingkup_id}}" method="POST">
                                            {{csrf_field()}}
											<div class="card-body">
												<div class="form-group mb-8">                                        
												<div class="form-group row">
													<label  class="col-2 col-form-label">Lokasi Lab</label>
													<div class="col-8">
                                                        <select class="custom-select form-control @error('ruanglingkup_lokasi') is-invalid @enderror" name="ruanglingkup_lokasi" value="{{$ruanglingkup->ruanglingkup_lokasi}}">
                                                            <option value="{{$ruanglingkup->ruanglingkup_lokasi}}">Pilih Lokasi Lab</option>
                                                            <option value="1">Jakarta</option>
                                                            <option value="2">Medan</option>
                                                            <option value="3">Surabaya</option>
                                                            <option value="4">Makassar</option>
                                                        </select>
													</div>
                                                    @error('ruanglingkup_lokasi')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
                                                <div class="form-group row">
													<label  class="col-2 col-form-label">Kelompok Pengukuran</label>
													<div class="col-8">
                                                        <select class="custom-select form-control @error('ruanglingkup_kelompokukur') is-invalid @enderror" name="ruanglingkup_kelompokukur" >
                                                            <option value="{{$ruanglingkup->ruanglingkup_kelompokukur}}">{{$ruanglingkup->ruanglingkup_kelompokukur}}</option>
                                                            <option value="kelistrikan">Kelistrikan</option>
                                                            <option value="frekuensi dan Waktu">Frekuensi & waktu</option>
                                                            <option value="fiber optic">Fiber Optic</option>
                                                        </select>
													</div>
													@error('ruanglingkup_kelompokukur')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
                                                <div class="form-group row">
													<label  class="col-2 col-form-label">Instrument yang dikalibrasi</label>
													<div class="col-8">
														<input class="form-control @error('ruanglingkup_instrument') is-invalid @enderror" name="ruanglingkup_instrument"  type="text" value="{{$ruanglingkup->ruanglingkup_instrument}}" id="example-text-input"/>
													</div>
													@error('ruanglingkup_instrument')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												<div class="form-group row">
													<label  class="col-2 col-form-label">Frekuensi</label>
													<div class="col-6">
                                                        <textarea class="form-control @error('ruanglingkup_frekuensi') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_frekuensi" rows="7">{{$ruanglingkup->ruanglingkup_frekuensi}}</textarea>
													</div>
                                                    @error('ruanglingkup_frekuensi')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
                                                <div class="form-group row">
													<label  class="col-2 col-form-label">Rentang Ukur</label>
													<div class="col-6">
                                                        <textarea class="form-control @error('ruanglingkup_rentangukur') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_rentangukur" rows="7">{{$ruanglingkup->ruanglingkup_rentangukur}}</textarea>
													</div>
                                                    @error('ruanglingkup_rentangukur')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
                                                <div class="form-group row">
													<label  class="col-2 col-form-label">Ketidakpastian</label>
													<div class="col-6">
                                                        <textarea class="form-control @error('ruanglingkup_ketidakpastian') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_ketidakpastian" rows="7">{{$ruanglingkup->ruanglingkup_ketidakpastian}}</textarea>
													</div>
                                                    @error('ruanglingkup_ketidakpastian')
														<div class="alert alert-danger mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												
												</div>
												</div>
												<div class="card-footer">
												<div class="row">
													<div class="col-2">
													</div>
													<div class="col-10">
													<button type="submit" class="btn btn-success mr-2">Publish</button>
													<button type="reset" class="btn btn-secondary">Batal</button>
													</div>
												</div>
											</div>
                                        </form>
                                        @endforeach
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>

						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
                    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">Buatan anak bangsa dengan <i class="fa la-heart text-danger mr-5"></i></span>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
                                <span class="text-muted font-weight-bold mr-2">Copyright © 2020</span> Awanlab, All rights reserved.
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<!--end::Demo Panel-->
		
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/plugins/global/plugins.bundle.js?v=7.1.7"></script>
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.7"></script>
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/js/scripts.bundle.js?v=7.1.7"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<!-- <script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/js/pages/crud/forms/widgets/autosize.js?v=7.1.7"></script> -->
		<script src="../../../halamanadmin/js/pages/crud/ktdatatable/base/html-table.js?v=7.1.7"></script>
		<!--end::Page Scripts-->


	</body>
	<!--end::Body-->
	<script src='../../../halamanadmin/js/autosize.js'></script>
	<script>
		autosize(document.querySelectorAll('textarea'));
	</script>
</html>