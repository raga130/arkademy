<?php
	$host = "localhost"; //host database
	$username = "root";	//username database
	$password = "";

	$koneksi  = new mysqli($host, $username, $password); // membuat koneksi ke server mysql

	if ($koneksi->connect_error){
		die("koneksi ke database gagal");
	} else {
		echo "Koneksi ke database berhasil";
	}

?>