<!DOCTYPE html> 
<html> 
<head>  
	<title>CRUD</title> 
</head> 
<body>  
	<form method="post">  
		<input type="text" name="idusr">  <input type="text" name="usr">  <input type="text" name="pswd">  <button type="submit" name="btn-tmbh">Tambah</button>  
	</form>
	<br> 
</body> 
</html> 
 <?php    
 require_once('function.php');    
 $sql = mysqli_query($dbc, "SELECT * FROM tb_user");    
 while($data = mysqli_fetch_array($sql)){  ?>     
 <form method="post">       
 	<input type="hidden" name="id" value="<?php echo $data['IdUser'];?>">       
 	<input type="text" name="idusr" value="<?php echo $data['IdUser'];?>">       
 	<input type="text" name="usr" value="<?php echo $data['Username'];?>">       
 	<input type="text" name="pswd" value="<?php echo $data['Password'];?>">       
 	<button type="submit" name="btn-edt">Edit</button>       
 	<button type="submit" name="btn-del">Delete</button>     
 </form><br>     
 <?php   } 