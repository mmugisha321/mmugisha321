<!DOCTYPE php>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Online voting miss Rwanda</title>
    
        <link rel="icon" href="miss logo.png" type="image/x-png">
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
<head>



    
  </head>

  <body>

  



        <?php
include('config.php');
$query1=mysql_query("select fname, lname, gender, age, level, reg, department from students");
echo "<table><tr><th id=td>first Name</td> <th id=td>last name</td> <th id=td>Gender</td> <th id=td>Age</td> <th id=td>Level</td> <th id=td>Registration Number</th> <th id=td>Department</th> <th id=td>Delete</th>";

while($query2=mysql_fetch_array($query1))

{
echo "<tr><td id=td>".$query2['fname']."</td>";
echo "<td id=td>".$query2['lname']."</td>";

echo "<td id=td>".$query2['gender']."</td>";
echo "<td id=td>".$query2['age']."</td>";

echo "<td id=td>".$query2['level']."</td>";
echo "<td id=td>".$query2['reg']."</td>";
echo "<td id=td>".$query2['department']."</td>";

echo "<td><a href='edit2.php?id=".$query2['id']."'><img src=images/edit.png height=22 width=22></a></td></<tr>";
}
?>




  </body>
</html>