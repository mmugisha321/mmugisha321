

<!DOCTYPE html>
<html>
<head>
    
 <title>All Clients</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
   
    <style>
	
	
	#idd
	{
padding:5px;
border:1px solid #ccc;
font-family: mtn Brighter sans;
font-size:15px;}
	
	
	
	
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
<center><font face="mtn brighter sans">


</font></center>
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
            <a class="top-heading" href="update1.php">update</a>           </li>  
                   <li class="no-sub">
            <a class="top-heading" href="delete1.php">Delete</a>            </li>
            
            
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







<table border="0" bordercolor="#003399" height="400" width="800">
<tr>

<td width="550">
<table border="0"  style="margin-top:11px; ">
<tr>
<th width="144" id="idd">ID</th>
<th width="144" id="idd">Client Number</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "kbs");
if ($conn-> connect_error)
{
die("connection failed:". $conn-> connect_error);
}                  
$sql = "select * from clients";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
while ($row = $result-> fetch_assoc ())
{

echo "<tr><td id=idd>". $row["id"]. "</td><td id=idd>". $row["client_number"]."</td></tr>";
}
echo "</table>";
}
else
{

echo "o result";


}
$conn-> close();
?>


</td>

</table>
</body>
</body>
<body>

</body>
</html>
