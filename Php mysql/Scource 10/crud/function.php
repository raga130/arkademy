<?php   
//Koneksi 
$dbc = mysqli_connect('localhost','root','','belajar');   
//Tambah Data  
if(isset($_POST['btn-tmbh'])){  
	mysqli_query($dbc, "INSERT INTO tb_user VALUES('$_POST[idusr]','$_POST[usr]','$_POST[pswd]')");  
	header('location: index.php'); } 
 //Edit Data 
if(isset($_POST['btn-edt'])){ 
	mysqli_query($dbc, "UPDATE tb_user SET IdUser='$_POST[idusr]', Username='$_POST[usr]', 
		Password='$_POST[pswd]' WHERE IdUser='$_POST[id]'"); 
	header('location: index.php'); } 
 //Hapus Data 
if(isset($_POST['btn-del'])){ 
	mysqli_query($dbc, "DELETE FROM tb_user WHERE IdUser='$_POST[id]'"); 
	header('location: index.php'); 
}  
?>
 