<!Doctype html>
<html lang="en">
	<head>
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
					<li style="float:right;"><a href="#" class="login">Log Out</a></li>
					
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
						<td colspan="2"></td>
						<td colspan="2"><a href=""> Create New Blog  </a></td> 	 
					</tr>
					<tr>
						<th> Select</th>
						<th> No </th>
						<th>Time(dd/mm/yy)</th>
						<th>Blog Title</th>
						<th>Delete </th>
						<th> Edit</th>
					</tr>
					<!---- Data Print ------>
					
					<tr>	
						<td align="center">	<input type="checkbox" name="no[]" value="" ></td> 
						<td></td> 		
						<td></td>	<td><textarea cols="70" rows="4">	</textarea></td>
						<td align="center">	<a href="">Delete </a>		</td>
						<td align="center">	<a href="">Edit </a>		</td>
					</tr>	
					
				</table>
				
				</form>
			
		</div>
		

		<div class="footer">
			<p> This website designed and developed by Harikrusna Patel</p>
		</div>
	</body>
	
</html>