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
							<h5 class="card-label">Halaman Edit data User</h5>
						</div>
						<div class="card-toolbar">
							<!--begin::Dropdown-->
							<a href="/master-user" class="btn btn-danger font-weight-bold mr-2">
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
						<form action="/update-user/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card-body">
								<div class="form-group mb-8">                                        
								<div class="form-group row">
									<label  class="col-2 col-form-label">Nama Lengkap :</label>
									<div class="col-6">
										<input class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" type="text"  id="example-text-input"/>
									</div>
									@error('name')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Nomor Handphone :</label>
									<div class="col-6">
										<input class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{$user->no_hp}}" type="text"  id="example-text-input"/>
									</div>
									@error('no_hp')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Role User:</label>
									<div class="col-6">
                                    @php $roleuser = $user->roleuser->role_id; @endphp
                                        <select class="form-control @error('role_user') is-invalid @enderror" name="role_user" id="example-text-input">
                                            @if($roleuser == 1)
                                            <option value="superadmin">Super admin</option>
                                            @elseif ($roleuser == 3)
                                            <option value="cs">Customer Service</option>
                                            @elseif ($roleuser == 4)
                                            <option value="kortek">Koordinator Teknik</option>
                                            @elseif ($roleuser == 5)
                                            <option value="teknisi">Teknisi</option>
                                            @elseif ($roleuser == 6)
                                            <option value="admin">Admin</option>
                                            @else
                                            <option value="customer">Customer</option>
                                            @endif
                                            <option value="cs">Customer Service</option>
                                            <option value="kortek">Koodinator Teknik</option>
                                            <option value="superadmin">Super Admin</option>
                                            <option value="teknisi">Teknisi</option>
                                            <option value="admin">Admin</option>
                                        </select>
									</div>
									@error('role_user')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Lokasi Kerja:</label>
									<div class="col-6">
                                        <select class="custom-select form-control @error('lokasi_kerja') is-invalid @enderror" name="lokasi_kerja">
                                            <option value="{{$user->lokasi_kerja}}">{{$user->lokasi_kerja}}</option>
                                            <option value="Lab Jakarta">Lab Jakarta</option>
                                            <option value="Lab Medan">Lab Medan</option>
                                            <option value="Lab Surabaya">Lab Surabaya</option>
                                            <option value="Lab Makassar">Lab Makassar</option>
                                        </select>
									</div>
									@error('lokasi_kerja')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Email :</label>
									<div class="col-6">
										<input class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" type="email"  id="example-text-input"/>
									</div>
									@error('email')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
                                    <label  class="col-2 col-form-label">Alamat :</label>
                                    <div class="col-6">
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="exampleTextarea" name="alamat" rows="4" style="width:450px;">{{$user->alamat}}</textarea>
                                    </div>
                                    @error('alamat')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Password :</label>
									<div class="col-6">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" required autocomplete="new-password"/>
									</div>
									@error('password')
										<div class="alert alert-danger mt-2">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group row">
									<label  class="col-2 col-form-label">Konfirmasi Password :</label>
									<div class="col-6">
										<input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" value="{{$user->password}}" required autocomplete="new-password"/>
									</div>
								</div>
								
								</div>
								</div>
								<div class="card-footer">
								<div class="row">
									<div class="col-2">
									</div>
									<div class="col-10">
									<button type="submit" class="btn btn-success mr-2">Tambah User</button>
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