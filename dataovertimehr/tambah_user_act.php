<?php 

include 'dbconnect.php';

$nik= $_POST['nik'];
$nama= $_POST['nama'];
$telepon= $_POST['telepon'];
$username= $_POST['username'];
$password= $_POST['password'];
$level= $_POST['level'];

// $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

//   	// image file directory
// $target = "images/".basename($image);

$query = mysqli_query($conn, "INSERT INTO `users` (`id`, `nik`, `nama`, `telepon`, `username`, `password`, `level`) VALUES ('','$nik','$nama','$telepon','$username','$password','$level')");



if ($query){

	header("location: tambahuser.php");

} else {

	echo "Data Gagal Disimpan!";

}

?>

