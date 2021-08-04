

<!DOCTYPE html>
<html>
<head>
    
 <title>Clients</title>
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
            <a class="top-heading" href="client.php">Clients</a>           </li> 
        <li class="no-sub">
            <a class="top-heading" href="view3.php">All Clients</a>           </li>  
            <li class="no-sub">
            <a class="top-heading" href="update2.php">update</a>           </li>  
                   <li class="no-sub">
            <a class="top-heading" href="delete4.php">Delete</a>            </li>
             <li class="no-sub">
            <a class="top-heading" href="new.php">Bus</a>            </li>   
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
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$client_number=$_POST['client_number'];

$query3=mysql_query("update clients set client_number='$client_number'where id='$id'");
echo "CLIENT UPDATED SUCCESSFULLY!!!";
echo "<META http-equiv=refresh content=1;URL=update3.php>";
if($query3)
{
('locations:update3.php');
}
}
$query1=mysql_query("select * from clients where id='$id'");
$query2=mysql_fetch_array($query1);
?>

<form method="post" action="">
  <table>
    <tr>
      <td>
ID:</td><td><input type="text" name="id" value="<?php echo $query2['id']; ?>" id="user"/><br /></td></tr>
<tr>
<td>
Client Number:</td><td><input type="text" name="client_number" value="<?php echo $query2['client_number']; ?>" id="user"/><br /><br /></td>
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