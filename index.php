<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "kbs";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";
// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

//registering a login session
if (!isset($_SESSION)) {
  session_start();
}
?>
<html>
<head>
<title>KBS MIS
</title>
<link href="stylee.css"rel="stylesheet" type="text/css" />
<style>
</style>
</head>
<body bgcolor="white">
<center>
<table border="0" bordercolor="#003399" height="222" width="799">
<tr>
<td width="800"><img src="bus.jpg" height="210" width="799"></td>
</tr>
</table>
</center>
<div class="form">
<form action="index.php" method="post" name="login" >
<table border="0"width="444" height="200"  border color="white" style="" id="table">
<tr height="30" bgcolor="">
<td colspan="3"style="text-align:Center;"><h1>You are welcome To KBS<br>Login Here</h1></font></td>
</tr>
<tr height="44" id="tr"><td id="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Username</b></font></td><td colspan="2"> 
<input type="text" size"23" name="name"  id="user" required/></td></tr>
<tr height="44"><td id="input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Password</b></font></td><td colspan="2">

<input type="password" name="password"  id="user" required/></td></tr>


<tr height="44"><td colspan="3"><center>&nbsp;&nbsp;&nbsp;


<a href="signup.php" > Create account</a>


<input name="SubmitButton" id="login" type="submit"value="Login"color="white">

<?php 


//if the login form is submitted
if (isset($_POST['SubmitButton'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {
//$_POST['email'] = addslashes($_POST['email']);
//}

$password = $_POST['password'];
$name = $_POST['name'];
$check = mysql_query("SELECT * FROM login where name = '$name'")or die(mysql_error());

$info = mysql_fetch_array( $check );

$pass = $info['pass'];
$name = $info['name'];


echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);

if ($check2 == 0) { echo "<br/><br/><div style='background-color:red; color:white; text-align:center;'>Invalid Username And Password</font></div>";
}

 else if ($password != $pass){
echo "<br/><br/><div style='background-color:red; text-align:center; color:white;'>Incorrect password</font></div>";

}



else{

$_SESSION['name'] = $name;
$_SESSION['password'] = $password;
//then redirect them to the members area 

echo "<META http-equiv=refresh content=0.5;URL=home.php>";

}

echo "</div>";

}

?>
		

</td></tr></table>


</div>

</body></html>
