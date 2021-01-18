
@extends('awanlab/master')
@section('judul_halaman', 'Pengaturan Master user')
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
											<h5 class="card-label">Data User</h5>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
                                            <a href="/tambah-user" class="btn btn-danger font-weight-bold mr-2">
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
												</span>Tambah User</a>
											<!--end::Dropdown-->
											<!--begin::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table  class="table table-bordered table-checkable" id="order-listing">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Lengkap</th>
                                                    <th>No. Hp</th>
													<th>Role User</th>
													<th>Lokasi Kerja</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											@php $no = 1; @endphp
                                            @foreach ($users as $user)
												<tr>
													<td>{{$no++}}</td>
													<td>{{$user->name}}</td>
                                                    <td>{{$user->no_hp}}</td>
													@php $roleuser = $user->roleuser->role_id; @endphp
													@if( $roleuser == 1)
                                                    <td>Super admin</td>
													@elseif($roleuser == 2)
													<td>Customer</td>
													@elseif($roleuser == 3)
													<td>Cunstomer Service</td>
													@elseif($roleuser == 4)
													<td>Koordinator Teknik</td>
													@elseif($roleuser == 5)
													<td>Teknisi</td>
													@elseif($roleuser == 6)
													<td>Admin</td>
													@endif
                                                    <td>{{$user->lokasi_kerja}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <th>{{$user->alamat}}</th>
													<td width="70px">
														<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/hapus-user/{{$user->id}}" method="POST">
															<a href="/edit-user/{{$user->id}}"  class="btn btn-icon btn-success btn-sm"><i class="flaticon-edit-1"></i></a>
															@csrf
															<button type="submit" class="btn btn-icon btn-danger btn-sm"><i class="flaticon-delete"></i></button>
														</form>
													</td>
													
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