<?php 
use App\Libraries\Common;
use App\Libraries\TimDinas;
$common = new Common();
$timdinas = new TimDinas();
$diff = date_diff($dinasboptim->dinasbop->dari, $dinasboptim->dinasbop->sampai);
$durasi = $diff->days;
$kpa = $timdinas->get_sekretaris();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rincian Biaya Perjalanan Dinas</title>
<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
<style type="text/css">
    body {
    	margin: 0px;
    }
    
    * {
    	font-family: 'Times New Roman', Times, serif;
    	font-size: 7pt;
    }
    
    h4 {
    	font-size: 14pt;
    }
    
    .table td {
		padding: 1px;
	}

    .table-print td {
    	border: none !important;
    	padding: 1px;
	}

	@media print {
		@page {
	    	size: auto;
	    }
		
		.table td {
			padding: 1px;
		}

	    .table-print td {
	    	border: none !important;
	    	padding: 1px;
		}
	}
</style>
</head>
<body onload="window.print()">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<strong><u><h4 class="text-center">RINCIAN BIAYA PERJALANAN DINAS</h4></u></strong>
				<br>
				<center>
					<table width="100%">
						<tr>
							<td style="width:5%;">Lampiran SPD Nomor</td>
							<td style="width:20%;">: </td>
							<td style="width:2%;">Tanggal BKU</td>
							<td style="width:20%;">: </td>
						</tr>
						<tr>
							<td style="width:5%;">Tanggal</td>
							<td style="width:20%;">: </td>
							<td style="width:2%;">Kodering</td>
							<td style="width:20%;">: </td>
						</tr>
					</table>
				</center>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="2%" style="text-align: center;vertical-align:middle;">No.</th>
							<th width="50%" style="text-align:center;vertical-align:middle;">Perincian Biaya</th>
							<th width="10%" style="text-align:center;vertical-align:middle;">Jumlah</th>
							<th width="7%" style="text-align:center;vertical-align:middle;">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center;"></td>
							<td colspan="3">Perjalanan Dinas {!! $dinasboptim->dinasbop->kegiatan->nama_kegiatan !!}, selama {!! $durasi !!} hari dari tanggal {!! Carbon\Carbon::parse($dinasboptim->dinasbop->dari)->formatLocalized('%d %B %Y') !!} s.d {!! Carbon\Carbon::parse($dinasboptim->dinasbop->sampai)->formatLocalized('%d %B %Y') !!}.</td>
						</tr>
						<tr>
							<td style="text-align: center;">1</td>
							<td><b>Biaya Operasional Inspektorat</b></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align: center;"></td>
							<td>
								<table width="100%" class="table-print table table-borderless">
									<tr>
										<td style="width:20%;">{!! $dinasboptim->tim['wakilpenanggungjawab']['nama'] !!}</td>
										<td style="width:15%;text-align:center;">Wakil Penanggung Jawab</td>
										<td style="width:2%;text-align:center;">{!! $dinasboptim->tim['wakilpenanggungjawab']['golongan'] !!}</td>
										<td style="width:4%;text-align:center;">{!! $durasi !!} hari</td>
										<td style="width:1%;text-align:center;">x</td>
										<td style="width:10%;">Rp.{!! $common->rupiah($dinasboptim->tim['wakilpenanggungjawab']['biaya']) !!}</td>
									</tr>
									<tr>
										<td style="width:20%;">{!! $dinasboptim->tim['pengendaliteknis']['nama'] !!}</td>
										<td style="width:15%;text-align:center;">Pengendali Teknis</td>
										<td style="width:2%;text-align:center;">{!! $dinasboptim->tim['pengendaliteknis']['golongan'] !!}</td>
										<td style="width:4%;text-align:center;">{!! $durasi !!} hari</td>
										<td style="width:1%;text-align:center;">x</td>
										<td style="width:10%;">Rp.{!! $common->rupiah($dinasboptim->tim['pengendaliteknis']['biaya']) !!}</td>
									</tr>
									<tr>
										<td style="width:20%;">{!! $dinasboptim->tim['ketuatim']['nama'] !!}</td>
										<td style="width:15%;text-align:center;">Ketua Tim</td>
										<td style="width:2%;text-align:center;">{!! $dinasboptim->tim['ketuatim']['golongan'] !!}</td>
										<td style="width:4%;text-align:center;">{!! $durasi !!} hari</td>
										<td style="width:1%;text-align:center;">x</td>
										<td style="width:10%;">Rp.{!! $common->rupiah($dinasboptim->tim['ketuatim']['biaya']) !!}</td>
									</tr>
									@foreach($dinasboptim->tim['anggota'] as $v)
										<tr>
											<td style="width:20%;">{!! $v['nama'] !!}</td>
											<td style="width:15%;text-align:center;">Anggota</td>
											<td style="width:2%;text-align:center;">{!! $v['golongan'] !!}</td>
											<td style="width:4%;text-align:center;">{!! $durasi !!} hari</td>
											<td style="width:1%;text-align:center;">x</td>
											<td style="width:10%;">Rp.{!! $common->rupiah($v['biaya']) !!}</td>
										</tr>
									@endforeach
									<tr>
										<td colspan="6"><b>Jumlah Biaya Operasional Inspektorat</b></td>
									</tr>
								</table>
							</td>
							<td>
								<table width="100%" class="table-print table table-borderless">
									<tr>
										<td style="text-align: right;">Rp.{!! $common->rupiah($dinasboptim->tim['wakilpenanggungjawab']['total']) !!}</td>
									</tr>
									<tr>
										<td style="text-align: right;">Rp.{!! $common->rupiah($dinasboptim->tim['pengendaliteknis']['total']) !!}</td>
									</tr>
									<tr>
										<td style="text-align: right;">Rp.{!! $common->rupiah($dinasboptim->tim['ketuatim']['total']) !!}</td>
									</tr>
									@foreach($dinasboptim->tim['anggota'] as $v)
										<tr>
											<td style="text-align: right;">Rp.{!! $common->rupiah($v['total']) !!}</td>
										</tr>
									@endforeach
									<tr>
										<td style="text-align: right;"><b>Rp.{!! $common->rupiah($dinasboptim->dinasbop->total_anggaran) !!}</b></td>
									</tr>
								</table>
							</td>
							<td style="vertical-align: middle; text-align: center;">
								<table width="100%" class="table-print table table-borderless">
									<tr>
										<td style="text-align: center;">Terlampir</td>
									</tr>
									<tr>
										<td style="text-align: center;">Terlampir</td>
									</tr>
									<tr>
										<td style="text-align: center;">Terlampir</tr>
									@foreach($dinasboptim->tim['anggota'] as $v)
										<tr>
											<td style="text-align: center;">Terlampir</td>
										</tr>
									@endforeach
								</table>
							</td>
						</tr>
						<tr>
							<td style="text-align: center;">2</td>
							<td><b>Akomodasi</b></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align: center;"></td>
							<td>
								<b>Jumlah akomodasi</b>
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align: center;">3</td>
							<td><b>Transportasi</b></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td style="text-align: center;"></td>
							<td>
								<b>Jumlah transportasi</b>
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="2"><b>Jumlah Total</b></td>
							<td style="text-align: right;"><b>Rp.{!! $common->rupiah($dinasboptim->dinasbop->total_anggaran) !!}</b></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="4"><b><i>{!! $common->terbilang($dinasboptim->dinasbop->total_anggaran) !!} Rupiah</i></b></td>
						</tr>
					</tbody>
				</table>
				<table width="100%">
					<tr>
						<td width="25%"></td>
						<td width="25%">
							<center>
							<table cellpadding="2" cellspacing="2" style="width:30%;">
			                    <tr>
			                        <td width="10%" style="text-align: center;">Bandung, {!! Carbon\Carbon::parse(date('Y-m-d'))->formatLocalized('%d %B %Y') !!}</td>
			                    </tr>
			                </table>
			                </center>
						</td>
					</tr>
                    <tr>
                        <td width="25%">
                            <table cellpadding="2" cellspacing="2" style="width:100%;">
                            	<tr>
                                    <td width="20%" style="text-align: center;">Telah dibayar sejumlah</td>
                                </tr>
                                <tr>
                                    <td width="20%" style="text-align: center;">Rp.{!! $common->rupiah($dinasboptim->dinasbop->total_anggaran) !!}</td>
                                </tr>
                                <tr>
                                    <td width="20%" style="text-align: center;"><b>Bendahara Pengeluaran Pembantu</b></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;"><br><br><br></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">{!! $dinasboptim->dinasbop->kegiatan->pegawai->nama !!}</td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">NIP. {!! $dinasboptim->dinasbop->kegiatan->pegawai->nip !!}</td>
                                </tr>
                            </table>
                        </td>
                        <td width="25%">
                            <table cellpadding="2" cellspacing="2" style="width:100%;">
                            	<tr>
                                    <td width="20%" style="text-align: center;">Telah menerima jumlah uang sebesar</td>
                                </tr>
                                <tr>
                                    <td width="20%" style="text-align: center;">Rp.{!! $common->rupiah($dinasboptim->dinasbop->total_anggaran) !!}</td>
                                </tr>
                                <tr>
                                    <td width="20%" style="text-align: center;"><b>Yang Menerima</b></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;"><br><br><br></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">{!! $dinasboptim->tim['anggota'][0]['nama'] !!}</td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">NIP. {!! $dinasboptim->tim['anggota'][0]['nip'] !!}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br><br>
                <table width="100%">
                    <tr>
                        <td width="25%">
                           
                        </td>
                        <td width="25%">
                            <table cellpadding="2" cellspacing="2" style="width:100%;">
                                <tr>
                                    <td width="20%" style="text-align: center;"><b>Kuasa Pengguna Anggaran</b></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;"><br><br><br></td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">{!! $kpa['nama'] !!}</td>
                                </tr>
                                <tr>
                                    <td width="10%" style="text-align: center;">NIP. {!! $kpa['nip'] !!}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
			</div>
		</div>
	</div>
</body>
</html>