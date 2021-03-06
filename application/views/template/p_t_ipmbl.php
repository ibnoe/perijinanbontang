<?php if(@$type=="EXCEL"){ ?>
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Daftar Data Ipmbl</title>
	<xml>
	 <x:ExcelWorkbook>
	  <x:ExcelWorksheets>
	   <x:ExcelWorksheet>
		<x:Name>Sheet</x:Name>
		<x:WorksheetOptions>
		 <x:Print>
			<x:Gridlines />
		 </x:Print>
		</x:WorksheetOptions>
	   </x:ExcelWorksheet>
	  </x:ExcelWorksheets>
	 </x:ExcelWorkbook>
	</xml>
</head>
<body>
<?php }else{ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Daftar Data Ipmbl</title>
	<link rel='stylesheet' type='text/css' href='../assets/css/printstyle.css'/>
</head>
<body onload="window.print();">
<?php } ?>	<table>
		<caption>Ipmbl</caption>
		<thead>
			<tr>
				<th align="center" width="50">No</td>
				<th align="center">ipmbl_luas</td>
				<th align="center">ipmbl_volume</td>
				<th align="center">ipmbl_keperluan</td>
				<th align="center">ipmbl_alamat</td>
				<th align="center">ipmbl_kelurahan</td>
				<th align="center">ipmbl_kecamatan</td>
				<th align="center">ipmbl_status</td>
				<th align="center">ipmbl_tanggalsurvey</td>
				<th align="center">ipmbl_usaha</td>
				<th align="center">ipmbl_alamatusaha</td>
				</tr>
		</thead>
		<tbody>
			<?php
			$total_record = 0; 
			if(count($records) > 0){ 
				foreach($records as $subrecord){
					$total_record++;
			?>
				<tr>
					<td><?php echo $total_record; ?></td>
					<td><?php echo $subrecord->ipmbl_luas; ?></td>
					<td><?php echo $subrecord->ipmbl_volume; ?></td>
					<td><?php echo $subrecord->ipmbl_keperluan; ?></td>
					<td><?php echo $subrecord->ipmbl_alamat; ?></td>
					<td><?php echo $subrecord->ipmbl_kelurahan; ?></td>
					<td><?php echo $subrecord->ipmbl_kecamatan; ?></td>
					<td><?php echo $subrecord->ipmbl_status; ?></td>
					<td><?php echo $subrecord->ipmbl_tanggalsurvey; ?></td>
					<td><?php echo $subrecord->ipmbl_usaha; ?></td>
					<td><?php echo $subrecord->ipmbl_alamatusaha; ?></td>
					</tr>
			<?php }} ?>			<tr>
				<td colspan="10" align="left">Total</td>
				<td><?php echo $total_record; ?></td>
			</tr>
		<tbody>
	</table>
</body>
</html>