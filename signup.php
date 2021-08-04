<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="form1.css">
<style>

#title
{
font-size:32px;


background-color:#00c6ff;
font-family:"Bodoni MT Black";

             
}
#user
{
background:#ffffff;
font-size:20px;

}
#user:hover
{

box-shadow: 1px 0px 5px 2px #ffffff;

}

#login{


height:33px;
width:111px;
background-color:#00c6ff;

font-family: MTN Brighter Sans;
}


#login:hover{

height:33px;
width:111px;
background-color:grey;

font-family: MTN Brighter Sans;
}

a{
text-decoration:none; font-family:MTN Brighter Sans;
color:black;

}
a:hover{
font-size:large;
color:blue;


</style>



</head>

<body>

<form action="signup.php" method="post">
		
<table border="0"width="500" height="300"  border color="white" style="margin-left:444px; margin-top:111px;" id="table">
<tr height="60" bgcolor="">
<td colspan="3" id="title" style="text-align:Center;"><font face="MTN Brighter Sans" color="white">Sign Up</font></td>



</tr>
<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Identification</b></font></td><td colspan="2"> 


<input type="text" size"23" name="id"  id="user" value="" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>firstname</b></font></td><td colspan="2"> 


<input type="text" size"23" name="fname"  id="user" value="" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Lastname</b></font></td><td colspan="2"> 


<input type="text" size"23" name="lname" value="" id="user" required/></td></tr>
<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Age</b></font></td><td colspan="2"> 


<input type="text" size"23" name="age" value="" id="user" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Username</b></font></td><td colspan="2"> 


<input type="text" size"23" name="name" value="" id="user" required/></td></tr>
<tr height="44"><td id="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="MTN Brighter Sans"><b>Password</b></font></td><td colspan="2">

<input type="password" name="pass"  id="user" value="" required/></td></tr>


<tr height="44"><td colspan="3"><center>

<input name="submit" type="submit" value="SIGN UP" id="login">
&nbsp;&nbsp;&nbsp;

<a href="index.php" > Sign In Here</a>
</form>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("kbs", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$name = $_POST['name'];
$pass = $_POST['pass'];

$query = mysql_query("insert into login(id,fname, lname, age, name, pass) values ( '$id', '$fname', '$lname', '$age', '$name', '$pass')");
echo "<br/><br/><div style='background-color:Black;'><font face='MTN Brighter Sans' color='white' SIZE='2'>HELLO <font color='red'>$fname $lname &nbsp;</font>You Are Now Registered</font></div>";
echo "<META http-equiv=refresh content=2;URL=index.php>";

}

mysql_close($connection); // Closing Connection with Server
?>          


</a>

</center>
</td></tr></table>
</body></html>

</body>
</html>
