

<center>

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
	
$posts=$p_obj->fetchblog();
if($posts->num_rows >0)
		{
			
				?>
			<form action="#" method="get">
		
			<table border="2" >
			<tr><td><select name="action">
				<option >Select</option>
				<option value="del">Delete</option>
			</select></td><td>	<input type="submit" name="submit"></td></tr>
			<tr><th> Select</th><th> No </th><th>username </th><th>Time(dd/mm/yy)</th><th>Blog</th></tr>

				<?php
			
			
			while($row=$posts->fetch_assoc())
			{
				?>
				<tr>
				<td>	<input type="checkbox" name="no[]" value="<?php echo $row['no']; ?>" >		</td> 
				
				<td>	<?php echo $row['no']; ?> 		</td> 
				<td>	<?php echo $row['username']; ?>	</td> 
				<td>	<?php echo $row['time']; ?>		</td>
				
				<td><textarea cols="70" rows="5" wrap  readonly>	<?php echo $row['post']; ?>	</textarea></td>
				
				</tr>
				<?php
				
			}
				?>
				
				</table>
				
				</form>
				<?php
				
		}
?>