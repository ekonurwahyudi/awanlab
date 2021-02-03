@extends('/dashboard-cs/master')
@section('konten')
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<!--end::Subheader-->
								<!--begin::Entry-->
								<div class="d-flex flex-column-fluid">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Notice-->
										
										<!--end::Notice-->
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header flex-wrap py-5">
												<div class="card-title">
													<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
														<span class="svg-icon svg-icon-danger svg-icon-lg mb-1">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/Flatten.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 23 23" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="30" height="30"/>
                                                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                    <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                                                </g>
															</svg>
                                                            <!--end::Svg Icon-->
                                                            @foreach ($users as $user)
                                                        </span>&nbsp;Form ATE-04 untuk {{$user->nama_perusahaan}}</h2>
                                                        @endforeach
												</div>
                                                <div class="card-toolbar">
													<!--begin::Dropdown-->
													<div class="mr-2">
														<a href="/order-diproses"><button type="button" class="btn btn-success font-weight-bolder">
														<span class="svg-icon svg-icon-light-white svg-icon-md">
															<!--begin::Svg Icon | path:../halamanuser/media/svg/icons/Design/PenAndRuller.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                                                </g>
															</svg>
															<!--end::Svg Icon-->
														</span>Kembali</button></a>
													</div>
												</div>
											</div>
											<div class="card-body">
                                                @foreach ($users as $user)
                                            <form action="/cetak-ba-{{$user->id}}"  target="_blank" method="POST">
                                                
												@csrf
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">Lab Kalibrasi :</label>
                                                        <div class="col-6">
                                                            <select name="lab_kalibrasi" class="form-control" id="exampleSelectd">
                                                                <option>Pilih Lab Kalibrasi</option>
                                                                <option value="Telkom Infra Maintenance Regional 2" id="21">Telkom Infra Maintenance Regional 2</option>
                                                                <option value="Telkom Infra Maintenance Regional 1">Telkom Infra Maintenance Regional 1</option>
                                                                <option value="Telkom Infra Maintenance Regional 5">Telkom Infra Maintenance Regional 5</option>
                                                                <option value="Telkom Infra Maintenance Regional 7">Telkom Infra Maintenance Regional 7</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">Alamat Lab :</label>
                                                        <div class="col-6">
                                                            <select name="alamat" class="form-control" id="exampleSelectd">
                                                                <option>Pilih Alamat lab</option>
                                                                <option value="Jl. Percetakan Negara No 17-19 Jakarta Pusat">Jl. Percetakan Negara No 17-19 Jakarta Pusat</option>
                                                                <option value="Jl. Gaharu No.1 Medan 20235">Jl. Gaharu No.1 Medan 20235</option>
                                                                <option value="Jl. Gayungan PTT No.17-19 Surabaya">Jl. Gayungan PTT No.17-19 Surabaya</option>
                                                                <option value="Jl. AP Pettarani No. 4 Makassar">Jl. AP Pettarani No. 4 Makassar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">No. Telp. :</label>
                                                        <div class="col-6">
                                                            <select name="telp" class="form-control" id="exampleSelectd">
                                                                <option>Pilih No. Telp.</option>
                                                                <option value="021-21480341">021-21480341</option>
                                                                <option value="061-4531311">061-4531311</option>
                                                                <option value="031-8283678">031-8283678</option>
                                                                <option value="0411-864444, 880444">0411-864444, 880444</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-2 col-form-label">Nomor :</label>
                                                        <div class="col-6">
															<input name="nomor" class="form-control" value="TEL.   /LB-000 / IMT R3 /   / 20 " type="text" id="example-text-input"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-2 col-form-label">Tanggal :</label>
                                                        <div class="col-6">
                                                            <input name="tanggal" class="form-control" type="text" id="example-text-input"/>
                                                            <span style="color:red" class="form-text">&nbsp; &nbsp;contoh: Senin, 25 Januari 2021</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-2 col-form-label">Siapa yg TTD :</label>
                                                        <div class="col-6">
                                                            <input name="ttd" class="form-control" type="text" id="example-text-input"/>
                                                            <span style="color:red" class="form-text">&nbsp; &nbsp;contoh: nama Cs</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-2 col-form-label">NIK :</label>
                                                        <div class="col-6">
                                                            <input name="nik" class="form-control" type="text" id="example-text-input"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">Jenis Berita Acara :</label>
                                                        <div class="col-6">
                                                            <select name="ba" class="form-control" id="exampleSelectd">
                                                                <option>Pilih Berita Acara</option>
                                                                <option value="masuk">Berita Acara Penerimaan Barang</option>
                                                                <option value="keluar">Berita Acara Penyerahan Barang</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                    </div>
                                                    <div class="col-9">
                                                    <button type="submit" class="btn btn-primary mr-2">Cetak ATE-04</button>
                                                    </div>
                                                </div>
                                            </form>
                                            @endforeach
											</div>
										</div>
										<!--end::Card-->
									</div>
									<!--end::Container-->
								</div>
								
								<!--end::Row-->
								<!--begin::Row-->
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection