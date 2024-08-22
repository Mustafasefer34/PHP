<?php
 if(isset($_POST['Lessons'])){

 	$Lessons = $_POST['Lessons'];
 	echo " Almak istediğiniz eğitim<br>";
 	 foreach ($Lessons as $key => $value) {
 	 	echo $value."<br>" ;
 	 }

   
}else{
	echo "Post yok!";
}

 
  ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uygula Öğren</title>
</head>
<body style="text-align: center;">
    <form method = "POST" action="">
    	<h3>Almak istediğiniz eğitimi seçiniz</h3>
    	<select multiple name = "Lessons[]">
    		<option value="HTML">HTML</option>
    		<option value="CSS">CSS</option>
    		<option value="PHP">PHP</option>

    	</select>
    	<input type="submit" name="Gönder">
    </form>
</body>
</html>