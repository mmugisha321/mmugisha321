

<!DOCTYPE html>
<html>
<head>
    
 <title>This Is mY homepage</title>
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
            <a class="top-heading" href="new.php">Bus</a>            </li>
     
        <li class="no-sub">
            <a class="top-heading" href="view1.php">All Bus</a>           </li>  
            <li class="no-sub">
            <a class="top-heading" href="update.php">update</a>           </li>  
                   <li class="no-sub">
            <a class="top-heading" href="delete1.php">Delete</a>            </li>
            <li class="no-sub">
            <a class="top-heading" href="client.php">Clients</a>           </li> 
            <li class="no-sub">
            <a class="top-heading" href="driver.php">Drivers</a>           </li>  
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
if(isset($_GET['bus_id']))
{
$bus_id=$_GET['bus_id'];
if(isset($_POST['submit']))
{
$bus_id=$_POST['bus_id'];
$number_plate=$_POST['number_plate'];
$passengers=$_POST['passengers'];
$cost=$_POST['cost'];


$tank=$_POST['tank'];
$manu=$_POST['manu'];
$max=$_POST['max'];


$query3=mysql_query("update bus set number_plate='$number_plate', passengers='$passengers', cost='$cost', tank='$tank', manu='$manu', max='$max' where bus_id='$bus_id'");
echo "BUS UPDATED SUCCESSFULLY!!!";
echo "<META http-equiv=refresh content=1;URL=update.php>";
if($query3)
{
('locations:update.php');
}
}
$query1=mysql_query("select * from bus where bus_id='$bus_id'");
$query2=mysql_fetch_array($query1);
?>

<form method="post" action="">
  <table>
    <tr>
      <td>
ID:</td><td><input type="text" name="bus_id" value="<?php echo $query2['bus_id']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
Plate Number:</td><td><input type="text" name="number_plate" value="<?php echo $query2['number_plate']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>



  <td>
passengers:</td><td><input type="text" name="passengers" value="<?php echo $query2['passengers']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
Price:</td><td><input type="text" name="cost" value="<?php echo $query2['cost']; ?>" id="user"/><br /><br /></td>
<br />
</tr>

<tr>



  <td>
Tank:</td><td><input type="text" name="tank" value="<?php echo $query2['tank']; ?>" id="user"/><br /></td></tr>

<tr>
<td>
Manufacture:</td><td><input type="text" name="manu" value="<?php echo $query2['manu']; ?>" id="user"/><br /><br /></td>
<br />
</tr>
<tr>


<tr>
<td>
Maximum:</td><td><input type="text" name="max" value="<?php echo $query2['max']; ?>" id="user"/><br /><br /></td>
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