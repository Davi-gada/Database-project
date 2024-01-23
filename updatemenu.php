<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforInsert.css">
</head>
<body>
  <h1>Dwayne's Lo Scoglio</h1>
<div>
<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updatemenu2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

	$sql = "select * from MENU where mname='$_POST[mname]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}
        if($result->num_rows!= 0)
	{
	   $rec=$result->fetch_assoc();
	   echo "MENU Name: <input type=text name=\"mname\" value=\"$rec[mname]\"><br><br>";
	   echo "MENU Price: <input type=text name=\"price\" value=\"$rec[price]\"><br><br>";
	   echo "MENU Category: <input type=text name=\"category\" value=\"$rec[category]\"><br><br>";
	   echo "<input type=hidden name=\"oldname\" value=\"$_POST[mname]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">";

	}
	else
	{
		echo "<p>Umm...you may want to enter some data. ;) </p>";
	}

	echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>
</div>


</body>
</html>
