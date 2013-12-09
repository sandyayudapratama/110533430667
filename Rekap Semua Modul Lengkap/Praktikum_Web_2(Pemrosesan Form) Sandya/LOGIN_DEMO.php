<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 539px;
	top: 194px;
	width: 360px;
	height: 248px;
	z-index: 1;
	font-family: "Comic Sans MS", cursive;
	font-size: 24px;
	font-style: italic;
	line-height: normal;
	font-weight: bold;
	font-variant: small-caps;
	text-transform: none;
	color: #0CC;
	text-align: center;
	background-color: #CCFFCC;
	border: medium solid #396;
}
#apDiv1 label {
	font-size: 36px;
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;
	background-attachment: scroll;
	background-color: #CFC;
	background-repeat: no-repeat;
	color: #3CF;
}
#apDiv2 {
	position: absolute;
	left: 629px;
	top: 251px;
	width: 202px;
	height: 172px;
	z-index: 2;
}
#apDiv2 label {
	font-family: "Comic Sans MS", cursive;
	color: #3CF;
}
#apDiv2 {
}
#apDiv2 {
}
</style>

<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["username"].value;
var y=document.forms["myForm"]["password"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username or Password is Null");
  myForm.username.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ("Username or Password harus huruf");
	return false;
}}
</script>

</head>
<head><title>Form Login</title></head>
<body bgcolor="#66CC99">
<?php  
session_start();    
?>  
<div id="apDiv1">
  <label>LOGIN</label>
  <hr align="center" width="350" size="5" color="#33CC99"  />
</div>
<div id="apDiv2">
  <p>
  <form name="myForm" method="POST" action="VALIDASI.php" onSubmit="return val()">
    <label>Username :</label>
    <label><br />
    </label>
    <input name="username" type="text" id="username" width="200" value="<?php echo isset($_POST['username']) ? $_POST['password'] : '';?>" />
  </p>
    <p>
      <label>Password :</label>
      <br />
      <input type="password" name="password" id="password" width="200" />
    </p>
<p>
      <input name="Login" type="submit" value="Login" />
    </p>
</div>
</body>
</html>
