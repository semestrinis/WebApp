<?php

session_start();
	print("<h1>This sesion contains:</h1>");
	print("<h1>----------------------------</h1>");
	print("<p>Uname:".$_SESSION["Uname"]."</p>");
	print("<p>Email: ".$_SESSION["Email"]."</p>");
	print("<p>FirstName: ".$_SESSION["FirstName"]."</p>");
	print("<p>LastName: ".$_SESSION["LastName"]."</p>");
	print("<p>DBID: ".$_SESSION["UID"]."</p>");
	//print("<p>password: ".$_SESSION["password"]."</p>");
	print("<p>DBID: ".$_SESSION["SID"]."</p>");
	//print("<p>s: ".$_SESSION["s"]."</p>");
	//print("<p>TestVar: ".$_SESSION["TestVar"]."</p>");
	print("<h1>----------------------------</h1>");
	
	//echo "Favorite color is " . $_SESSION["Uname"] . ".<br>";
	//echo "Favorite color is " . $_SESSION["TestVar"] . ".<br>";
	print("<h1>----------------------------</h1>");
	
	print("Refferrer: ");
	print($_SERVER["HTTP_REFERER"]);
	
?>