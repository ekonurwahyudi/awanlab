@extends('awanlab/pengaturan-web/master')
@section('judul_halaman', 'Pengaturan Web Kalibrasi')
@section('konten')
<!--begin::Aside Menu-->
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
							<h5 class="card-label">Peraturan Umum Web Kalibrasi
							<span class="text-muted pt-2 font-size-sm d-block">Halaman untuk mengubah pertauran umum di web kalibrasi Telkom.</span></h5>
						</div>
						
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<form action="/pengaturan/slide-proses/" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="form-group mb-8">                                        
								<div class="form-group row">
									<label  class="col-2 col-form-label">Nama Website</label>
									<div class="col-10">
										<input class="form-control @error('slide_judul') is-invalid @enderror" name="slide_judul" value="{{ old('slide_judul') }}" type="text"  id="example-text-input"/>
									</div>
									@error('slide_judul')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Logo Website</label>
									<div class="col-3">
										<input type="file" name="slide_gambar_id" class="form-control @error('slide_gambar_id') is-invalid @enderror dropify"/>
                                        <p style="color:red;">Format logo (PNG)</p>
									</div>
									@error('slide_gambar_id')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Icon Favicon  </label>
									<div class="col-3">
										<input type="file" name="slide_gambar_id" class="form-control @error('slide_gambar_id') is-invalid @enderror dropify" />
                                        <p style="color:red;">Format logo (PNG)</p>
									</div>
									@error('slide_gambar_id')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Email Lab</label>
									<div class="col-10">
										<input class="form-control @error('slide_judul') is-invalid @enderror" name="slide_judul" value="{{ old('slide_judul') }}" type="text"  id="example-text-input"/>
									</div>
									@error('slide_judul')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">No. Telp Lab</label>
									<div class="col-10">
										<input class="form-control @error('slide_judul') is-invalid @enderror" name="slide_judul" value="{{ old('slide_judul') }}" type="text"  id="example-text-input"/>
									</div>
									@error('slide_judul')
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
	</div>
@endsection