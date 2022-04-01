<?php
include '../koneksi.php';

$date1 = $_GET['mulai'];
$date2 = $_GET['sampai'];
if (!empty($date1) && !empty($date2)) {
	// perintah tampil data berdasarkan range tanggal
	$query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, penilaians.*
	FROM users
	JOIN pelamars
	ON pelamars.id_user=users.id_user
    JOIN penilaians
    ON penilaians.id_pelamar=pelamars.id_pelamar
    WHERE penilaians.tgl_nilai BETWEEN '$date1' and '$date2' ORDER BY tgl_nilai ASC");
} else {
	// perintah tampil semua data
	$query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, penilaians.*
	FROM users
	JOIN pelamars
	ON pelamars.id_user=users.id_user
    JOIN penilaians
    ON penilaians.id_pelamar=pelamars.id_pelamar");
}

?>
<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/x-icon" href="../assets/img/yc.png">
	<title>SIRK - Cetak Laporan Tes & Wawancara</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}

		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}

		table tr .text {
			text-align: center;
			font-size: 15px;
		}

		table tr td {
			font-size: 15px;
		}

		th,
		td {
			padding: 10px;
			text-align: left;
		}

		#t01 {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>

<body>
	<center>
		<table>
			<tr>
				<td><img src="../assets/img/yc.png" width="90" height="90"></td>
				<td>
					<center>
						<font size="5">CV. YUK CODING MEDIA</font><br>
						<font size="2">Alamat : Jl. Panunggulan No. 17B, Ds. Gajahmati, Kec. Pati, Kab. Pati Kode Pos 59116</font><br>
						<font size="2"><i>Phone/Fax : 081225764094 </i></font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
	</center>
	<table>
		<h2>Laporan Tes & Wawancara</h2>
	</table>
	<table width="625" id="t01">
		<thead id="t01">
			<tr>
				<th width="2%" id="t01">No</th>
				<th width="20%" id="t01">Tanggal</th>
				<th width="20%" id="t01">Nama Pelamar</th>
				<th width="10%" id="t01">Nilai Ujian</th>
				<th width="20%" id="t01">Nilai Wawancara</th>
				<th width="10%" id="t01">Hasil</th>
			</tr>
		</thead>
		<tbody id="t01">
			<?php
			$no = 1; //nilai awal nomer
			while ($data_cek = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<?php $tanggal = $data_cek['tgl_nilai']; ?>
					<td id="t01"><?php echo tgl_indo(date($tanggal)); ?></td>
					
					<td id="t01"><?php echo $data_cek['nama']; ?></td>
					<td id="t01"><?php echo $data_cek['nilai_tes']; ?></td>
					<td id="t01"><?php echo $data_cek['nilai_wawancara']; ?></td>
					<td id="t01"><?php echo $data_cek['hasil']; ?></td>
				</tr>
			<?php
				//auto increment nomer
				$no++;
			}
			?>
		</tbody>
	</table>
	<br>
	</table>
	<table width="700">
		<tr><?php $tgl = date('Y-m-d'); ?>
		<td width="350" class="text"><br><br><br><br><br><br><br><br></td>
			<td width="370" class="text">Kudus, <?php echo tgl_indo(date($tgl)); ?><br>Kepala CV. Yuk Coding<br><br><br><br><br><br>Muhammad Nur Fawaiq S.Kom</td>
		</tr>
	</table>
	<script>
		//perintah untuk cetak di browser
		window.print();
	</script>
</body>

</html>
<?php
function tgl_indo($tanggal)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>