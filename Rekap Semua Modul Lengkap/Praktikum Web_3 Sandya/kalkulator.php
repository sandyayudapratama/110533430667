<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Kalkulator</title> 
<script>
function cek(a) {
al = /^[0-9]{1,}$/; //Cek validitas harus angka
return al.test(a);
}
function val(){
var x=document.forms["formku"]["input1"].value;
var y=document.forms["formku"]["input2"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Inputan Kosong");
  formku.input1.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ("Anda Memasukkan Huruf, Inputan harus angka");
	return false;
}}
</script>
</head> 
<body bgcolor="#0066CC"> 

<form name="formku" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return val()"> 
<br />
<p align="center">
<label style="font-family:'Lucida Console', Monaco, monospace ; font-size:24px ; color:#FF0"><strong>Kalkulator</strong></label><br />
<br />
<input type="text" name="input1"/>
<select name="operasi"> 
<option value="X">X
<option value=":">:
<option value="+">+ 
<option value="-">- 
<option value="%">%
</select>

<input type="text" name="input2" />
<input type="submit" value="=" /> 
<input type="text" name="output" value="<?php 
$input1=$_POST['input1'];
$input2=$_POST['input2'];
	if($_POST['operasi']=="X"){
    echo $input1 * $input2;
	}else if($_POST['operasi']==":"){
		echo $input1 / $input2;
	}else if($_POST['operasi']=="+"){
		echo $input1 + $input2;
	}else if($_POST['operasi']=="-"){
		echo $input1 - $input2;
	}else if($_POST['operasi']=="%"){
		echo $input1 % $input2;
	}
?> " width="100" />
</form> 
</p>

</body> 
</html>