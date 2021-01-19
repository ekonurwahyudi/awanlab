
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
											<h5 class="card-label">
											<span class="svg-icon menu-icon mr-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>Data User</h5>
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