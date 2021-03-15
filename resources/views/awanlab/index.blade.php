
@extends('awanlab/master')
@section('judul_halaman', 'Dashboard')
@section('konten')
			<div class="d-flex flex-column-fluid">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Dashboard-->
					<!--begin::Row-->
					<div class="row">
						<div class="col-xl-3">
							<!--begin::Stats Widget 29-->
							<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(/metronic/theme/html/demo1/dist/assets/media/svg/shapes/abstract-1.svg)">
								<!--begin::Body-->
								<div class="card-body">
									<div class="row">
									  <div class="col-5 mt-2">
										<span class="svg-icon svg-icon-4x svg-icon-info ml-2">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									  </div>
									  <div class="col-7">
									 		<span class="font-weight-bold text-dark font-size-sm">Total Order</span>
											@if(count($on_labjakarta) < 1)
											<span class="card-title font-weight-bolder text-dark font-size-h2 mb-0 text-hover-primary d-block">0/{{count($labjakarta)}}</span>
											@else
											<span class="card-title font-weight-bolder text-dark font-size-h2 mb-0 text-hover-primary d-block">{{count($on_labjakarta)}}/{{count($labjakarta)}}</span>
											@endif
											<span class="font-weight-bold text-dark font-size-sm">Lab Jakarta</span>
									  </div>
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 29-->
						</div>
						<div class="col-xl-3">
							<!--begin::Stats Widget 30-->
							<div class="card card-custom bg-info card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<div class="row">
									  <div class="col-5 mt-2">
										<span class="svg-icon svg-icon-4x svg-icon-white ml-2">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									  </div>
									  <div class="col-7">
									  		<span class="font-weight-bold text-white font-size-sm">Total Order</span>
											@if(count($on_labsurabaya) < 1)
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">0/{{count($labsurabaya)}}</span>
											@else
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">{{count($on_labsurabaya)}}/{{count($labsurabaya)}}</span>
											@endif
											<span class="font-weight-bold text-white font-size-sm">Lab Surabaya</span>
									  </div>
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 30-->
						</div>
						<div class="col-xl-3">
							<!--begin::Stats Widget 31-->
							<div class="card card-custom bg-danger card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<div class="row">
									  <div class="col-5 mt-2">
										<span class="svg-icon svg-icon-4x svg-icon-white ml-2">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									  </div>
									  <div class="col-7">
									 		<span class="font-weight-bold text-white font-size-sm">Total Order</span>
											@if(count($on_labmedan) < 1)
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">0/{{count($labmedan)}}</span>
											@else
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">{{count($on_labmedan)}}/{{count($labmedan)}}</span>
											@endif
											<span class="font-weight-bold text-white font-size-sm">Lab Medan</span>
									  </div>
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 31-->
						</div>
						<div class="col-xl-3">
							<!--begin::Stats Widget 32-->
							<div class="card card-custom bg-dark card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<div class="row">
									  <div class="col-5 mt-2">
										<span class="svg-icon svg-icon-4x svg-icon-white ml-2">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									  </div>
									  <div class="col-7">
									 		<span class="font-weight-bold text-white font-size-sm">Total Order</span>
											@if(count($on_labmakassar) < 1)
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">0/{{count($labmakassar)}}</span>
											@else
											<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 text-hover-primary d-block">{{count($on_labmakassar)}}/{{count($labmakassar)}}</span>
											@endif
											<span class="font-weight-bold text-white font-size-sm">Lab Makassar</span>
									  </div>
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 32-->
						</div>
					</div>
					<div class="row">
						
						<div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
							<div class="card card-custom">
								<div class="card-header flex-wrap py-5">
									<div class="card-title">
										<h3 class="d-flex align-items-center text-dark font-weight-bold my-1">
										<span class="svg-icon svg-icon-danger svg-icon-2x">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Address-card.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M7,15 C7.55228475,15 8,15.4477153 8,16 C8,16.5522847 7.55228475,17 7,17 L6,17 C4.34314575,17 3,15.6568542 3,14 L3,7 C3,5.34314575 4.34314575,4 6,4 L18,4 C19.6568542,4 21,5.34314575 21,7 L21,14 C21,15.6568542 19.6568542,17 18,17 L17,17 C16.4477153,17 16,16.5522847 16,16 C16,15.4477153 16.4477153,15 17,15 L18,15 C18.5522847,15 19,14.5522847 19,14 L19,7 C19,6.44771525 18.5522847,6 18,6 L6,6 C5.44771525,6 5,6.44771525 5,7 L5,14 C5,14.5522847 5.44771525,15 6,15 L7,15 Z" fill="#000000" fill-rule="nonzero"/>
															<polygon fill="#000000" opacity="0.3" points="8 20 16 20 12 15"/>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>&nbsp;Monitoring Order</h3>
									</div>
								</div>
								<div class="card-body">
									<!--begin: Datatable-->
									<table  class="table table-bordered table-checkable" id="order-listing">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama Customer</th>
												<th>Detail Alat</th>
												<th>No. Order</th>
												<th>Status</th>
												<th>Tanggal Order</th>
												<th>Detail</th>
											</tr>
										</thead>
										<tbody>
										@php $no = 1; @endphp
										@foreach ($orders as $order)
										  @if($order->order_status != "selesai")
											<tr>
												<td>{{$no++}}</td>
												<td width="200px">
													<b>Perusahaan :</b> {{$order->user->nama_perusahaan}}<br>
													<b>Nama :</b> {{$order->user->name}} <br>
													<b>No.Hp :</b> {{$order->user->no_hp}} <br>
												</td>
												<td width="200px">
													<b>Nama Alat: </b>{{$order->order_namaalat}}<br>
													<b>Merek: </b>{{$order->order_merek}}<br>
													<b>Model: </b>{{$order->order_model}}<br>
													<b>Lokasi Lab: </b>
													@if($order->order_lokasilab == "Lab Jakarta")
													<span class="label label-light-danger label-inline font-weight-normal mr-2">Lab Jakarta</span><br><br>
													@elseif($order->order_lokasilab == "Lab Medan")
													<span class="label label-light-warning label-inline font-weight-normal mr-2">Lab Medan</span><br><br>
													@elseif($order->order_lokasilab == "Lab Surabaya")
													<span class="label label-light-success label-inline font-weight-normal mr-2">Lab Surabaya</span><br><br>
													@elseif($order->order_lokasilab == "Lab Makassar")
													<span class="label label-light-info label-inline font-weight-normal mr-2">Lab Makassar</span><br><br>
													@endif
												</td>
												<td width="130px">{{$order->order_ccl}}</td>
												@if($order->order_status == "orderan baru")
												<td width="130px"><span class="label label-success label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
												@else
												<td width="130px"><span class="label label-danger label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
												@endif
												<td >{{$order->created_at}}</td>
												<td><button class="btn btn-outline-warning btn-sm edit"
												data-perusahaan="{{$order->user->nama_perusahaan}}"
												data-namalengkap="{{$order->user->name}}"
												data-hp="{{$order->user->no_hp}}"
												data-email="{{$order->user->email}}"
												data-alamat="{{$order->user->alamat}}"
												data-nomor_order="{{$order->order_ccl}}"
												data-nama_alat="{{$order->order_namaalat}}"
												data-nomor_order="{{$order->order_ccl}}"
												data-merek="{{$order->order_merek}}"
												data-model="{{$order->order_model}}"
												data-sn="{{$order->order_sn}}"
												data-lokasi_lab="{{$order->order_lokasilab}}"
												data-jeniskal="{{$order->order_jeniskal}}"
												data-nama_sertifikat="{{$order->order_namaser}}"
												data-alamat_sertifikat="{{$order->order_alamatser}}"
												data-status="{{$order->order_status}}"
												data-teknisi="{{$order->order_teknisi}}"
												data-tglorder="{{$order->order_tglantar}}">
												<i class="fas fa-list-ul"></i>Detail</button></td>
											</tr>
											@endif
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				<!--end::Container-->
					<!-- Modal Detail Alat -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Detail order</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i aria-hidden="true" class="ki ki-close"></i>
									</button>
								</div>
								<div class="modal-body table-responsive">
									<div class="row">
										<div class="col-6">
										<h5>Data Customer</h5>
										<table class="table table-bordered table-checkable">
											<tbody>
												<tr>
													<td><b>Nama Perusahaan</b></td>
													<td><span id="perusahaan"></span></td>
												</tr>
												<tr>
													<td><b>Nama Lengkap</b></td>
													<td><span id="namalengkap"></span></td>
												</tr>
												<tr>
													<td><b>Nomor HP</b></td>
													<td><span id="hp"></span></td>
												</tr>
												<tr>
													<td><b>Email</b></td>
													<td><span id="email"></span></td>
												</tr>
												<tr>
													<td><b>Alamat</b></td>
													<td><span id="alamat"></span></td>
												</tr>
											</tbody>
										</table>
										</div>
										<div class="col-6">
										<h5>Detail Alat</h5>
										<table class="table table-bordered table-checkable">
											<tbody>
												<tr>
													<td><b>Nomor Order</b></td>
													<td><span id="nomor_order"></span></td>
												</tr>
												<tr>
													<td><b>Nama Alat</b></td>
													<td><span id="nama_alat"></span></td>
												</tr>
												<tr>
													<td><b>Merek</b></td>
													<td><span id="merek"></span></td>
												</tr>
												<tr>
													<td><b>Model</b></td>
													<td><span id="model"></span></td>
												</tr>
												<tr>
													<td><b>S/N</b></td>
													<td><span id="sn"></span></td>
												</tr>
												<tr>
													<td><b>Nama Sertifikat</b></td>
													<td><span id="nama_sertifikat"></span></td>
												</tr>
												<tr>
													<td><b>Alamat Sertifikat</b></td>
													<td><span id="alamat_sertifikat"></span></td>
												</tr>
												<tr>
													<td><b>Lokasi Lab</b></td>
													<td><span id="lokasi_lab" class="label label-light-warning label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Jenis Kalibrasi</b></td>
													<td><span id="jeniskal" class="label label-light-success label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Status</b></td>
													<td><span id="status" class="label label-light-danger label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Teknisi</b></td>
													<td><span id="teknisi"></span></td>
												</tr>
												<tr>
													<td><b>Tgl Order</b></td>
													<td><span id="tglorder"></span></td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			<!--end::Entry-->
		</div>
		<!-- <script type="text/javascript">
		$(document).ready(function(){
			$('#set_dtl').on('click', function (){
				$('#exampleModal').modal('show');
				var order_namaalat = $(this).attr('data-order')
				$('#order_namaalat').text(order_namaalat)
				alert(order);
			})
		})
		</script> -->

		<script type="text/javascript">
		$('.edit').click(function(){
			$('#exampleModal').modal();
			var namalengkap = $(this).attr('data-namalengkap')
			var hp = $(this).attr('data-hp')
			var perusahaan = $(this).attr('data-perusahaan')
			var email = $(this).attr('data-email')
			var alamat = $(this).attr('data-alamat')
			var nama_alat = $(this).attr('data-nama_alat')
			var nomor_order = $(this).attr('data-nomor_order')
			var model = $(this).attr('data-model')
			var merek = $(this).attr('data-merek')
			var sn = $(this).attr('data-sn')
			var lokasi_lab = $(this).attr('data-lokasi_lab')
			var jeniskal = $(this).attr('data-jeniskal')
			var nama_sertifikat = $(this).attr('data-nama_sertifikat')
			var alamat_sertifikat = $(this).attr('data-alamat_sertifikat')
			var status = $(this).attr('data-status')
			var teknisi = $(this).attr('data-teknisi')
			var tglorder = $(this).attr('data-tglorder')
			$('#namalengkap').text(namalengkap)
			$('#hp').text(hp)
			$('#perusahaan').text(perusahaan)
			$('#email').text(email)
			$('#alamat').text(alamat)
			$('#nomor_order').text(nomor_order)
			$('#nama_alat').text(nama_alat)
			$('#model').text(model)
			$('#merek').text(merek)
			$('#sn').text(sn)
			$('#lokasi_lab').text(lokasi_lab)
			$('#jeniskal').text(jeniskal)
			$('#nama_sertifikat').text(nama_sertifikat)
			$('#alamat_sertifikat').text(alamat_sertifikat)
			$('#status').text(status)
			$('#teknisi').text(teknisi)
			$('#tglorder').text(tglorder)
		})
		</script>

@endsection