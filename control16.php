<?php
    
    if($_POST){
        echo "POST VAR! <hr>";
        $phone= $_POST['phone'];
        if(!is_numeric($phone)){
        	echo "Telefon numarası hatalı !";
        	header("Refresh:2");
        }else{
        	echo "Telefon numarası doğru";
        }
     }else{
       echo "POST YOK ! <hr>";


     ?>

     <<!DOCTYPE html>
     <html>
     <head>
     	<meta charset="utf-8">
      	<title>Telefon numarası</title>
     </head>
     <body>

     	<form method="POST" action="">

     		<input type="text" name="phone" placeholder="Telefon Numarası" required maxlength="10" minlength="10">
     		<input type="submit" value="gönder">


     		
     	</form>
     
     </body>
     </html>

 



     <?php  


    }

?>