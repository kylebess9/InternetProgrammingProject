<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Greg's Gambits</title>
	<link href="greg.css" rel="stylesheet" type="text/css" />
	<script language="JavaScript" type="text/javascript">
		//str is passed to the function by the onkeyup event 
			function showHint(str)
			{
		//if nothing is typed, nothing is returned
				if (str.length==0)
				{
					document.getElementById("txtHint").innerHTML="";
					return;
				}
		//the if-else construct checks to see if the browser is older. Most modern browsers use the syntax shown in the if clause to create an XMLHttpRequest() object. But if the browser is much older, the syntax in the else clause will be used. The XMLHttpRequest object allows communication with the server. This object establishes an independent connection channel between our client-side web page and the server-side php script.	
				if (window.XMLHttpRequest) //for most modern browsers
				{
					var xmlhttp = new XMLHttpRequest();
				}
				else // code for older browsers
				{
					var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
		//The onreadystatechange event is triggered every time the readyState changes.
				xmlhttp.onreadystatechange = function()
				{
		//This checks if readyState is 4 (means request is finished and response is ready) and status is 200 (the page is found). If TRUE then response is ready.
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
		// Now we can access the server's response to the request. The 'responseText' property is used to retrieve the server's response as a string
						document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
					}
				}
		// open(method,url,async) has 3 arguments. Here the method = GET. The second argument is the location of server-side processing - gethint.php with an appended parameter, q, equal to str which holds whatever was typed into the input box. The asynch argument is set to TRUE sp that server-side script processing continues after the send() method, without waiting for a response.
				xmlhttp.open("GET","getName.php?q="+str,true);
		//the send() method executes the request
				xmlhttp.send();
			}
	</script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="container">

 <img src="images/superhero.jpg" width="120" height="120" class="floatleft" />
 <h1 id="logo"><em>Greg's Gambits </em></h1>
  
<h2 align="center"><em> Games for Everyone!</em></h2>

<p>&nbsp;</p>
<div id="nav">
  <p><a href="index.html">Home</a>
  <a href="greg.html">About Greg</a>
  <a href="play_games.html">Play a Game</a>
  <a href="sign.html">Sign In</a>
  <a href="contact.html">Contact Us</a></p>
</div>