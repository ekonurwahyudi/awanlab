
@extends('awanlab/pengaturan-web/master')
@section('judul_halaman', 'Pengaturan Web Kalibrasi')
@section('konten')
<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									
									<div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                                        <!--begin::List Widget 8-->
                                        <div class="card card-custom">
									<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h5 class="card-label">Halaman Kritik & Saran</h5>
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table  class="table table-bordered table-checkable" id="order-listing">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>Nama Perusahaan</th>
													<th>Lab Kalibrasi</th>
                                                    <th>Kritik & Saran</th>
												</tr>
											</thead>
											<tbody>
											@php $no = 1; @endphp
											@foreach ($feedback as $feedback)
												<tr>
													<td>{{$no++}}</td>
													<td>{{$feedback->feedback_nama}}</td>
                                                    <td>{{$feedback->feedback_perusahaan}}</td>
                                                    <td>{{$feedback->feedback_lab}}</td>
                                                    <td>{{$feedback->feedback_pesan}}</td>
												</tr>
											
											@endforeach
											</tbody>
										</table>
										
										<!--end: Datatable-->
									</div>
                                </div>
                                <br/>
										
										<!--end::List Widget 8-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
		<!--end::Content-->
		<!--begin::Footer-->
@endsection