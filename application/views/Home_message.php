



<html>
<head>

<style>
#header{
background-color:green;
color:white;
text-align:center;
padding:50px;
}
#section{
background-color:#243a2eb3;
color:white;
text-align:center;
padding:50px;
}
div{
margin-left:350px;
margin-right:350px;
margin-bottom:-10px;
margin-top:-50px;
}
body{
background-color:#00ffff;
}
</style>
</head>
<body>
<table border="1px" style="width:100%;">
<tr>
<div id="header">
<h1>Registration</h1>
</tr>
<tr>
<div id="section">
<form  action="crud/savedata"  method="POST" name="abc">
 First name:
 <input type="text" name="fname"><br><br>
  Last name:
  <input type="text" name="lname"><br><br>
  Father name:
  <input type="text" name="fatname"><br><br>
  password:
  <input type="password" name="pass" ><br><br>
   Cpassword:
  <input type="password" name="Cpass"><br><br>
  Gender:
   <input type="radio"  id="samp"name="gender" value="male" > Male
   <input type="radio" id="ww1" name="gender" value="female"> Female<br><br> 
   Address:
   <textarea name="message" rows="10" cols="30"> </textarea><br><br>
  Qualfication:
   <select name="Qualfication"required>
  <option value="bca">bca"></option>
  <option value="mca">mca</option>
  <option value="diploma">diploma</option>
  <option value="btec">btec</option><br> 
  </select><br><br>
<input type="submit" name="save" value="Submit">
 </tr>
</div>
</div>
</form>
</table>

</body>
</html>
