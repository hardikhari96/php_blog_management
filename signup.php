

<center>

<?php


session_start();
require_once("db.php");
Auth->signin()
if(isset($_SESSION['msg']))
{
	echo $_SESSION['msg'];
	session_destroy();
}

?>



<H2> SIGN IN </H2>

<form action="#" method="post" >
<table>
<tr>
<td>User Name  </td><td>
<input type="text" name="uid" /></td>
</tr>
<tr>
<td>
Password </td><td><input type="text" name="pass" /></td>
</tr>
<tr >
<td >
<input type="submit" name="sup" value="signin"/>
</td><td>
<a href="."><input type="button" value="Back"/></a></h3>
</td>
</tr > 

</table></form>
</center>