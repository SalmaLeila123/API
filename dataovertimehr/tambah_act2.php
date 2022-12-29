<?php 

include 'dbconnect.php';

$npk=$_POST['npk'];
$nama=$_POST['nama'];
$dept=$_POST['dept'];
$sct=$_POST['sct'];
$instansi=$_POST['instansi'];
$tgl=$_POST['tgl'];
$jam_mulai=$_POST['jam_mulai'];
$jam_selesai=$_POST['jam_selesai'];
$m_istirahat_a=$_POST['m_istirahat_a'];
$m_istirahat_b=$_POST['m_istirahat_b'];
$s_istirahat_a=$_POST['s_istirahat_a'];
$s_istirahat_b=$_POST['s_istirahat_b'];
$jam_lembur=$_POST['jam_lembur'];
$hari_lk=$_POST['hari_lk'];
$total_jam=$_POST['total_jam'];

$query = mysqli_query($conn,"INSERT INTO `dataovt` (`id`, `npk`, `nama`, `dept`, `sct`, `instansi`, `tgl`, `jam_mulai`, `jam_selesai`, `m_istirahat_a`, `m_istirahat_b`, `s_istirahat_a`, `s_istirahat_b`, `jam_lembur`, `hari_lk`, `total_jam`) VALUES ('', '$npk', '$nama', '$dept', '$sct',  '$instansi', '$tgl', '$jam_mulai', '$jam_selesai', '$m_istirahat_a', '$s_istirahat_a', '$m_istirahat_b', '$s_istirahat_b', '$jam_lembur', '$hari_lk', '$total_jam')");
if ($query){

	header("location: tambahdata.php");

} else {

	echo "Data Gagal Disimpan!";
	
}

?>