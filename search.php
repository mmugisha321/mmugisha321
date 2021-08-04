
<?php
$conn = mysqli_connect("localhost", "root", "", "esms");
if ($conn-> connect_error)
{
die("connection failed:". $conn-> connect_error);
$output='';
}                  
//$sql = "select * from pc";
//$result = $conn-> query($sql);
if (isset($_POST['search']))
{
$searchq=$_POST['search'];
$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
$query=mysql_query("select * from pc where id LIKE '%$searchq%'")or die("could not search!!!");
$count=mysql_num_rows(query);

if($count==0)
	{
	$output='There was no search result!';
}
	else
{
	while ($row = $result-> fetch_assoc ())
		$os_name=$row['os_name'];
        $system=$row['system'];
        $serial=$row['serial'];
        $ram=$row['ram'];
        $processor=$row['processor'];
        $bios_model=$row['bios_model'];
        $hd=$row['hd'];
		$id=$row['id'];
		$output.='<div>'.$id.'</div>';
}
}
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>search</title>
</head>

<body>

<form action="search.php"method="post">
<input type="text" name="search" placceholder="search for computer..."/>
<input type="submit" value=">>>"/>

</form>
<?php print ("$output");?>
</body>
</html>
