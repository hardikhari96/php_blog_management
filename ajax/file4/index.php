<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
</head>
<body>
<div id="abc">
	<input type="text" id="uname" placeholder="username"><br />
	<input type="password" id="pass" placeholder="password"><br />
	<input type="submit" id="submit">
</div>


<div id="dash"></div>

<script type="text/javascript">
	
	document.getElementById('submit').addEventListener('click',dash);

	function dash(e){

		e.preventDefault();
		var obj = new XMLHttpRequest();

		obj.open('POST','config.php',true);
		obj.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		
		obj.onload= function(){

			if(this.status == 200)
			{
				document.getElementById('abc').innerHTML='';
				
			
				document.getElementById('dash').innerHTML=this.responseText;

			}

		}

		obj.send('uname='+document.getElementById('uname').value+'&pass='+document.getElementById('pass').value);

	}

</script>
</body>
</html>