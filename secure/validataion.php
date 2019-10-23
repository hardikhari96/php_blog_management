
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
			
		//echo "Databaese connected And ";	
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
		//$_SESSION['msg']="No such user is in our record , Kingly SignUp";
			
		echo "not User</br>";	
		}
	}
	public function signup($name,$uname,$pass):string
	{
		
		$sql="insert into user(name,u_nm,u_pwd) values('".$name."','".$uname."','".$pass."');";
		echo $sql."</br>";
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
				echo "</br>Post is Inserted </br>";
			}
			else {
				
				echo "error</br>";
			}
			
		
		
	}
	
	public function fetchblog($no=0)  // Example Of fetching not permenant
	 {
		if($no==0)
		{
				$query="Select * from `blog`;";
		}
		else {
			$query="Select * from `blog` where no=".$no.";";
		}
			
		$obj=parent::connect();  //using scope resolution insted of $this->connect()
		
		$posts=$obj->query($query); //$obj->query($query)
		//$posts->fetch();
		//print_r($row=$posts->fetch_assoc());
		
		return $posts;
		
	}
	
	public function edit($action,$id=0,$post=NULL)
	{
		if($action==0)
		{
			
			//delete
			
			$query="DELETE from `blog` where `no`=".$id.";";
			//echo $query;
			$obj=parent::connect();
			$st=$obj->query($query);
			
			if($st==true)
			{
				
				//echo "data deleted </br>";
			}
			else
			{
				echo "Error Not deleted</br>";
			}
			//print_r($st);
			
		}else if ($action==1)
		{
			$time=date("d/m/y");
			$query="update `blog` set `time`='".$time."', `post`='".$post."' where `no`=".$id.";";
			//echo $query;
			$obj=parent::connect();
			$st=$obj->query($query);
			if($st==true)
			{
				
				echo "Edited </br>";
			}
			else
			{
				echo "Error Not edited</br>";
			}
			
			
		}
		
		
	}
	
	public function logout()
	{
		session_destroy();
		header('location:..');
		
	}
	
	
	
}



//create object
//$u_obj=new userQuery();
//signup calling function
//$u_obj->signup('new','new','new');
//login calling function
//$u_obj-> login('hari','hari');


//blog performance
//$p_obj=new BlogOper();
//$p_obj->blogpost('name','this is new post');
//$p_obj->edit(0,7);
//$p_obj->edit(1,1,"KFJKLAJFLAJDIFAIUFUJFJDF");

//$p_obj->fetchblog();


?>


