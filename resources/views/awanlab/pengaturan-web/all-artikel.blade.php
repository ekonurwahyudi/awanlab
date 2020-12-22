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
											<h5 class="card-label">Halaman Artikel & Blog</h5>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
                                            <a href="{{route('artikel.create')}}" class="btn btn-danger font-weight-bold mr-2">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Address-card.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>Tambah Artikel</a>
											<!--end::Dropdown-->
											<!--begin::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table  class="table table-bordered table-checkable" id="order-listing">
											<thead>
												<tr>
													<th>Gambar</th>
													<th>Judul</th>
													<th>Deskripsi</th>
													<th>Editor</th>
													<th>Tanggal</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@forelse ($artikels as $artikel)
												<tr>
													<td class="text-center">
														<img src="{{ url('storage/artikels/'.$artikel->artikel_gambar)}}" class="rounded" style="width: 50px">

													</td>
													<td width="200px">{{$artikel->artikel_judul}}</td>
													<td width="300px">{{Str::limit(Strip_tags($artikel->artikel_deskripsi),50)}}</td>
													<td>{{$artikel->artikel_editor}}</td>
													<td>{{$artikel->artikel_date}}</td>
													<!-- <td class="text-center">
														<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $artikel->artikel_id) }}" method="POST">
															<a href="{{ route('artikel.edit', $artikel->artikel_id) }}" class="btn btn-sm btn-primary">EDIT</a>
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
														</form>
													</td> -->
													<td class="text-center"> 
														<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $artikel->artikel_id) }}" method="POST">
															<!-- <a href="{{ route('artikel.edit', $artikel->artikel_id) }}" class="label label-success label-pill label-inline mr-2">Edit</a> -->
															<a href="{{ route('artikel.edit', $artikel->artikel_id) }}"  class="btn btn-icon btn-success btn-sm"><i class="flaticon-edit-1"></i></a>
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-icon btn-danger btn-sm"><i class="flaticon-delete"></i></button>
														</form>
                                                    </td>
												</tr>
												@empty
												<div class="alert alert-danger">
													Artikel Belum ada
												</div>
												@endforelse
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
					<script>
						@if(session()->has('success'))
							toastr.success('{{session('success')}}','BERHASIL!');
						@elseif(session()->has('error'))
							toastr.error('{{session('error')}}','GAGAL!');
						@endif
					</script>
@endsection