@extends('awanlab/pengaturan-web/master')
@section('judul_halaman', 'Pengaturan Web Kalibrasi')
@section('konten')
	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<!--end::Notice-->
								<!--begin::Card-->
									<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h5 class="card-label">Halaman Ruang Lingkup</h5>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
                                            <a href="/pengaturan/tambah-ruanglingkup" class="btn btn-danger font-weight-bold mr-2">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Address-card.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"/>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															</g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>Tambah Ruang Lingkup</a>
													
											<!--end::Dropdown-->
											<!--begin::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">
													<div class="row align-items-left">
														<div class="col-md-4 my-2 my-md-0">
															<div class="d-flex align-items-right">
																<!-- <label class="mr-3 mb-0 d-none d-md-block">Lokasi:</label> -->
																<select class="form-control" id="kt_datatable_search_lokasi">
																	<option value="">Lokasi Lab (Semua)</option>
																	<option value="1">Jakarta</option>
																	<option value="2">Medan</option>
																	<option value="3">Surabaya</option>
																	<option value="4">Makassar</option>
																</select>
															</div>
														</div>
														<div class="col-md-6 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
														<!-- <div class="col-md-2 my-2 my-md-0">
															<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
														</div> -->
													</div>
												</div>
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="datatable-bordered datatable-head-custom" id="kt_datatable">
											<thead>
												<tr>
													<th>Lokasi</th>
													<th>Kelompok pengukuran</th>
													<th>Instrument yang dikalibrasi</th>
													<th>Frekuensi</th>
													<th>Rentang Ukur</th>
													<th>Ketidakpastian</th>
													<th>Aksi</th>

												</tr>
											</thead>
											<tbody>
											@foreach ($ruanglingkups as $ruanglingkup)
												<tr>
													<td class="text-right">{{$ruanglingkup->ruanglingkup_lokasi}}</td>
													<td>{{$ruanglingkup->ruanglingkup_kelompokukur}}</td>
													<td>{{$ruanglingkup->ruanglingkup_instrument}}</td>
													<td ><textarea style="border-style: none; background-color: white;" disabled="disabled" >{{$ruanglingkup->ruanglingkup_frekuensi}}</textarea></td>
													<td><textarea style="border-style: none; background-color: white; " disabled="disabled" >{{$ruanglingkup->ruanglingkup_rentangukur}}</textarea></td>
													<td><textarea style="border-style: none; background-color: white; " disabled="disabled">{{$ruanglingkup->ruanglingkup_ketidakpastian}}</textarea></td>
													<td><a href="/pengaturan/ruanglingkup-edit/{{$ruanglingkup->ruanglingkup_id}}" class="btn btn-icon btn-success btn-sm"><i class="flaticon-edit"></i></a>
													<a href="/pengaturan/ruanglingkup-hapus/{{$ruanglingkup->ruanglingkup_id}}" class="btn btn-icon btn-danger btn-sm"><i class="flaticon-delete"></i></a></td>
												</tr>
											@endforeach
											</tbody>
										</table>
										
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>

						<!--end::Entry-->
					</div>
@endsection