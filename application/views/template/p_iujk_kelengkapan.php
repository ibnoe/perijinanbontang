<!DOCTYPE html>
<html>
<head>
	<title>Surat Kelengkapan IUJK</title>
	<style>
		.tablebordered, .tablebordered tr, .tablebordered td{
			border : 1px solid black;
			border-collapse : collapse;
		}
	</style>
</head>
<body onLoad="window.print();">
	<?php extract((array)$printrecord[0]); ?>
	<table width="720px" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="4" align="center"><img src="<?php echo base_url(); ?>assets/images/logo-bontang.jpg" width="50px" height="60px"></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><h4 style="margin:0px;">PEMERINTAH KOTA BONTANG</h4></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><h4 style="margin:0px;">BADAN PELAYANAN PERIJINAN TERPADU DAN PENANAMAN MODAL KOTA BONTANG</h4></td>
		</tr>
		<tr>
			<td colspan="4" align="center">JL. MT. Haryono No. 31 Telp (0548) 20594 Fax. (0548) 20598 Kode Pos 75311 Bontang</td>
		</tr>
		<tr>
			<td colspan="4" align="center"><hr></td>
		</tr>
		<tr>
			<td colspan="4" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Nama Perusahaan</td>
			<td colspan="2">: <?php echo $iujk_perusahaan; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Nama Direktur</td>
			<td colspan="2">: <?php echo $iujk_direktur; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Alamat Perusahaan</td>
			<td colspan="2">: <?php echo $iujk_alamat; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Nomor Registrasi</td>
			<td colspan="2">: <?php echo $det_iujk_nomorreg; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Tanggal</td>
			<td colspan="2">: <?php echo date('d-m-Y', strtotime($det_iujk_tanggal)); ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>Jenis Permohonan</td>
			<td colspan="2">: <?php echo $det_iujk_jenis_nama; ?></td>
		</tr>
		<tr>
			<td width="40px">&nbsp;</td>
			<td width="200px">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" align="center"><b>IJIN USAHA JASA KONSTRUKSI</b></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><b>( IUJK )</b></td>
		</tr>
		<tr>
			<td colspan="4" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4"><b>I. Daftar Kelengkapan Dokumen</b></td>
		</tr>
		<tr>
			<td colspan="4">
				<table class="tablebordered">
					<tr>
						<td align="center" width="40px">No.</td>
						<td align="center" width="500px">Jenis Lampiran</td>
						<td align="center" width="180px">Keterangan</td>
					</tr>
					<?php $i=1; foreach($dataceklist as $subdataceklist){ ?>
					<tr>
						<td valign="top"><?php echo $i; ?></td>
						<td><?php echo $subdataceklist->NAMA_SYARAT; ?></td>
						<td align="center"><?php echo $subdataceklist->iujk_cek_keterangan; ?></td>
					</tr>
					<?php $i++; } ?>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4"><b>II. Riwayat Dokumen</b></td>
		</tr>
		<tr>
			<td colspan="4">
				<table class="tablebordered">
					<tr>
						<td align="center" rowspan="2" width="40px">No.</td>
						<td align="center" colspan="5">Diterima</td>
						<td align="center" rowspan="2" width="100px">Keterangan</td>
					</tr>
					<tr>
						<td align="center" width="90px">Instansi</td>
						<td align="center" width="200px">Nama</td>
						<td align="center" width="130px">Jabatan</td>
						<td align="center" width="80px">Tanggal</td>
						<td align="center" width="80px">TTD</td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Dinas PU</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>2.</td>
						<td>BPPM</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>