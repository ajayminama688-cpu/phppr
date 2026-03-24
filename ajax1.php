

<button onclick="deta()"> Click </button>
<div id="result"></div>

	<script>
		function deta()
		{
			const xhttp =new XMLHttpRequest();
			xhttp.onload = function()
			{
				document.getElementById("result").innerHTML = this.responseText;
				
			}
			xhttp.open("GET","server.php",true);
			xhttp.send();
		}
		</script>