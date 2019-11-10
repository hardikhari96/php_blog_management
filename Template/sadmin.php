<!Doctype html>
<html lang="en">
	<head>
		<title>Super Admin</title>
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	
	<body>
		
		<div class="header">
			<nav>	
				<ul class="navbar">
					<li><a href="#">Blog Manage</a></li>
					<li><a href="#" >Home</a></li>
					<li><a href="#">Your Blog's</a></li>
					<li><a href="#">Change Password</a></li>
					<li style="float:right;"><a href="#" class="loginlink">Log Out</a></li>
				</ul>
			</nav>
		</div>
				
		
		<div class="post-list">
			
				<form action="#" method="get">
		
			<table  class="list-item">
			
					<tr>
						<td>
							<select name="action">
							<option >Select </option>
							<option value="del">Delete</option>
							</select>
						</td>
						<td>
							<input type="submit" name="submit">
						</td>
						<td>
							<select name="searchtype">
							<option value="null">Search Type </option>
							<option value="uid">User Id</option>
							<option value="unm">User Name</option>
							<option value="name">Name</option>
							</select>
						</td>
						<td ><input type="text" name=""></td>
						<td ><button>Search User</button></td>
						<td ><a href=""> Add New user  </a></td> 	 
					</tr>
					<tr style="height:6px;">
					</tr>
					<tr>
						<th> Select</th>
						<th> No </th>
						<th>User Name</th>
						<th>User Full Name</th>
						<th> Edit Details</th>
						<th>Delete User</th>
					</tr>
					<!---- Data Print ------>
					
					<tr>	
						<td align="center">	<input type="checkbox" name="no[]" value="" ></td> 
						<td></td> 		
						<td></td>	<td></td>
						<td align="center">	<a href="#">Edit </a>		</td>
						<td align="center">	<a href="#">Delete </a>		</td>
					</tr>	
					
				</table>
				
				</form>
			
		</div>
		

		<div class="footer">
			<p> This website designed and developed by Harikrusna Patel</p>
		</div>
	</body>
	
</html>