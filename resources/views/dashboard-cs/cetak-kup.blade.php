<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body spellcheck="false">
    @foreach ($users as $user)
    <p><img src="https://myfiles.space/user_files/75281_7c976beaf89e5a7c/75281_custom_files/img1611218655.PNG" style="width: 927px;"></p>
    <table style="width: 97%; border-collapse: collapse; border: 1px solid rgb(255, 255, 255);">
        <tbody>
            <tr>
                <td style="width: 49.7783%;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : FORM/QP-02-01/.............../20...</span><br></td>
                <td style="width: 50.1108%;"><em><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Contact Person &nbsp; &nbsp; &nbsp; &nbsp;</span></em><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">: {{$user->no_hp}}<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp; Lokasi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Jakarta/Medan/Surabaya/Makassar *)<br></span></span></td>
                <td style="width: 50.1108%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Request Received &nbsp; &nbsp;</em>: ................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;">&nbsp; &nbsp; Pelanggan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$user->name}}</span><br></span></span></td>
                <td style="width: 50.1108%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Quantity &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</em>: ................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp; Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$user->alamat}}<br></span></span></td>
                <td style="width: 50.1108%;"><span style="font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif;"><em>Target Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</em>: ................................<br></span></span></td>
            </tr>
            <tr>
                <td style="width: 49.7783%;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; Telepon/Faks/Email &nbsp;: {{$user->no_hp}}/{{$user->email}}<br></span></td>
                <td style="width: 50.1108%;"><br></td>
            </tr>
        </tbody>
    </table> 
    @endforeach
    <br>
    <table style="border: none;margin-left:5.35pt;border-collapse:collapse;">
        <tbody>
            <tr>
                <td rowspan="3" style="width: 21.2pt;border: 1pt solid black;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:4.85pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>No</span></p>
                </td>
                <td rowspan="3" style="width: 81.2pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:8.7pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Nama&nbsp;Perangkat</span></p>
                </td>
                <td rowspan="3" style="width: 46.2pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:13.25pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Merk</span></p>
                </td>
                <td rowspan="3" style="width: 51.05pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-right:.05pt;text-align:  center;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Tipe</span></p>
                </td>
                <td rowspan="3" style="width: 92.45pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>S/N</span></p>
                </td>
                <td colspan="12" style="width: 310.9pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:1.45pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:90.05pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Beri&nbsp;tanda&nbsp;centang&nbsp;(</span><span style="font-size:11px;">&radic;</span><span style='font-size:11px;font-family:"Arial",sans-serif;'>) jika&nbsp;lengkap</span></p>
                </td>
                <td rowspan="3" style="width: 63.25pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 14.1pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.25pt;line-height:12.0pt;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:9.4pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Keterangan</span></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 53.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:8.2pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Kalibrator</span></p>
                </td>
                <td colspan="2" style="width: 51.65pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:10.15pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Personil</span></p>
                </td>
                <td colspan="2" style="width: 51.9pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:11.55pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Metode</span></p>
                </td>
                <td colspan="2" style="width: 51pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:15.55pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>CMC</span></p>
                </td>
                <td colspan="2" style="width: 51.5pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:12.3pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Jadwal</span></p>
                </td>
                <td colspan="2" style="width: 51.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 10.15pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:13.25pt;line-height:9.5pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>Lokasi</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.55pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.1pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.95pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.85pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.2pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>OK</span></p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.4pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-top:.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.75pt;'><span style='font-size:11px;font-family:"Arial",sans-serif;'>NOK</span></p>
                </td>
            </tr>
            @php $no = 1; @endphp
            @foreach ($orders as $order)
            
            <tr>
                <td style="width: 21.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;'>&nbsp;&nbsp;&nbsp;{{$no++}}</p>
                </td>
                <td style="width: 81.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:12px;font-family:"arial",sans-serif;'>{{$order->order_namaalat}}</p>
                </td>
                <td style="width: 46.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 51.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 92.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
           
            @endforeach
                

            <tr>
                <td style="width: 21.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 81.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 46.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 51.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 92.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 21.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 81.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 46.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 51.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 92.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 21.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 81.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 46.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 51.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 92.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.5pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 21.2pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 81.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 46.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 51.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 92.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 24.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.7pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 22.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.5pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 23.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 28.55pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 63.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 27.6pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="line-height: 1;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">*) Coret yang tidak perlu<br></span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Hasil Evaluasi : .............................................................................................................................................................................................................................................................</span><br><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;..............................................................................................................................................................................................................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Waktu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Tanggal ................................................................................................ Jam .......................................................................................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Dilaksanakan : ................................................................................................/NIK : .............................................................. /TTD: ...........................................................................</span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Mengetahui&nbsp; &nbsp;: ................................................................................................/NIK : .............................................................. /TTD: ...........................................................................</span><br></span></p>
</body>

</html>