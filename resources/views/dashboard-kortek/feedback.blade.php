@extends('/dashboard-kortek/master')
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
                                                    <i class="fas fa-mail-bulk text-danger icon-xl"></i>&nbsp;Feedback</h2>
												</div>
                                                <div class="card-toolbar">
													<!--begin::Dropdown-->
													<div class="mr-2">
														<a href="/dashboard-kortek"><button type="button" class="btn btn-light-success font-weight-bolder">
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
                                                <form action="/input-feedback" method="post" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group row">
													
														<input type="hidden" name="nama" value="{{Auth::user()->name}}">
                                                        <input type="hidden" name="role" value="{{Auth::user()->roleuser->role_id}}">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">Kategori :</label>
                                                        <div class="col-6">
                                                            <select name="kategori" class="form-control" id="exampleSelectd"  onchange="feedback(this);">
                                                                <option  selected disabled>Pilih Kategori</option>
                                                                <option value="saran website">Saran untuk website</option>
                                                                <option value="error web">Laporkan error diwebsite</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="jika-error" style="display: none;">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label" for="exampleSelectd">Screenshoot Error :</label>
                                                            <div class="col-6">
                                                                <input type="file" name="ss_error" class="form-control">
                                                                <p class="ml-2" style="color:red;font-size:10px">Silahkan upload screenshoot error yang anda temukan</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="exampleSelectd">Feedback :</label>
                                                        <div class="col-6">
                                                            <textarea class="form-control" name="isifeedback" id="" cols="30" rows="10" placeholder="Silahkan tulis disini"></textarea>
                                                        </div>
                                                    </div>
													<button type="submit" class="btn btn-danger btn-sm" style="margin-left:180px;">Submit</button>
                                                </form>
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