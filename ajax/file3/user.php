<?php

$url = $_GET['url'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onLoad="data()">


<a href="file3.php">Go Back</a>
<div id="data"></div>



<script type="text/javascript">
	

function data(){


			var ahr = new XMLHttpRequest();

			ahr.open('GET','<?php echo $url; ?>',true);

			ahr.onload = function (){
				if(ahr.status == 200){

					var profile = JSON.parse(this.responseText);

					var output ='';

					output = '<ul>'+
							'<li>Id = '+profile.id+'</li>'+
							'<li><img width="100px" height="100px" src="'+profile.avatar_url+'"></li>'+
							'<li>Name ='+profile.name+'</li>'+
							'<li>Email = '+profile.email+'</li>'+
							'<li>Followers = '+profile.followers+'</li>'+
							'<li>Following = '+profile.following+'</li>';
					document.getElementById('data').innerHTML = output;
				}

			}

			ahr.send();




}

</script>
</body>
</html>