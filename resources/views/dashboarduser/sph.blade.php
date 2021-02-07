@extends('/dashboarduser/master')
@section('konten')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-8">
										<!--begin::Nav Panel Widget 1-->
										<div class="card card-custom gutter-b card-stretch card-shadowless">
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Nav Tabs-->
												<ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
														<a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/dashboard">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
																			<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bold text-center">Riwayat Order</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/dashboard-order">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																			<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Order Kalibrasi</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/dashboard-profil">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Movie-Lane2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Edit Profil</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" target="_blank" href="https://web.whatsapp.com/send?phone=+628987088921&text=Halo,%20saya%20{{Auth::user()->name}}%20perlu%20bantuan">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Communication/Group.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Customer Support</span>
														</a>
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav Tabs-->
												<!--begin::Nav Content-->
												<div class="tab-content m-0 p-0">
													<div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel"></div>
													<div class="tab-pane" id="forms_widget_tab_2" role="tabpanel"></div>
													<div class="tab-pane" id="forms_widget_tab_3" role="tabpanel"></div>
													<div class="tab-pane" id="forms_widget_tab_4" role="tabpanel"></div>
													<div class="tab-pane" id="forms_widget_tab_6" role="tabpanel"></div>
												</div>
												<!--end::Nav Content-->
											</div>
											<!--end::Body-->
										</div>
										<!--begin::Nav Panel Widget 1-->
									</div>
									<div class="col-xl-4">
										<!--begin::Engage Widget 8-->
										<div class="card card-custom gutter-b card-stretch card-shadowless">
											<div class="card-body p-0 d-flex">
												<div class="d-flex align-items-start justify-content-start flex-grow-1 bg-light-warning p-8 card-rounded flex-grow-1 position-relative">
													<div class="d-flex flex-column align-items-start flex-grow-1 h-100">
														<div class="p-1 flex-grow-1">
															<h4 class="text-warning font-weight-bolder">Waspada Covid</h4>
															<p class="text-dark-50 font-weight-bold mt-3">Selalu menjaga 5M</p>
														</div>
														<a target="_blank" href='https://www.bing.com/covid/local/indonesia?vert=graph' class="btn btn-link btn-link-warning font-weight-bold">Penyebaran Covid-19
														<span class="svg-icon svg-icon-lg svg-icon-warning">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span></a>
													</div>
													<div class="position-absolute right-0 bottom-0 mr-1 overflow-hidden">
														<img src="../halamanuser/media/svg/humans/covid.png" class="max-h-100px max-h-xl-175px mb-n9" alt="" />
													</div>
												</div>
											</div>
										</div>
										<!--end::Engage Widget 8-->
									</div>
								</div>
								<!--end::Subheader-->
								<!--begin::Entry-->
								<div class="d-flex flex-column-fluid">
									<!--begin::Container-->
									<div class="container">
									<!-- Halaman Surat Penawaran Harga (SPH) -->
										<div class="card card-custom">
											<div class="card-header flex-wrap py-5">
												<div class="card-title">
													<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
														<span class="svg-icon svg-icon-danger svg-icon-2x">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/Flatten.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 23 23" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="30" height="30"/>
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
															<!--end::Svg Icon-->
														</span>&nbsp;Surat Penawaran Harga & Purchase Order</h2>
												</div>
												<div class="card-toolbar">
													<!--begin::Dropdown-->
													<div class="mr-2">
														<a href="/dashboard"><button type="button" class="btn btn-success font-weight-bolder">
														<span class="svg-icon svg-icon-light-white svg-icon-md">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/PenAndRuller.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                                                </g>
															</svg>
															<!--end::Svg Icon-->
														</span>Kembali</button></a>
													</div>
												</div>
                                            </div>
											<div class="card-body">
												<!--begin: Datatable-->
												<table  class="table table-bordered table-checkable" id="order-listing">
													<thead>
														<tr>
															<th>Detail Alat</th>
															<th>SPH</th>
															<th>PO</th>
														</tr>
													</thead>
													<tbody>
													
													@if ($count >= 1)
														<tr>
															<td width="230px">
															@php $no = 1; @endphp
															@foreach ($orders as $order)
															@php $noid = $order->order_id; @endphp
															@php $filesph ="" @endphp
															@if(Auth::user()->id == $order->user_id )
																	@if($order->order_status != "")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "")
                                                                               @if($order->order_filesph != "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;No.CCL: </b>{{$order->order_ccl}} <br><br>
																<b>@php $filesph = $order->order_filesph @endphp</b>
																				@endif
																			@endif
																		@endif
																	@endif
																@endif
																<form action="/status-sph-{{$order->user_id}}" method="POST">
																@csrf
																@endforeach
															</td>
                                                            <td style="text-align:center;">
                                                                <a  href="/storage/sph/{{$filesph}}"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i>Lihat SPH</button></a><br><br>
                                                                <div class="row">
																	<div class="col-8">
																	<input type="hidden" name="order_filesph" value="{{$filesph}}" >
																	<select name="order_statussph" id="" class="form-control" onchange="statussph(this);">
																		<option selected disabled>Pilih Status</option>
																		<option value="diterima">Diterima</option>
																		<option value="ditolak">Ditolak</option>
																	</select>
																	<br>
																	<div id="jika-ditolak" style="display: none;" >
																		<textarea class="form-control" name="alasansph"cols="3" placeholder="Alasan ditolak?" rows="3"></textarea>
																	</div>
																	</div>
																	<div class="col-4">
																	<button type="submit" class="btn btn-success btn-sm">Update</button>
																	</div>
																</div>
																</form>
                                                            </td>
                                                            <td>
                                                                <b style="color:red;">Mohon Menunggu</b>
                                                            </td>
														</tr>
														@endif
														@if ($count2 >= 1)
														<tr>
															<td width="230px">
															@php $no = 1; @endphp
															@foreach ($orders as $order)
															@php $noid = $order->order_id; @endphp
															@if(Auth::user()->id == $order->user_id )
																	@if($order->order_status != "")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "ditolak")
                                                                               @if($order->order_filesph != "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;No.CCL: </b>{{$order->order_ccl}} <br><br>
																<b>@php $revisisph = $order->order_filesph @endphp</b>
																				@endif
																			@endif
																		@endif
																	@endif
																@endif
																@endforeach
															</td>
                                                            <td style="text-align:center;">
																<b style="color:red;">Sedang Direvisi</b>
                                                            </td>
                                                            <td>
                                                                <b style="color:red;">Mohon Menunggu</b>
                                                            </td>
														</tr>
														@endif
														@if ($count3 >= 1)
														<tr>
															<td width="230px">
															@php $no = 1; @endphp
															@foreach ($orders as $order)
															@php $noid = $order->order_id; @endphp
															@if(Auth::user()->id == $order->user_id )
																	@if($order->order_status != "")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "diterima")
                                                                               @if($order->order_po == "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;No.CCL: </b>{{$order->order_ccl}} <br><br>
																<b>@php $revisisph = $order->order_filesph @endphp</b>
																				@endif
																			@endif
																		@endif
																	@endif
																@endif
																<form action="/input-po-{{$order->user_id}}" method="post" enctype="multipart/form-data">
																@csrf
																@endforeach
															</td>
                                                            <td style="text-align:center;">
																<b style="color:red;">Diterima</b>
                                                            </td>
                                                            <td>
																	<div class="custom-file">
																		<input type="hidden" name="order_namaperusahaan" value="{{Auth::user()->nama_perusahaan}}">
																		<input type="file" name="order_filepo" class="custom-file-input" id="customFile"/>
																		<label class="custom-file-label" for="customFile">Pilih file Purchase Order (Jika ada)</label>
																	</div>
																	<div class="col-4">
																	<button type="submit" class="btn btn-success btn-sm">Update</button>
																	</div>
																</form>
                                                            </td>
														</tr>
														@endif
													</tbody>
												</table>
												<!--end: Datatable-->
											</div>
										</div>

										
										<!--end::Card-->
									</div>
									<!--end::Container-->
								</div>
								
								<!--end::Row-->
								<!--begin::Row-->
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection