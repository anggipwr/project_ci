<html>
<head>
<meta http-equiv="Content-Type" content="charset=utf-8" />
<style type="text/css">
@page { margin: 20px 10px 20px 40px;}
body { margin: 10px; }
body { font-family: Calibri, Helvetica, Arial, sans-serif; }
h3 { font-family: "Times New Roman",serif;font-size:12px; }
h4 { font-family: "Times New Roman",serif;font-size:12px; }
p { font-family: "Times New Roman",serif;font-size:10px; margin-bottom: 0.5em;}
#paragraf2 { font-family: Georgia, serif; }
table {border-collapse: collapse;width: 100%;}
th {border: 1px solid black;font-family:Calibri;text-align:center;font-size:9px;}
td {border-bottom:1px solid black;font-family:Calibri;text-align:left;font-size:10px ;vertical-align: top;padding:2.5px;}
#ttd {font-family:Calibri;text-align:left;font-size:10px;vertical-align: middle; }
#ttdkanan {border-right: 1px solid black;font-family:Calibri;text-align:left;font-size:10px;vertical-align: top; padding:2.5px }
#ratakiri {border-right: 1px solid black;font-family:Calibri;text-align:left;font-size:10px;vertical-align: top; }
#ratatengah {border-right: 1px solid black;font-family:Calibri;text-align:center;font-size:10px;vertical-align: top; }
#ratakanan {border-right: 1px solid black;font-family:Calibri;text-align:right;font-size:10px;vertical-align: top; }
#tfooter { border:1px solid black; font-familyborder: 1px solid black;:Calibri;text-align:center;font-size:10px;vertical-align: top;font-weight:bold; padding:5px}
#tfooterkanan { border:1px solid black; font-family:Calibri;text-align:right;font-size:10px;vertical-align: top;font-weight:bold; padding:5px}
#noratatengah { border-right: 1px solid black;border-left: 1px solid black;font-family:Calibri;text-align:center;font-size:10px;vertical-align: top; }
#tabelttd {border: none;font-family: "Times New Roman", Times, serif;text-align:center;font-size:11px;}
. noborder, .noborder tr, .noborder th, .noborder td { border: none;}
.page_break { page-break-before: avoid; }

</style>

</head>
<body>
<center>
<h3>
DAFTAR  PEMBAYARAN  HONORARIUM <br>
PEGAWAI TIDAK TETAP DENGAN PERJANJIAN KERJA  ( PTT-PK ) <br>
DINAS KELAUTAN DAN PERIKANAN PROVINSI JAWA TIMUR <br>
BAGIAN BULAN: <?php echo $tglbulan;?><br>
</h3>
</center>
<p><b>UNIT KERJA: <?php echo $infounit->nama_unit;?></b></p>
<table id="tabelutama" page-break-inside: auto;>
	<thead>
		<tr>
			<th style="width:2%;">NO.</th>
			<th style="width:16%;">NAMA / NIP-PTT</th>
			<th style="width:6%;font-size:8.3px">JENIS KELAMIN<br>STATUS<br>PERKAWINAN/<br>JML ANAK</th>
			<th style="width:6.5%;">HONORARIUM</th>
			<th style="width:6.5%;font-size:8.5px">TUNJANGAN<br>BPJS<br>KESEHATAN<br>3%</th>
			<th style="width:6.5%;font-size:8.5px">JUMLAH<BR>HONORARIUM<BR>DAN TUNJANGAN</th>
			<th style="width:6%;">BIAYA JABATAN</th>
			<th style="width:6%;">PTKP</th>
			<th style="width:3.5%;">PKPP</th>
			<th style="width:3.5%;">PPh Psl. 21</th>
			<th style="width:6%;font-size:9px">UTANG<br>BPJS KES(3%)<br>BPJS KES(2%)</th>
			<th style="width:6%;">JUMLAH<BR>BERSIH</th>
			<th style="width:14%;">NO. KTP<BR>ALAMAT<BR>NPWP</th>
			<th>TANDA TANGAN</th>
		</tr>
		
		<tr style="height:22px;">
			<th > <nobr>1</nobr> </th > <th > <nobr>2</nobr> </th > <th > <nobr>3</nobr> </th > <th > <nobr>4</nobr> </th > <th > <nobr>5</nobr> </th > <th > <nobr>6=4+5</nobr> </th > <th > <nobr>7=6x5%</nobr> </th > <th > <nobr>8</nobr> </th > <th > <nobr>9=8-(6+7)</nobr> </th > <th > <nobr>10=9x5%</nobr> </th > <th > <nobr>11</nobr> </th > <th > <nobr>12=6-(5+7)</nobr> </th > <th > <nobr>14</nobr> </th > <th> <nobr>15</nobr> </th >
		</tr>
	</thead>
	<tbody>
	<?php 
	$no=1;
	$ttd = '';
	foreach ($hasilquery as $ptt):?>
	<tr>
	<td id='noratatengah' class='none'><?php echo $no;?></td >
	<td id='ratakiri'><?php echo $ptt->nama .'<br>'.$ptt->nip.'<br>'.$ptt->ijazah;?></td >
	<td id='ratatengah'><?php echo $ptt->jk.'<br>'.$ptt->SPJA;?></td>
	<td id='ratakanan'><?php echo $ptt->honorarium;?></td >
	<td id='ratakanan'><?php echo $ptt->tunjanganbpjs;?></td >
	<td id='ratakanan'><?php echo $ptt->ht;?></td >
	<td id='ratakanan'><?php echo $ptt->biayajabatan;?></td >
	<td id='ratakanan'><?php echo $ptt->ptkp;?></td >
	<td id='ratakanan'><?php echo $ptt->pkpp;?></td >
	<td id='ratakanan'><?php echo $ptt->pph;?></td >
	<td id='ratakanan'><?php echo $ptt->bpjspr.'<br>'.$ptt->bpjspk;?></td>
	<td id='ratakanan'><?php echo $ptt->jumlahbersih;?></td >
	<td id='ratatengah'><?php echo $ptt->nik.'<br>'.$ptt->alamat.'<br>'.$ptt->npwp;?></td>	
	<td id='ttdkanan'><?php echo $no;?></td >
	<?php
	$no++;
	endforeach;
	?>
	</tr>
	</tbody>
	</table>
</body>
</html>