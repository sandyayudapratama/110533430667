<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Studi Kasus 2</title> 
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Bulan 
<input type="checkbox" name="bulan[]" value="Januari" checked=" 
<?PHP
	  if ($_post['bulan']=="Januari"){
		  echo 'selected="selected"';}
      ?>"
/>Januari
<input type="checkbox" name="bulan[]" value="Februari" 
/>Februari 
<input type="checkbox" name="bulan[]" value="Maret" 
/>Maret
<input type="checkbox" name="bulan[]" value="April" 
/>April
<input type="checkbox" name="bulan[]" value="Mei" 
/>Mei 
<input type="checkbox" name="bulan[]" value="Juni" 
/>Juni
<input type="checkbox" name="bulan[]" value="Juli" 
/>Juli
<input type="checkbox" name="bulan[]" value="Agustus" 
/>Agustus
<input type="checkbox" name="bulan[]" value="September" 
/>September
<input type="checkbox" name="bulan[]" value="Oktober" 
/>Oktober
<input type="checkbox" name="bulan[]" value="Nopember" 
/>Nopember<br /> 
<input type="checkbox" name="bulan[]" value="Desember" 
/>Desember <br /> 
<input type="submit" value="ok" /> 
</form> 
<?php 
// Ekstraksi nilai 
if (isset($_POST['bulan'])) { 
foreach ($_POST['bulan'] as $key => $val) { 
echo $key . ' -> ' .$val . '<br />'; 
} 
} 
?> 
</body> 
</html>