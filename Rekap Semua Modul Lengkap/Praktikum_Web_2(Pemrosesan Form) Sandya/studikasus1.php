<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Studi Kasus 1</title> 
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Hobby 
<select name="hobi"> 

<option value="Sepak Bola">Sepakbola 
<option value="Futsal">Futsal 
<option value="Bola Basket" selected="
<?php 
if ($_POST['hobi'] == 'Bola Basket') { 
echo 'checked="checked"'; 
} 
?> 
"
>Bola Basket 

<option value="Bulu Tangkis">Bulu Tangkis
<option value="Tenis Meja">Tenis Meja 
<option value="Bola Voli">Bola Voli 
<option value="Voli Pantai">Voli Pantai 
<option value="Membaca">Membaca 
<option value="Menulis">Menulis 

</select> <br /> 
<input type="submit" value="OK" /> 
</form> 
<?php 
if (isset($_POST['hobi'])) { 
echo 'Hobby Kamu adalah : ' . $_POST['hobi']; 
} 
?> 
</body> 
</html>