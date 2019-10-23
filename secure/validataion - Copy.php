
<?php


class userQuery{
	
	private $server='localhost';
	private $user='root';
	private $pass='';
	private $database='hp_db';
	
	public function connect()
	{
		$conn = new mysqli($this->server, $this->user, $this->pass, $this->database);
		if($conn)
		{
			
		echo "Databaese connected And ";	
		return $conn;
		
		}
		else {
			echo "Database Not Connected </br>";
		exit;
		}
	}
	
	public function login($uname,$pass)
	{
		
		$sql="select * from user where u_nm='".$uname."' && u_pwd='".$pass."' limit 1;";
		
		$result = $this->connect()->query($sql);
		//$row=$result->fetch_assoc();
		//global $name = $row['name'];
		
		if ($result->num_rows > 0) {
		echo " logged in  </br>";
		session_start();
		$_SESSION['status']=true;
		//header('location:..');
		}
		else
		{
		$_SESSION['msg']="No such user is in our record , Kingly SignUp";
			
		echo "not fatched</br>";	
		}
	}
	public function signup($name,$uname,$pass)
	{
		
		$sql="insert into user(name,u_nm,u_pwd) values('".$name."','".$uname."','".$pass."');";
		//echo $sql;
		$result = $this->connect()->query($sql);
	
		if ($result==TRUE) {
			echo "New record created successfully</br>";
			//header('location: ../login.php');
		} else 
		{
			
			$_SESSION['msg']="Already You have signed Up";
			echo 'Record is Duplicate</br>';
		  

		}
	}
}

/* CREATE TABLE `hp_db`.`blog`( `no` BIGINT(255) NOT NULL, `username` VARCHAR(20) NOT NULL, `time` DATETIME(6) NOT NULL, `post` TEXT )
 */
class BlogOper extends userQuery{
	
	
	
	public function blogpost($u_name,$post)
	{
		
			$obj=$this->connect();
			$time=date("d/m/y");
			$query="insert into `blog`(`username`,`time`,`post`) values('".$u_name."','".$time."','".$post."')"; 
			$ins=$obj->query($query);
			if($ins)
			{
				echo "Post is Inserted </br>";
			}
			else {
				
				echo "error</br>";
			}
			
		
		
	}
	
	public function fetchblog()  // Example Of fetching not permenant
	 {
		
		$obj=parent::connect();  //using scope resolution insted of $this->connect()
		$query="Select * from `blog`";
		$posts=$obj->query($query); //$obj->query($query)
		//$posts->fetch();
		//print_r($row=$posts->fetch_assoc());
		
		if($posts->num_rows >0)
		{
			
				?>
			<table border="2" >
			<tr><th> No </th><th>username </th><th>Time(dd/mm/yy)</th><th>Blog</th><th>Action</th></tr>

				<?php
			
			
			while($row=$posts->fetch_assoc())
			{
				?>
				<tr>
				<td>	<?php echo $row['no']; ?> 		</td> 
				<td>	<?php echo $row['username']; ?>	</td> 
				<td>	<?php echo $row['time']; ?>		</td>
				
				<td><textarea cols="70" rows="5" wrap readonly>	<?php echo $row['post']; ?>	</textarea></td>
				<td>	<?php //echo $row['time']; ?><a href="">Edit</a>/<a href="">Delete</a>		</td>
				</tr>
				<?php
				
			}
				?>
				</table>
				<?php
				
		}
		
	}
	
	public function edit($action,$id,$post)
	{
		
		
		
	}
	
	public function logout()
	{
		session_destroy();
		header('location:..');
		
	}
	
	
	
}



//create object
$u_obj=new userQuery();
//signup calling function
$u_obj->signup('new','new','new');
//login calling function
$u_obj-> login('hari','hari');


//blog performance
$p_obj=new BlogOper();
$p_obj->blogpost('name','this is new post');
$p_obj->fetchblog();

?>


