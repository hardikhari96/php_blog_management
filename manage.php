

<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
				table
				{
					margin-top:80px;
				}
				
				
				</style>
	
</head>

<body>
<?php
	
require_once('secure/validataion.php');
$p_obj=new BlogOper();



//print_r($_GET['no']);
//echo count($_GET['no']);
if(isset($_GET['submit']) && $_GET['action'] == 'del' )
{
	if (isset($_GET['no']))
		{
				$no=count($_GET['no']);
				$t=$_GET['no'];
						
				for ( $i=0;$i<$no;$i++ )
				{
					
						//echo $t;
						
						$p_obj->edit(0,$t[$i]);
						
				
						//echo '</br>deleted </br>';
				
					
				}  
		}
				
	
} 
	?>
	
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

<ul class="navbar-nav">
<a class="navbar-brand" href="#">
    Blog
  </a>
<li class="nav-item"><a class="nav-link" href="">Home </a></li>
<li class="nav-item"><a class="nav-link" href="new.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="manage.php">manage</a></li>
<li class="nav-item"><a class="nav-link"	 href="logout.php">Logout</a></li>

	<form class="form-inline" action="">
    <input class="form-control mr-sm-1" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>

</ul>
</nav>



	<?php
	
$posts=$p_obj->fetchblog();
if($posts->num_rows >0)
		{
			
				?>
			<form action="#" method="get">
		
			<table border="2" >
			<tr class="submit"><td><select name="action">
				<option >Select </option>
				<option value="del">Delete</option>
			</select></td><td>	<input type="submit" name="submit"></td></tr>
			<tr><th> Select</th><th> No </th><th>username </th><th>Time(dd/mm/yy)</th><th>Blog</th><th>Delete </th><th> Edit </th></tr>

				<?php
			
			
			while($row=$posts->fetch_assoc())
			{
				?>
				<tr >
				
				<td align="center">	<input type="checkbox" name="no[]" value="<?php echo $row['no']; ?>" >		</td> 
				
				<td>	<?php echo $row['no']; ?> 		</td> 
				<td>	<?php echo $row['username']; ?>	</td> 
				<td>	<?php echo $row['time']; ?>		</td>
				
				<td><textarea cols="70" rows="5" wrap  readonly>	<?php echo $row['post']; ?>	</textarea></td>
				<td align="center">	<a href="manage.php?action=del&submit=Submit+Query&no[]=<?php echo $row['no']; ?>">Delete </a>		</td>
				<td align="center">	<a href="edit.php?no=<?php echo $row['no']; ?>">Edit </a>		</td>
				</tr>
				
				<?php
				
			}
				?>
				
				</table>
				
				</form>
				<?php
				
		}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>