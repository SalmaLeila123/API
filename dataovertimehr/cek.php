<?php
//Jika Belum Login
session_start();
if(!isset($_SESSION['login'])){

}else{
	header('location:login.php');
}
?>