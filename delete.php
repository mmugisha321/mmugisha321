<html>

<head>

<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>

</head>


<body>
<?php
include('config.php');
if(isset($_GET['bus_id']))
{
$bus_id=$_GET['bus_id'];
$query1=mysql_query("delete from bus where bus_id='$bus_id'");
echo '<div align="bottom"><font color=green> BUS DELETED SUCCCESSFULL</font><br></div>';
echo "<META http-equiv=refresh content=1;URL=delete1.php>";
if($query1)
{
	('location:delete1.php');

}
}
?>
</body>
</html>

 