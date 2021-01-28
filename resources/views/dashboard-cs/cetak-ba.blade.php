<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
@foreach ($users as $user)
<table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 38%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Laboratorium Kalibrasi Telkom</span><br></td>
                <td style="width: 28.625%;"><br></td>
                <td style="width: 33.3333%; text-align: right;"><strong style="font-weight: 700; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">ATE-04</strong><br></td>
            </tr>
            <tr>
                <td style="width: 38%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$lab}}</span><br></td>
                <td style="width: 28.625%;"><br></td>
                <td style="width: 33.3333%;"><br></td>
            </tr>
            <tr>
                <td style="width: 38%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$alamat}}</span><br></td>
                <td style="width: 28.625%;"><br></td>
                <td style="width: 33.3333%; text-align: right;"><strong style="font-weight: 700; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">HASIL KALIBRASI</strong> <br></td>
            </tr>
            <tr>
                <td style="width: 38%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Telp. <b>{{$telp}}</b></span><br></td>
                <td style="width: 28.625%;"><br></td>
                <td style="width: 33.3333%;"><br></td>
            </tr>
        </tbody>
    </table>
    <br>
    <p style="text-align: center;"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 15px;"><b><u>BERITA ACARA PENYERAHAN DAN PENERIMAAN BARANG</u></b> </span><br><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px;"><b>NOMOR {{$nomor}}</b></span></p>
    <p style="text-align: left;" ><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Pada hari ini, {{$tanggal}} kami yang bertandatangan dibawah ini, berdasarkan permintaan</span><br>
    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><b>{{$user->nama_perusahaan}}</b> telah menerima barang-barang sebagai berikut :</span></p>
@endforeach
    <table style="width: 100%; border-collapse: collapse; border: 1px solid rgb(0, 0, 0);">
        <tbody>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; line-height: 3;">No.</div>
                </td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Item ID</div>
                </td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Nama Barang</div>
                </td>
                <td colspan="2" style="width: 28%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">MPN</div>
                </td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Serial Number</div>
                </td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">JML</div>
                </td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);">
                    <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">CCL</div>
                </td>
            </tr>
            @php $no=1; @endphp
            @foreach ($orders as $order)
            @if ($ba == "masuk")
            @if($order->order_status == "order diproses")
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$no++}}</td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center;"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 0;" ><br>{{$order->order_namaalat}}</td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_merek}}</td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_model}}</td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_sn}}</td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_jumlah}}</td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_ccl}}</td>
            </tr>
            @endif
            @else
            @if($order->order_status == "Cetak ATE-04")
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$no++}}</td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center;"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 0;" ><br>{{$order->order_namaalat}}</td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_merek}}</td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_model}}</td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_sn}}</td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_jumlah}}</td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center; line-height: 0;"><br>{{$order->order_ccl}}</td>
            </tr>
            @endif
            @endif
            @endforeach
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
            <tr>
                <td style="width: 5.5%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 8.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 23.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 14.375%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 13.625%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 18.25%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 6.125%; border: 1px solid rgb(0, 0, 0);"><br></td>
                <td style="width: 9.875%; border: 1px solid rgb(0, 0, 0);"><br></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    @foreach ($users as $user)
    @if ($ba == "masuk")
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Yang Menyerahkan</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Yang Menerima</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$user->nama_perusahaan}}</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lab Kalibrasi Telkom</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">__________________________</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$ttd}}</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">NIK :</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">NIK: {{$nik}}</span> <br></td>
            </tr>
        </tbody>
    </table>
    @else
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Yang Menyerahkan</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Yang Menerima</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lab Kalibrasi Telkom</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$user->nama_perusahaan}}</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">{{$ttd}}</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">__________________________</span><br></td>
            </tr>
            <tr>
                <td style="width: 33.3333%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">NIK: {{$nik}}</span><br></td>
                <td style="width: 37.375%;"><br></td>
                <td style="width: 29.125%;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">NIK:</span> <br></td>
            </tr>
        </tbody>
    </table>
    @endif
    @endforeach
    <script>
		window.print();
	</script>
</body>

</html>