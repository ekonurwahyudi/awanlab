
@extends('awanlab/master')
@section('judul_halaman', 'Monitoring Order Lab Makassar')
@section('konten')
    <div class="d-flex flex-column-fluid">
		<div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                    <span class="nav-icon"><i class="fas fa-shopping-basket"></i></span>
                                    <span class="nav-text">Orderan Masuk</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                    <span class="nav-icon"><i class="fas fa-hourglass-half"></i></span>
                                    <span class="nav-text">Orderan diproses</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                                    <span class="nav-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                                    <span class="nav-text">Monitoring Kalibrasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                            <table  class="table table-bordered table-checkable" id="order-listing">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Customer</th>
                                        <th>Detail Alat</th>
                                        <th>No. Order</th>
                                        <th>Status</th>
                                        <th>Tanggal Order</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach ($orders as $order)
                                    @if($order->order_status == "orderan baru")
                                        @if($order->order_lokasilab == "Lab Makassar")
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td width="200px">
                                            <b>Perusahaan :</b> {{$order->user->nama_perusahaan}}<br>
                                            <b>Nama :</b> {{$order->user->name}} <br>
                                            <b>No.Hp :</b> {{$order->user->no_hp}} <br>
                                        </td>
                                        <td width="200px">
                                            <b>Nama Alat: </b>{{$order->order_namaalat}}<br>
                                            <b>Merek: </b>{{$order->order_merek}}<br>
                                            <b>Model: </b>{{$order->order_model}}<br>
                                            @if($order->order_jeniskal == "inhouse")
                                            <b>Jenis Kalibrasi: </b><span class="label label-info label-inline font-weight-normal mr-2">InHouse</span>
                                            @else
                                            <b>Jenis Kalibrasi: </b><span class="label label-success label-inline font-weight-normal mr-2">OnSite</span>
                                            @endif
                                        </td>
                                        <td width="130px">{{$order->order_ccl}}</td>
                                        <td width="130px"><span class="label label-danger label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
                                        <td >{{$order->created_at}}</td>
                                        <td><button class="btn btn-outline-warning btn-sm edit"
                                        data-perusahaan="{{$order->user->nama_perusahaan}}"
                                        data-namalengkap="{{$order->user->name}}"
                                        data-hp="{{$order->user->no_hp}}"
                                        data-email="{{$order->user->email}}"
                                        data-alamat="{{$order->user->alamat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-nama_alat="{{$order->order_namaalat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-merek="{{$order->order_merek}}"
                                        data-model="{{$order->order_model}}"
                                        data-sn="{{$order->order_sn}}"
                                        data-lokasi_lab="{{$order->order_lokasilab}}"
                                        data-jeniskal="{{$order->order_jeniskal}}"
                                        data-nama_sertifikat="{{$order->order_namaser}}"
                                        data-alamat_sertifikat="{{$order->order_alamatser}}"
                                        data-status="{{$order->order_status}}"
                                        data-teknisi="{{$order->order_teknisi}}"
                                        data-tglorder="{{$order->order_tglantar}}">
                                        <i class="fas fa-list-ul"></i>Detail</button></td>
                                    </tr>
                                        @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                            <table  class="table table-bordered table-checkable" id="order-listing2">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Customer</th>
                                        <th>Detail Alat</th>
                                        <th>No. Order</th>
                                        <th>Status</th>
                                        <th>Tanggal Order</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach ($orders as $order)
                                    @if($order->order_status != "orderan baru")
                                        @if($order->order_status != "selesai")
                                            @if($order->order_lokasilab == "Lab Makassar")
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td width="200px">
                                            <b>Perusahaan :</b> {{$order->user->nama_perusahaan}}<br>
                                            <b>Nama :</b> {{$order->user->name}} <br>
                                            <b>No.Hp :</b> {{$order->user->no_hp}} <br>
                                        </td>
                                        <td width="200px">
                                            <b>Nama Alat: </b>{{$order->order_namaalat}}<br>
                                            <b>Merek: </b>{{$order->order_merek}}<br>
                                            <b>Model: </b>{{$order->order_model}}<br>
                                            @if($order->order_jeniskal == "inhouse")
                                            <b>Jenis Kalibrasi: </b><span class="label label-info label-inline font-weight-normal mr-2">InHouse</span>
                                            @else
                                            <b>Jenis Kalibrasi: </b><span class="label label-success label-inline font-weight-normal mr-2">OnSite</span>
                                            @endif
                                        </td>
                                        <td width="130px">{{$order->order_ccl}}</td>
                                        <td width="130px"><span class="label label-danger label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
                                        <td >{{$order->created_at}}</td>
                                        <td><button class="btn btn-outline-warning btn-sm edit"
                                        data-perusahaan="{{$order->user->nama_perusahaan}}"
                                        data-namalengkap="{{$order->user->name}}"
                                        data-hp="{{$order->user->no_hp}}"
                                        data-email="{{$order->user->email}}"
                                        data-alamat="{{$order->user->alamat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-nama_alat="{{$order->order_namaalat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-merek="{{$order->order_merek}}"
                                        data-model="{{$order->order_model}}"
                                        data-sn="{{$order->order_sn}}"
                                        data-lokasi_lab="{{$order->order_lokasilab}}"
                                        data-jeniskal="{{$order->order_jeniskal}}"
                                        data-nama_sertifikat="{{$order->order_namaser}}"
                                        data-alamat_sertifikat="{{$order->order_alamatser}}"
                                        data-status="{{$order->order_status}}"
                                        data-teknisi="{{$order->order_teknisi}}"
                                        data-tglorder="{{$order->order_tglantar}}">
                                        <i class="fas fa-list-ul"></i>Detail</button></td>
                                    </tr>
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
                            <table  class="table table-bordered table-checkable" id="order-listing3">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Teknisi</th>
                                        <th>Detail Alat</th>
                                        <th>No. Order</th>
                                        <th>Status</th>
                                        <th>Update Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach ($orders as $order)
                                    @if($order->order_teknisi != "")
                                        @if($order->order_status != "selesai")
                                                @if($order->order_lokasilab == "Lab Makassar")
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td width="200px">{{$order->order_teknisi}}</td>
                                        <td width="200px">{{$order->order_namaalat}}</td>
                                        <td width="130px">{{$order->order_ccl}}</td>
                                        <td width="130px"><span class="label label-light-warning label-inline font-weight-normal mr-2">{{$order->order_status}}</span></td>
                                        <td >{{$order->updated_at}}</td>
                                        <td><button class="btn btn-outline-warning btn-sm edit"
                                        data-perusahaan="{{$order->user->nama_perusahaan}}"
                                        data-namalengkap="{{$order->user->name}}"
                                        data-hp="{{$order->user->no_hp}}"
                                        data-email="{{$order->user->email}}"
                                        data-alamat="{{$order->user->alamat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-nama_alat="{{$order->order_namaalat}}"
                                        data-nomor_order="{{$order->order_ccl}}"
                                        data-merek="{{$order->order_merek}}"
                                        data-model="{{$order->order_model}}"
                                        data-sn="{{$order->order_sn}}"
                                        data-lokasi_lab="{{$order->order_lokasilab}}"
                                        data-jeniskal="{{$order->order_jeniskal}}"
                                        data-nama_sertifikat="{{$order->order_namaser}}"
                                        data-alamat_sertifikat="{{$order->order_alamatser}}"
                                        data-status="{{$order->order_status}}"
                                        data-teknisi="{{$order->order_teknisi}}"
                                        data-tglorder="{{$order->order_tglantar}}">
                                        <i class="fas fa-list-ul"></i>Detail</button></td>
                                    </tr>
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Modal Detail Alat -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Detail order</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i aria-hidden="true" class="ki ki-close"></i>
									</button>
								</div>
								<div class="modal-body table-responsive">
									<div class="row">
										<div class="col-6">
										<h5>Data Customer</h5>
										<table class="table table-bordered table-checkable">
											<tbody>
												<tr>
													<td><b>Nama Perusahaan</b></td>
													<td><span id="perusahaan"></span></td>
												</tr>
												<tr>
													<td><b>Nama Lengkap</b></td>
													<td><span id="namalengkap"></span></td>
												</tr>
												<tr>
													<td><b>Nomor HP</b></td>
													<td><span id="hp"></span></td>
												</tr>
												<tr>
													<td><b>Email</b></td>
													<td><span id="email"></span></td>
												</tr>
												<tr>
													<td><b>Alamat</b></td>
													<td><span id="alamat"></span></td>
												</tr>
											</tbody>
										</table>
										</div>
										<div class="col-6">
										<h5>Detail Alat</h5>
										<table class="table table-bordered table-checkable">
											<tbody>
												<tr>
													<td><b>Nomor Order</b></td>
													<td><span id="nomor_order"></span></td>
												</tr>
												<tr>
													<td><b>Nama Alat</b></td>
													<td><span id="nama_alat"></span></td>
												</tr>
												<tr>
													<td><b>Merek</b></td>
													<td><span id="merek"></span></td>
												</tr>
												<tr>
													<td><b>Model</b></td>
													<td><span id="model"></span></td>
												</tr>
												<tr>
													<td><b>S/N</b></td>
													<td><span id="sn"></span></td>
												</tr>
												<tr>
													<td><b>Nama Sertifikat</b></td>
													<td><span id="nama_sertifikat"></span></td>
												</tr>
												<tr>
													<td><b>Alamat Sertifikat</b></td>
													<td><span id="alamat_sertifikat"></span></td>
												</tr>
												<tr>
													<td><b>Lokasi Lab</b></td>
													<td><span id="lokasi_lab" class="label label-light-warning label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Jenis Kalibrasi</b></td>
													<td><span id="jeniskal" class="label label-light-success label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Status</b></td>
													<td><span id="status" class="label label-light-danger label-inline font-weight-normal mr-2"></span></td>
												</tr>
												<tr>
													<td><b>Teknisi</b></td>
													<td><span id="teknisi"></span></td>
												</tr>
												<tr>
													<td><b>Tgl Order</b></td>
													<td><span id="tglorder"></span></td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
		$('.edit').click(function(){
			$('#exampleModal').modal();
			var namalengkap = $(this).attr('data-namalengkap')
			var hp = $(this).attr('data-hp')
			var perusahaan = $(this).attr('data-perusahaan')
			var email = $(this).attr('data-email')
			var alamat = $(this).attr('data-alamat')
			var nama_alat = $(this).attr('data-nama_alat')
			var nomor_order = $(this).attr('data-nomor_order')
			var model = $(this).attr('data-model')
			var merek = $(this).attr('data-merek')
			var sn = $(this).attr('data-sn')
			var lokasi_lab = $(this).attr('data-lokasi_lab')
			var jeniskal = $(this).attr('data-jeniskal')
			var nama_sertifikat = $(this).attr('data-nama_sertifikat')
			var alamat_sertifikat = $(this).attr('data-alamat_sertifikat')
			var status = $(this).attr('data-status')
			var teknisi = $(this).attr('data-teknisi')
			var tglorder = $(this).attr('data-tglorder')
			$('#namalengkap').text(namalengkap)
			$('#hp').text(hp)
			$('#perusahaan').text(perusahaan)
			$('#email').text(email)
			$('#alamat').text(alamat)
			$('#nomor_order').text(nomor_order)
			$('#nama_alat').text(nama_alat)
			$('#model').text(model)
			$('#merek').text(merek)
			$('#sn').text(sn)
			$('#lokasi_lab').text(lokasi_lab)
			$('#jeniskal').text(jeniskal)
			$('#nama_sertifikat').text(nama_sertifikat)
			$('#alamat_sertifikat').text(alamat_sertifikat)
			$('#status').text(status)
			$('#teknisi').text(teknisi)
			$('#tglorder').text(tglorder)
		})
		</script>
@endsection