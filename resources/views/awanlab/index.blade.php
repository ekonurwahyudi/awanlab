
@extends('awanlab/master')
@section('judul_halaman', 'Dashboard')
@section('konten')
			<div class="d-flex flex-column-fluid">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Dashboard-->
					<!--begin::Row-->
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
										     @if($order->order_status != "")
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
												<td width="130px"><span class="label label-light-danger label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
												<td >{{$order->created_at}}</td>
												<td><button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-list-ul"></i>Detail</button></td>
											</tr>
											  @endif
											@endif
										@endforeach
										</tbody>
										<!-- Modal-->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Detail order</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<i aria-hidden="true" class="ki ki-close"></i>
														</button>
													</div>
													<div class="modal-body">
														...
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
													</div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>
						</div>
					</div>
				<!--end::Container-->
				</div>
				</div>
			<!--end::Entry-->
		</div>
		<!--end::Content-->
		<!--begin::Footer-->
@endsection