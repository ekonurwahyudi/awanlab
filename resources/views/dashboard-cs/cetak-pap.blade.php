<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body spellcheck="false">
    <p><img src="https://myfiles.space/user_files/75281_7c976beaf89e5a7c/75281_custom_files/img1611238443.jpg" style="width: 922px;"></p>
    @foreach ($users as $user)
    <table style="width: 97%; border-collapse: collapse; border: 1px solid rgb(255, 255, 255);">
        <tbody>
            <tr>
                <td style="width: 49.7783%; border: 1px solid rgb(255, 255, 255);"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : FORM/QP-05-03.............../20........</span></td>
                <td style="width: 50.1108%; border: 1px solid rgb(255, 255, 255);"><em><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Contact Person &nbsp; &nbsp; &nbsp; &nbsp;</span></em><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">: {{$user->no_hp}}<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp; Lokasi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Jakarta/Medan/Surabaya/Makassar *)<br></span></span></td>
                <td style="width: 50.1108%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Request Received &nbsp; &nbsp;</em>: ...............................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;">&nbsp; &nbsp; Pelanggan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$user->name}}</span><br></span></span></td>
                <td style="width: 50.1108%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Quantity &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</em>: ...............................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp; Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$user->alamat}}<br></span></span></td>
                <td style="width: 50.1108%; border: 1px solid rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Target Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</em>: ...............................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%; border: 1px solid rgb(255, 255, 255);"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; Telepon/Faks/Email &nbsp;: {{$user->no_hp}}/{{$user->alamat}}<br></span></td>
                <td style="width: 50.1108%; border: 1px solid rgb(255, 255, 255);"><br></td>
            </tr>
        </tbody>
    </table>
    @endforeach
    <p style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 1;"><br></p>
    <table style="border: none; margin-left: 4.55pt; border-collapse: collapse; margin-right: calc(31%); width: 95%;">
        <tbody>
            <tr>
                <td rowspan="3" style="width: 23.2pt;border: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><br></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.05pt;line-height:14.0pt;'><span style="font-size:19px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:5.1pt;'><span style='font-size:12px;font-family:"Arial",sans-serif;'>No</span></p>
                </td>
                <td rowspan="3" style="width: 103.45pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><span style="font-size:13px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.85pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:8.8pt;'><span style="font-family: Arial, sans-serif; font-size: 12px;">Nama Perangkat</span></p>
                </td>
                <td rowspan="3" style="width: 77.7pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><span style="font-size:13px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.85pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-family: Arial, sans-serif; font-size: 12px;">Merk</span></p>
                </td>
                <td rowspan="3" style="width: 63.05pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><span style="font-size:13px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.85pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:20.1pt;'><span style="font-family: Arial, sans-serif; font-size: 12px;">Tipe</span></p>
                </td>
                <td rowspan="3" style="width: 62.8pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><span style="font-size:13px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.85pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-family: Arial, sans-serif; font-size: 12px;">S/N</span></p>
                </td>
                <td colspan="8" style="width: 40.8529%; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:44.1pt;'><span style='font-size:12px;font-family:"Arial",sans-serif;'>Beri&nbsp;tanda&nbsp;centang&nbsp;(</span><span style="font-size:12px;">&radic;</span><span style='font-size:12px;font-family:"Arial",sans-serif;'>)&nbsp;jika&nbsp;lengkap</span></p>
                </td>
                <td rowspan="3" style="width: 13.7924%; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;line-height:10.0pt;'><span style="font-size:13px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.85pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:10.6pt;'><span style="font-family: Arial, sans-serif; font-size: 12px;">Keterangan</span></p>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="width: 56.75pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 30.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:4.6pt;margin-right:7.3pt;margin-bottom:.0001pt;margin-left:7.25pt;text-indent:13.55pt;line-height:100%;'><span style="font-size: 12px; line-height: 100%; font-family: Arial, sans-serif;">Tes Fungsional</span></p>
                </td>
                <td colspan="2" style="width: 56.75pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 30.1pt;vertical-align: top;">
                    <p style="font-size: 15px; font-family: Calibri, sans-serif; margin: 4.6pt 14.1pt 0.0001pt 19.15pt; text-indent: -5.2pt; line-height: 100%; text-align: center;"><span style="font-size: 12px;"><span style="line-height: 100%; font-family: Arial, sans-serif;">Kondisi Fisik</span></span></p>
                </td>
                <td colspan="2" style="width: 14.0873%; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm; height: 30.1pt; vertical-align: top;">
                    <p style="font-size: 15px; font-family: Calibri, sans-serif; margin: 4.6pt 5.9pt 0.0001pt 12.65pt; text-indent: -6.75pt; line-height: 100%; text-align: center;"><span style="font-size: 12px;"><span style="line-height: 100%; font-family: Arial, sans-serif;">Kelengkapan aksesoris</span></span></p>
                </td>
                <td colspan="2" style="width: 9.8839%; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm; height: 30.1pt; vertical-align: top;">
                    <p style="margin: 0cm 0cm 0cm 5px; font-size: 15px; font-family: Calibri, sans-serif; line-height: 9.5pt; text-align: center;"><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">Buku&nbsp;</span></span><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">Manual Operasi</span></span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">OK</span></span></p>
                </td>
                <td style="width: 31.9pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">NOK</span></span></p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">OK</span></span></p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">NOK</span></span></p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.3pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">OK</span></span></p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.75pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">NOK</span></span></p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.1pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">OK</span></span></p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:3.65pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;'><span style="font-size: 12px;"><span style="font-family: Arial, sans-serif;">NOK</span></span></p>
                </td>
            </tr>
            @php $no = 1; @endphp
            @foreach ($orders as $order)
            <tr>
                <td style="width: 23.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;padding:4px;'><span style="font-size: 12px;">&nbsp;&nbsp;{{$no++}}</span></p>
                </td>
                <td style="width: 103.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;padding:4px;'>{{$order->order_namaalat}}</p>
                </td>
                <td style="width: 77.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;padding:4px;'>{{$order->order_merek}}</p>
                </td>
                <td style="width: 63.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;padding:4px;'>{{$order->order_model}}</p>
                </td>
                <td style="width: 62.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;padding:4px;'>{{$order->order_sn}}</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 13.7924%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td style="width: 23.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 103.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 77.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 62.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.3pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 13.7924%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.3pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 23.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 103.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 77.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 62.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.35pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 13.7924%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.35pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 23.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 103.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 77.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 62.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.25pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.25pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.25pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.25pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 13.7924%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.25pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 23.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 103.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 77.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 62.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 31.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 27.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 15.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 7.9365%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.4pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 5.3572%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.4pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 4.5892%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.4pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 13.7924%; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm; height: 15.4pt; vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="line-height: 1;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*) Coret yang tidak perlu<br></span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Hasil Evaluasi &nbsp; &nbsp; &nbsp; &nbsp;: .......................................................................................................................................................................................................................................................</span><br><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ........................................................................................................................................................................................................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Waktu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Tanggal ......................................................................................... Jam .......................................................................................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Dilaksanakan Oleh : ......................................................................................../Jam : .............................................................. /TTD: ...........................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Mengetahui &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : ......................................................................................../NIK : .............................................................. /TTD: ...........................................................................</span><br></span></p>
</body>

</html>