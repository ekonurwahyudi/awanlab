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
							<h5 class="card-label">Halaman Tambah Artikel</h5>
						</div>
						<div class="card-toolbar">
							<!--begin::Dropdown-->
							<a href="/pengaturan/artikel" class="btn btn-danger font-weight-bold mr-2">
									<span class="svg-icon">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Address-card.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24"/>
											<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
											<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Kembali</a>
							<!--end::Dropdown-->
							<!--begin::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="form-group mb-8">                                        
								<div class="form-group row">
									<label  class="col-2 col-form-label">Judul</label>
									<div class="col-10">
										<input class="form-control @error('artikel_judul') is-invalid @enderror" name="artikel_judul" value="{{ old('artikel_judul') }}" type="text"  id="example-text-input"/>
									</div>
									@error('artikel_judul')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label for="example-date-input" class="col-2 col-form-label">Deskripsi Artikel</label>
									<div class="col-10">
										<textarea id="kt_summernote_1" class="summernote form-control @error('artikel_deskripsi') is-invalid @enderror" name="artikel_deskripsi" >
										{{old('artikel_deskripsi')}}
										</textarea>
									</div>
									@error('artikel_deskripsi')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label for="example-date-input" class="col-2 col-form-label">Tanggal</label>
									<div class="col-10">
										<input class="form-control @error('artikel_date') is-invalid @enderror" name="artikel_date" value="{{old('artikel_date')}}" type="date" class="form-control form-control-solid datetimepicker-input" id="kt_datetimepicker_3" data-target-input="nearest"/>
									</div>
									@error('artikel_date')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Gambar Cover</label>
									<div class="col-5">
										<input type="file" name="artikel_gambar" class="form-control @error('artikel_gambar') is-invalid @enderror dropify"/>
									</div>
									@error('artikel_gambar')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Editor</label>
									<div class="col-3">
										<input class="form-control @error('artikel_editor') is-invalid @enderror" name="artikel_editor" disabled="disabled"  type="text" value="{{ Auth::user()->name }}" id="example-text-input"/>
									</div>
									@error('artikel_editor')
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
		<!--end::Entry-->
	</div>
@endsection