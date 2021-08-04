

<!DOCTYPE html>
<html>
<head>
    
 <title>Driver</title>
    <link rel="icon" href="img/5.png" type="image/x-png">
    <link href="css.css"rel="stylesheet" type="text/css" />
   
 <style type="text/css">
#td
{
padding:5px;
border:1px solid #ccc;
font-family: mtn Brighter sans;
width: 222px;
font-size:14px;

}
</style>
</head>


<center>

<form>

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
<form method="get" action="http://www.mysite.com/search.php"> 
<table cellpadding="0px" cellspacing="0px"> 

</table>
</form>
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
            <a class="top-heading" href="view2.php">All Drivers</a>           </li>  
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
<form>
<table border="0" bordercolor="#003399" height="400" width="820" style="margin-top:22px;>
<tr>
<td width="200">

</td>
<td width="550">


    
    <?php
include('config.php');
$query1=mysql_query("select id, fname, lname, age, address, gender, salary,worked_years from driver");
echo "<table><tr><th id=td>ID</td> <th id=td>First Name</td> <th id=td>Last Name</td> <th id=td>Age</td> <th id=td>Address</td> <th id=td>Gender</th> <th id=td>Salary</th> <th id=td>Service Time</th><th id=td>Delete</th>";

while($query2=mysql_fetch_array($query1))

{
echo "<tr><td id=td>".$query2['id']."</td>";
echo "<td id=td>".$query2['fname']."</td>";

echo "<td id=td>".$query2['lname']."</td>";
echo "<td id=td>".$query2['age']."</td>";

echo "<td id=td>".$query2['address']."</td>";
echo "<td id=td>".$query2['gender']."</td>";
echo "<td id=td>".$query2['salary']."</td>";
echo "<td id=td>".$query2['worked_years']."</td>";

echo "<td id=td><a href='delete3.php?id=".$query2['id']."'><img src=delete.png></a></td><tr>";
}
?>
</ol>
</table>                
       









</td>

</table>
</body>
</body>
<body>

</body>
</html>
