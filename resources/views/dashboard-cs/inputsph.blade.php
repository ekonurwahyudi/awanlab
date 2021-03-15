@extends('/dashboard-cs/master')
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
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/dashboard-cs">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000"/>
                                                                            <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3"/>
                                                                            <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) "/>
                                                                        </g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bold text-center">Order Masuk</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
														<a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/order-diproses">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero"/>
																			<path d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																			<path d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z" fill="#000000" fill-rule="nonzero"/>
																			<path d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z" fill="#000000" fill-rule="nonzero"/>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Order di Proses</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_3">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Movie-Lane2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000"/>
                                                                            <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3"/>
                                                                            <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) "/>
                                                                        </g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Order Masuk Telkom</span>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
														<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" href="/riwayat-order">
															<span class="nav-icon py-2 w-auto">
																<span class="svg-icon svg-icon-3x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Communication/Group.svg-->
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
															<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Riwayat Order</span>
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
														<a href='#' class="btn btn-link btn-link-warning font-weight-bold">Penyebaran Covid-19
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
										<!--begin::Notice-->
										
										<!--end::Notice-->
										<!-- Input SPH -->
										<div class="card card-custom">
											<div class="card-header flex-wrap py-5">
												<div class="card-title">
													<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
														<span class="svg-icon svg-icon-danger svg-icon-2x">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/Flatten.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 23 23" version="1.1">
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
															<!--end::Svg Icon-->
														</span>&nbsp;Input Surat Penawaran Harga</h2>
												</div>
												<div class="card-toolbar">
													<!--begin::Dropdown-->
													<div class="mr-2">
														<a href="/order-diproses"><button type="button" class="btn btn-success font-weight-bolder">
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
															<th>Data Customer</th>
                                                            <th>Status SPH</th>
															<th>Input SPH {{$count}}</th>
														</tr>
													</thead>
													<tbody>
                                                    @if ($count >= 1)
                                                    <tr>
															<td width="300px">
                                                                @foreach ($users as $user)
                                                                <b>Nama :</b> {{$user->name}} <br>
                                                                <b>No.Hp :</b> {{$user->no_hp}} <br>
                                                                <b>Email :</b> {{$user->email}} <br>
                                                                <b>Perusahaan :</b> {{$user->nama_perusahaan}} <br>
                                                                <b>Alamat :</b> {{$user->alamat}}
                                                                <br>
                                                                @endforeach
                                                                <br><h6  style="color:red;">Detail Alat</h6>
                                                                @php $no= 1; @endphp
                                                                @foreach ($orders as $order)
                                                                @if(Auth::user()->lokasi_kerja == $order->order_lokasilab)
                                                                    @if($order->order_status != "orderan baru")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "")
                                                                                @if($order->order_filesph == "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;No.Order: </b>{{$order->order_ccl}} <br><br>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                <form action="/proses-inputsph/{{$order->user_id}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            @endforeach
                                                            </td>
                                                            <td style="text-align:center; vertical-align: middle;"><b>Belum ada</b></td>
                                                            <td style="vertical-align: middle;">
                                                                <div class="custom-file">
                                                                    @foreach ($users as $user)
                                                                    <input type="hidden" name="order_namaperusahaan" value="{{$user->nama_perusahaan}}">
                                                                    @endforeach
                                                                    <input type="file" name="order_filesph" class="custom-file-input" id="customFile"/>
                                                                    <label class="custom-file-label" for="customFile">Pilih file surat penawaran harga (SPH)</label>
                                                                </div>
                                                                <br>
                                                                <button type="submit" class="btn btn-danger btn-sm">Upload SPH</button>
                                                            </form>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endif
                                                    @if ($count3 >= 1)
                                                    <tr>
															<td width="300px">
                                                                @foreach ($users as $user)
                                                                <b>Nama :</b> {{$user->name}} <br>
                                                                <b>No.Hp :</b> {{$user->no_hp}} <br>
                                                                <b>Email :</b> {{$user->email}} <br>
                                                                <b>Perusahaan :</b> {{$user->nama_perusahaan}} <br>
                                                                <b>Alamat :</b> {{$user->alamat}}
                                                                <br>
                                                                @endforeach
                                                                <br><h6  style="color:red;">Detail Alat</h6>
                                                                @php $no= 1; @endphp
                                                                @foreach ($orders as $order)
                                                                @if(Auth::user()->lokasi_kerja == $order->order_lokasilab)
                                                                    @if($order->order_status != "orderan baru")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "")
                                                                               @if($order->order_filesph != "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;No.CCL: </b>{{$order->order_ccl}} <br><br>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                <form action="/proses-inputsph/{{$order->user_id}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            @endforeach
                                                            </td>
                                                            <td colspan="2" style="text-align:center; vertical-align: middle;"><b style="color:red;">Sedang diproses</b></td>
                                                    </tr>
                                                    @endif
													</tbody>
												</table>
												<!--end: Datatable-->
											</div>
										</div>
                                        <br>

                                        <!-- Input REVISI SPH -->
										<div id="revisi" class="card card-custom" >
											<div class="card-header flex-wrap py-5">
												<div class="card-title">
													<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
														<span class="svg-icon svg-icon-danger svg-icon-2x">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/Flatten.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 23 23" version="1.1">
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
															<!--end::Svg Icon-->
														</span>&nbsp;Input <b style="color:red;">&nbsp;(REVISI)&nbsp;</b> Surat Penawaran Harga</h2>
												</div>

											</div>
								
											<div class="card-body" >
												<!--begin: Datatable-->
												<table  class="table table-bordered table-checkable" id="order-listing2">
													<thead>
														<tr>
															<th>Data Customer</th>
                                                            <th>Status SPH</th>
															<th>Input SPH {{$count2}}</th>
														</tr>
													</thead>
													<tbody>
                                                    @if ($count2 >= 1)
                                                    <tr>
															<td width="300px">
                                                                @foreach ($users as $user)
                                                                <b>Nama :</b> {{$user->name}} <br>
                                                                <b>No.Hp :</b> {{$user->no_hp}} <br>
                                                                <b>Email :</b> {{$user->email}} <br>
                                                                <b>Perusahaan :</b> {{$user->nama_perusahaan}} <br>
                                                                <b>Alamat :</b> {{$user->alamat}}
                                                                <br>
                                                                @endforeach
                                                                <br><h6  style="color:red;">Detail Alat</h6>
                                                                @php $no= 1; @endphp
                                                                @foreach ($orders as $order)
                                                                @if(Auth::user()->lokasi_kerja == $order->order_lokasilab)
                                                                    @if($order->order_status != "orderan baru")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_statussph == "ditolak")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;No.Order: </b>{{$order->order_ccl}} <br><br>
																<b>@php $alasan = $order->order_alasansph @endphp</b>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                <form action="/proses-revisisph/{{$order->user_id}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            @endforeach
                                                            </td>
                                                            <td style="text-align:center;">
																<b style="color:red;">Ditolak</b><br>
																Alasannya : {{$alasan}}
															</td>
                                                            <td>
                                                                <div class="custom-file">
																@foreach ($users as $user)
                                                                    <input type="hidden" name="order_namaperusahaan" value="{{$user->nama_perusahaan}}">
                                                                    @endforeach
                                                                    <input type="file" name="order_filesph" class="custom-file-input" id="customFile"/>
                                                                    <label class="custom-file-label" for="customFile">Pilih file surat penawaran harga (SPH)</label>
                                                                </div>
                                                                <br>
                                                                <button type="submit" class="btn btn-danger btn-sm">Update SPH</button>
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

										<br>
										<!-- Purchase Order (PO) -->
										<div id="po" class="card card-custom">
											<div class="card-header flex-wrap py-5">
												<div class="card-title">
													<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
														<span class="svg-icon svg-icon-danger svg-icon-2x">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/Flatten.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 23 23" version="1.1">
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
															<!--end::Svg Icon-->
														</span>&nbsp;Purchase Order (PO)</h2>
												</div>

											</div>
								
											<div class="card-body">
												<!--begin: Datatable-->
												<table  class="table table-bordered table-checkable" id="order-listing3">
													<thead>
														<tr>
															<th>Data Customer</th>
                                                            <th>Purchase Order</th>
														</tr>
													</thead>
													<tbody>
													@if ($count4 >= 1)
                                                    <tr>
															<td width="300px">
                                                                @foreach ($users as $user)
                                                                <b>Nama :</b> {{$user->name}} <br>
                                                                <b>No.Hp :</b> {{$user->no_hp}} <br>
                                                                <b>Email :</b> {{$user->email}} <br>
                                                                <b>Perusahaan :</b> {{$user->nama_perusahaan}} <br>
                                                                <b>Alamat :</b> {{$user->alamat}}
                                                                <br>
                                                                @endforeach
                                                                <br><h6  style="color:red;">Detail Alat</h6>
                                                                @php $no= 1; @endphp
                                                                @foreach ($orders as $order)
                                                                @if(Auth::user()->lokasi_kerja == $order->order_lokasilab)
                                                                    @if($order->order_status != "orderan baru")
                                                                        @if($order->order_status != "selesai")
                                                                            @if($order->order_filepo != "")
																<b>{{$no++}}. Nama Alat: </b>{{$order->order_namaalat}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Merek: </b>{{$order->order_merek}}<br>
																<b>&nbsp;&nbsp;&nbsp;&nbsp;Model: </b>{{$order->order_model}}<br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;S/N: </b>{{$order->order_sn}} <br>
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp;No.Order: </b>{{$order->order_ccl}} <br><br>
																@php $filepo = $order->order_filepo @endphp
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            </td>
                                                            <td style="text-align:center;">
																<a  href="/storage/PO/{{$filepo}}"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i>Lihat PO</button></a><br><br>
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