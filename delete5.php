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
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from clients where id='$id'");
echo '<div align="bottom"><font color=green> CLIENT DELETED SUCCCESSFULL</font><br></div>';
echo "<META http-equiv=refresh content=1;URL=delete4.php>";
if($query1)
{
	('location:delete4.php');

}
}
?>
</body>
</html>

 