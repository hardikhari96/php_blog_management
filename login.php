<!doctype html>
<html>
	<head>
	
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	table{
		
		margin-top:5%;
		
	}
		
		
	
	</style>
	
	</head>
	
	<body>
		
			<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

				<ul class="navbar-nav">
					<a class="navbar-brand" href="#">Blog</a>
					<li class="nav-item"><a class="nav-link" href="index.php">Home </a></li>
					<li class="nav-item"><a class="nav-link" href="new.php">New Entry</a></li>
					<li class="nav-item"><a class="nav-link" href="manage.php">manage</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
					<li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
					
				</ul>
				
			</nav>
<center>



</br>
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
<input type="submit" name="submit" value="signin"/>
</td><td>
<a href="."><input type="button" value="Back"/></a></h3>
</td>
</tr > 

</table></form>


<?php

	


if(isset($_POST['submit']))
{
	
require_once('secure/validataion.php');
$obj=new userQuery();
$obj->login($_POST['uid'],$_POST['pass']);

}


?>

</center>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
	
	
	
</html>