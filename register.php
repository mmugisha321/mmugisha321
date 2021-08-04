<?php
$server="localhost";
$database="go";
$login="root";
$password="";
$connexion=mysql_connect ($server, $login, $password) or die ('Server cannot be found'.mysql_error ( ));
mysql_select_db ($database,$connexion)or die ('database cannot be found'.mysql_error( ));
if(@$_POST['submitButton'])
{
$query="insert into log values('$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[name]','$_POST[pass]')";
 
if($query)
  {
   print ("<script>alert('PERSON registered successfull!')</script>");
  }
  
else
{
print ("<script>alert('person  not registered!')</script>");
}
$answer=mysql_db_query ($database, $query);
}
mysql_close ($connexion);

?>

