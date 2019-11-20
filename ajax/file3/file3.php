<!DOCTYPE html>
<html>
<head>
	<title>External API</title>
<style type="text/css">
	table{
		margin: 0 auto;
	}
</style>


</head>
<body>

	<button id="button">Load Github Users</button>
	<div id="data"></div>


	<script type="text/javascript">
		
		document.getElementById('button').addEventListener('click',loadUsers);

		function loadUsers(){

			var ahr = new XMLHttpRequest();

			ahr.open('GET','https://api.github.com/users',true);

			ahr.onload = function (){

				if(this.status == 200)
				{
					var users = JSON.parse(this.responseText);
					//console.log(users);

					var output='';
					output +='<table><tr><th> ID </th><th> Name </th> <th>Image</th><tr>';
					
					for(var i in users){

						output+='<tr><td>'+users[i].id+'</td><td><a href="user.php?url='+users[i].url+'">'+users[i].login+'</a></td><td><img width="100px" height="100px" src="'+users[i].avatar_url+'"></td></tr>';

					}
					output+='</table>'
					document.getElementById('data').innerHTML = output;

				}
			}

			ahr.send();

		}




	</script>

</body>
</html>