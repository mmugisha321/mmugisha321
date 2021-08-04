

<!DOCTYPE html>
<html>
<head>
    
 <title>Driver</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
    <link href="form1.css"rel="stylesheet" type="text/css" />
   
 <style type="text/css">
td
{

font-family: mtn Brighter sans;

}
</style>
</head>


<center>



<table border="0" bordercolor="#003399" height="222" width="799">
<tr>
<td width="800"><img src="bus.jpg" height="222" width="799"></td>
</tr>
</table>
</center>
</body>
<body>
<center>
<table border="0" width="800" height="25">
<tr>
<td width="300">
<center><font face="mtn brighter sans">
<b><b></font></center>
</td>
<td width="250">

<table cellpadding="0px" cellspacing="0px"> 

</table>

</td>

<td width="150">

</td>
</tr>
</table>
</center>
</body>
<body>

<nav id="ddmenu">
    <div class="menu-icon"></div>
    <ul>
       <li class="no-sub">
            <a class="top-heading" href="home.php">HOME</a>            </li>
          </div>
            </div>
        </li>

     <li class="no-sub">
            <a class="top-heading" href="driver.php">Drivers</a>           </li>
        <li class="no-sub">
            <a class="top-heading" href="view2.php">All Driver</a>           </li>  
            <li class="no-sub">
            <a class="top-heading" href="update1.php">update</a>           </li>  
                   <li class="no-sub">
            <a class="top-heading" href="delete2.php">Delete</a>            </li>
            <li class="no-sub">
            <a class="top-heading" href="client.php">Clients</a>           </li> 
            
            <li class="no-sub">
            <a class="top-heading" href="new.php">Bus</a>            </li>  
                   </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
</body>

<body>
<center>

<table border="0" bordercolor="#003399" height="400" width="820" style="margin-top:-77px; margin-left: 133px;>
<tr>
<td width="200">

</td>
<td width="550" style="">


    

<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];


$address=$_POST['address'];
$gender=$_POST['gender'];
$salary=$_POST['salary'];
$worked_years=$_POST['worked_years'];


$query3=mysql_query("update driver set fname='$fname', lname='$lname', age='$age', address='$address', gender='$gender', salary='$salary' ,worked_years='$worked_years'where id='$id'");
echo "DRIVER UPDATED SUCCESSFULLY!!!";
echo "<META http-equiv=refresh content=1;URL=update1.php>";
if($query3)
{
('locations:update1.php');
}
}
$query1=mysql_query("select * from driver where id='$id'");
$query2=mysql_fetch_array($query1);
?>

<form method="post" action="">
  <table>
    <tr>
      <td>
ID:</td><td><input type="text" name="id" value="<?php echo $query2['id']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
First Name:</td><td><input type="text" name="fname" value="<?php echo $query2['fname']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>



  <td>
Last Name:</td><td><input type="text" name="lname" value="<?php echo $query2['lname']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
Age:</td><td><input type="text" name="age" value="<?php echo $query2['age']; ?>" id="user"/><br /><br /></td>
<br />
</tr>

<tr>



  <td>
Address:</td><td><input type="text" name="address" value="<?php echo $query2['address']; ?>" id="user"/><br /></td></tr>

<tr>
<td>
Gender:</td><td><input type="text" name="gender" value="<?php echo $query2['gender']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>


<tr>
<td>
Salary:</td><td><input type="text" name="salary" value="<?php echo $query2['salary']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>
<td>
Service Time:</td><td><input type="text" name="worked_years" value="<?php echo $query2['worked_years']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>


  <td colspan="2">

<input type="submit" name="submit" value="update" class="update" id="login"/></td></tr>
</table>
</form>
<?php
}
?>







    
  </body>
</html>