<?php
$baslik = "PHP değişken başlık";
$metin = "Bu paragraf değişken içerisinde tutulmaktadır"; 
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SPHPD11</title>
	<style type="text/css">
		h1 {
		color:#ff0000; 
	}
	p{
		color: #0000ff;
	}
	</style>

</head>
<body>
	<h1>HTML BAŞLIK</h1>
    <p>Bu paragraf HTML kodu olarak yazılmıştır</p>
    	<?php 
    	for ($i=0; $i < 5 ; $i++) { 
    		//echo $i."<br>";  	

    	}
       echo " <h1>PHP BAŞLIK </h1>";
    ?>
    <p style="color: #0000ff;"> <?= "Bir başka yazdırma yöntemi"; ?> </p>
    <p>
    	<?php
    	echo "Bu paragraf php kodu olarak oluşturulmuştur"
    	?>
    </p>
    </h1>
    <br>
    <p>
    	<h1>
    	<?php 
    	 echo "Değişkendeki başlık: $baslik";
    	 ?>
    	 </h1>
    	 <?php 
    	 echo "Değişkendeki metin : $metin";
    	  ?>
    </p>
</body>
</html>