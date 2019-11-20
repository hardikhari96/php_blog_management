<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body>

<button id="button">Click Me</button>
<div id="text"></div>

<script type="text/javascript">
	

// create event
document.getElementById('button').addEventListener('click',loadText);



function loadText(){
		//console.log('button clicked');

		//create xhr object

		var ahr = new XMLHttpRequest();

		// open - type, url/file , async
		//console.log(xhr);
		ahr.open('GET','sample.txt',true);

		//console.log('ready state',ahr.readyState);
		// 1: server connection established


		ahr.onprogress = function ()
		{
			//console.log('ready state',ahr.readyState);

			  // 3: processing request 
		}


		ahr.onload = function()
		{
			
		    // HTTP Statuses
		    // 200: "OK"
		    // 403: "Forbidden"
		    // 404: "Not Found"
		   // console.log('ready state',ahr.readyState);

			if (this.status == 200){

				 //console.log(this.responseText);
				document.getElementById('text').innerHTML = this.responseText;
			}
			else if (this.status == 404){
				document.getElementById('text').innerHTML = 'Not Fund';

			}
		} /* */


		ahr.onerror = function ()
		{

			console.log('Request Error...');
		}

		ahr.onreadystatechange = function() {
		
		//console.log('ready state',ahr.readyState);
			if(this.readyState == 4 && this.status == 200){
				//console.log(this.responseText)
			}


		    // readyState Values
		    // 0: request not initialized 
		    // 1: server connection established
		    // 2: request received 
		    // 3: processing request 
		    // 4: request finished and response is ready
		}


		ahr.send();
}
	
</script>
</body>
</html>