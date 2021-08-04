 
<!DOCTYPE html>
<html>
<head>
    
 <title>New Client</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
    <link href="form1.css"rel="stylesheet" type="text/css" />
   
    <style>
        /*The following are for this demo page only (not required for the ddmenu).*/
        /*body { background: #eee url(ddmenu/ddmenug-bg.jpg) no-repeat center 0px; padding-top:-10px; width:200; height:100;}*/
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
<center><font face="mtn brighter sans"><b></font></center>
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
            <a class="top-heading" href="driver.php">Drivers</a>           </li>  
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

<table border="0" bordercolor="#003399" height="400" width="800">
<tr>
<td width="200">

</td>
<td width="550">

<form action="client.php" method="post">
		
<table border="0"width="500" height="300"  border color="white">
<tr height="60" bgcolor="">
<td colspan="3" id="title" style="text-align:Center;"><font face="MTN Brighter Sans"><b>Enter New client</b></font></td>



</tr>
<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Identification</b></font></td><td colspan="2"> 


<input type="text" size"23" name="id"  id="user" value="" required/></td></tr>

<tr height="44" id="tr"><td id="input"><font face="MTN Brighter Sans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Client Number</b></font></td><td colspan="2"> 


<input type="text" size"23" name="client_number"  id="user" value="" required/></td></tr>

<tr height="44"><td colspan="3"><center>

<input name="submit" type="submit" value="REGISTER" id="login" class="formButton">
&nbsp;&nbsp;&nbsp;
</form>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("kbs", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];
$client_number = $_POST['client_number'];

$query = mysql_query("insert into clients(id,client_number) values ('$id','$client_number')");
//echo "<br/><br/><div style='background-color:Black;'><font face='MTN Brighter Sans' color='white' SIZE='2'>STUDENT <font color='red'>$fname $lname &nbsp;</font>Is Now Registered</font></div>";//


}

mysql_close($connection); // Closing Connection with Server
?>          


</a>

</center>
</td></tr></table>

                    
       









</td>

</table>

</body>
</body>
<body>

</body>
</html>
