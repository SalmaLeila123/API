<!doctype html>
<html class="no-js" lang="en">

<?php 
include 'dbconnect.php';
?>

<html>
<head>
	<title>Overtime Rekapitulasi Data</title>
	<link rel="icon" 
	type="image/png" 
	href="favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-144808195-1');
	</script>

	<style type="text/css">
		table, td, th {
			border: 1px solid black;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		td, tr {
			text-align: center;
		}
	</style>

</head>

<body>
	<div style="margin-right: 1250px;" class="container">
		<h2>Overtime Rekapitulasi Data</h2>
		<div class="data-tables datatable-dark">
			<table id="dataTable3" class="display" style="width:200%"><thead class="thead-dark">
				<tr>
					<th style="width: 1px;">No</th>
					<th>NPK</th>
					<th>Nama Karywan</th>
					<th>Departemen</th>
					<th>Section</th>
					<th>Instansi</th>
					<th>Tanggal</th>
					<th>Jam Mulai</th>
					<th>Jam Selesai</th>
					<th>Mulai Istirahat 1</th>
					<th>Selesai Istirahat 1</th>
					<th>Mulai Istirahat 2</th>
					<th>Selesai Istirahat 2</th>
					<th>Jam Lembur</th>
					<th>Hari Libur/Kerja</th>
					<th>Total Jam</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$brgs=mysqli_query($conn,"SELECT * from dataovt where instansi='Pro Pacific'");
				$no=1;
				while($p=mysqli_fetch_array($brgs)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $p['npk'] ?></td>
						<td><?php echo $p['nama'] ?></td>
						<td><?php echo $p['dept'] ?></td>
						<td><?php echo $p['sct'] ?></td>
						<td><?php echo $p['instansi'] ?></td>
						<td><?php echo $p['tgl'] ?></td>
						<td><?php echo $p['jam_mulai'] ?></td>
						<td><?php echo $p['jam_selesai'] ?></td>
						<td><?php echo $p['m_istirahat_a'] ?></td>
						<td><?php echo $p['s_istirahat_a'] ?></td>
						<td><?php echo $p['m_istirahat_b'] ?></td>
						<td><?php echo $p['s_istirahat_b'] ?></td>
						<td><?php echo $p['jam_lembur'] ?></td>
						<td><?php echo $p['hari_lk'] ?></td>
						<td><?php echo $p['total_jam'] ?></td>
					</tr>		
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#dataTable3').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy', 'excel', 'print',
				]
		} );
	} );

</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


</body>
</html>