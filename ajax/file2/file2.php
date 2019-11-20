<!DOCTYPE html>
<html lang="en">
<head>
	<title> Local JSON</title>
</head>
<body>

<button id="button1">Get User</button>
<button id="button2">Get Users</button>
<h1> User </h1>
<div id="user"></div>
<h1> Users </h1>
<div id="users"></div>

<script type="text/javascript">
//https://www.youtube.com/watch?v=82hnvUYY6QA	
document.getElementById('button1').addEventListener('click',loadUser);
document.getElementById('button2').addEventListener('click',loadUsers);	
	function loadUser()
	{
		var ahr = new XMLHttpRequest();
		ahr.open('GET','user.json',true);

		ahr.onload = function()
		{
			if(this.status == 200 ){
				//var user = JSON.parse(this.responseText);
			var user = JSON.parse(this.responseText);
			

			var output='';

			output +='<ul>'+
			'<li> id = '+user.id+'</li>'+
			'<li> name = '+user.name+'</li>'+
			'<li> mail = '+user.email+'</li>'+
			'<ul';

			document.getElementById('user').innerHTML =output;
			}
		}
		ahr.send(); //must needed
	}
	function loadUsers()
	{
		var ahr = new XMLHttpRequest();
		ahr.open('GET','users.json',true);

		ahr.onload = function()
		{
			if(this.status == 200 ){
				//var user = JSON.parse(this.responseText);
			var users = JSON.parse(this.responseText);
			

			var output='';
			for(var i in users) {
				output +='<ul>'+
				'<li> id = '+users[i].id+'</li>'+
				'<li> name = '+users[i].name+'</li>'+
				'<li> mail = '+users[i].email+'</li>'+
				'</ul>';
			}

			document.getElementById('users').innerHTML =output;
			}
		}
		ahr.send(); //must needed
	}






</script>
</body>
</html>