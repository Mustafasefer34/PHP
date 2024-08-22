<?php  
   error_reporting(0);
  if($_POST){
  	$name = $_POST['name'];
  	echo $name."<br>";
  	$gender = $_POST['gender'];
  	echo $gender."<br>";
  	$lessons = $_POST['lessons'];
  	foreach ($lessons as $key => $value) {
  		echo $value."<br>";
  	}
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uygula öğren</title>
</head>
<body style="text-align: center;">

	<form method="POST"
	action="">
		
		<h2>Uygula öğren</h2>
		<h3>Ad soyad</h3>
        <input type="text" name="name">
        <h3>Cinsiyet</h3>
        <input type="radio" name="gender" value="Bay"> Bay
        <input type="radio" name="gender" value="Bayan"> Bayan
        <h3>Eğitim seçimi</h3>
         <input type="checkbox" name="lessons[]" value="HTML"> HTML
         <input type="checkbox" name="lessons[]" value="CSS"> CSS
         <input type="checkbox" name="lessons[]" value="PHP"> PHP
         <hr>
         <input type="submit" name="Gönder">
	</form>

</body>
</html>