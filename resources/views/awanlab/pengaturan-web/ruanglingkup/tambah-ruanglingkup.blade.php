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
					<div class="card-header flex-wrap py-5">
					<div class="card-title">
						<h5 class="card-label">Tambah Ruang Lingkup</h5>
					</div>
					<div class="card-toolbar">
						<!--begin::Dropdown-->
						<a href="/pengaturan/ruanglingkup" class="btn btn-danger font-weight-bold mr-2">
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
					<form action="/pengaturan/ruanglingkup-proses" method="POST">
						@csrf
						<div class="card-body">
							<div class="form-group mb-8">                                        
							<div class="form-group row">
								<label  class="col-2 col-form-label">Lokasi Lab</label>
								<div class="col-8">
									<select class="custom-select form-control @error('ruanglingkup_lokasi') is-invalid @enderror" name="ruanglingkup_lokasi" value="{{ old('ruanglingkup_lokasi')}}">
										<option>Pilih Lokasi Lab</option>
										<option value="1">Jakarta</option>
										<option value="2">Medan</option>
										<option value="3">Surabaya</option>
										<option value="4">Makassar</option>
									</select>
								</div>
								@error('ruanglingkup_lokasi')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group row">
								<label  class="col-2 col-form-label">Kelompok Pengukuran</label>
								<div class="col-8">
									<select class="custom-select form-control @error('ruanglingkup_kelompokukur') is-invalid @enderror" name="ruanglingkup_kelompokukur" value="{{ old('ruanglingkup_kelompokukur')}}">
										<option>Pilih Kelompok pengukuran</option>
										<option value="kelistrikan">Kelistrikan</option>
										<option value="frekuensi dan Waktu">Frekuensi & waktu</option>
										<option value="fiber optic">Fiber Optic</option>
									</select>
								</div>
								@error('ruanglingkup_kelompokukur')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group row">
								<label  class="col-2 col-form-label">Instrument yang dikalibrasi</label>
								<div class="col-8">
									<input class="form-control @error('ruanglingkup_instrument') is-invalid @enderror" name="ruanglingkup_instrument"  type="text" value="{{old('ruanglingkup_instrument')}}" id="example-text-input"/>
								</div>
								@error('ruanglingkup_instrument')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group row">
								<label  class="col-2 col-form-label">Frekuensi</label>
								<div class="col-6">
									<textarea class="form-control @error('ruanglingkup_frekuensi') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_frekuensi" rows="7">&nbsp;</textarea>
								</div>
								@error('ruanglingkup_frekuensi')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group row">
								<label  class="col-2 col-form-label">Rentang Ukur</label>
								<div class="col-6">
									<textarea class="form-control @error('ruanglingkup_rentangukur') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_rentangukur" rows="7">&nbsp;</textarea>
								</div>
								@error('ruanglingkup_rentangukur')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group row">
								<label  class="col-2 col-form-label">Ketidakpastian</label>
								<div class="col-6">
									<textarea class="form-control @error('ruanglingkup_ketidakpastian') is-invalid @enderror" id="exampleTextarea" name="ruanglingkup_ketidakpastian" rows="7">&nbsp;</textarea>
								</div>
								@error('ruanglingkup_ketidakpastian')
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
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>

						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
@endsection