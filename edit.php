

<center>

<?php
	
require_once('secure/validataion.php');
$p_obj=new BlogOper();

if(isset($_POST['post']))
{
	
	$p_obj->edit(1,$_GET['no'],$_POST['post']);
	
	
}
$posts=$p_obj->fetchblog($_GET['no']);

if($posts->num_rows >0)
		{
			
				?>
				<style>
				input[type=button],input[type=submit]
				{
					width:100%;
					height:50px;
					font-size:20px;
				}
				*{
					
					font-size:20px;
				}
				
				</style>
			<form action="#" method="post">
		
			<table border="2" >
			
			<tr><th> No </th><th>username </th><th>Time(dd/mm/yy)</th><th>Blog</th></tr>

				<?php
			
			
			while($row=$posts->fetch_assoc())
			{
				
				
				?>				
				
				<tr>
				
				<td align="center"><?php echo $row['no']; ?></td> 
				<td align="center">	<?php echo $row['username']; ?>	</td> 
				<td>	<?php echo $row['time']; ?>		</td>
				
				<td><textarea cols="70" rows="5" name="post" wrap>	<?php echo $row['post']; ?>	</textarea></td>
				
				</tr>
				<?php
				
			}
				?>
				<tr><td colspan="2">	<a href="./manage.php"><input type="button" value="Back"></a></td><td align="center">Edit</td><td>	<input type="submit" ></td><td></td></tr>
				</table>
				
				</form>
				<?php
				
		}
		

?>