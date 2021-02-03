@include('header')
                <div class="container">
                    <br/>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-12">
                            <div class="">
                                <h3 class="title">Tracking Order</h3>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="/">{{__('lang.Beranda')}}</a>
                                </span>
                                <span>Tracking Order</span>
                            </div>
                        </div>
                    </div>
                </div>
<br/>
    <!--site-main start-->
    <div class="site-main">


        <section class="ttm-row pt-0 pb-50 clearfix">
            <div class="container">
                <div class="row">
                        <div class="col-6 widget widget-search">
                            <form action="/check-order" role="search" method="get" class="search-form">
                            @csrf
                                <label>
                                    <span style="color:black; font-size: 16px;"><b><i class="fa fa-search"></i> Masukkan Nomor CCL anda</b></span>
                                    <input type="search" class="input-text" name="order_ccl" value="{{$noccl}}" placeholder="Contoh : CCL-21-230">
                                </label>
                                <button type="submit" class="btn btn-danger btn-lg" value="Search"><i class="ti ti-search" aria-hidden="true"></i></button>
                            </form>
                            <br>
                            @if (count($hasils) > 0)
                            @foreach ($hasils as $hasil)
                            <div style="background-color: #f6faff;padding: 15px; width:470px;color:black; ">
                            
                            <span>
                                <b>Nama Lengkap :</b> {{$hasil->user->name}}<br>
                                <b>Nama Perusahaan :</b> {{$hasil->user->nama_perusahaan}}<br>
                                <b>Nama Alat :</b> {{$hasil->order_namaalat}}<br>
                                <b>Merek   :</b> {{$hasil->order_merek}}<br>
                                <b>Model   :</b> {{$hasil->order_model}}<br>
                                <b>S/N   :</b> {{$hasil->order_sn}}<br>
                                <b>Nomor CCL   :</b> {{$hasil->order_ccl}}<br>
                                <b>Tanggal Order :</b> {{$hasil->created_at}} <br>
                                <b>Update Status :</b> {{$hasil->updated_at}} <br>
                                <b>Status Alat :</b> <b style="color:red;">{{$hasil->order_status}}</b>
                            </span>
                            </div>
                            @endforeach
                            @else
                            <div style="background-color: #f6faff;padding: 15px; width:470px;color:black; ">
                                <span>Nomor <b>{{$noccl}}</b> tidak ditemukan</span>
                            </div>
                            @endif
                        </div>                    
                    <div class="col-6">
                    <center><span><b style="color:black; font-size: 16px;">Alat yang sedang dikalibrasi</b> (hanya menampilkan 5 terbaru)</span></center>
                    <table class="table table-bordered table-checkable" id="order-listing2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alat</th>
                                <th>Status Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no=1; @endphp
                        @foreach ($orders as $order)
                            @if($order->order_status != "")
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$order->order_namaalat}}</td>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
    <!--footer start-->
@include('footer')