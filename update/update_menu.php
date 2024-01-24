<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforUpdates.css">
</head>

<h1>Dwayne's Lo Scoglio</h1>

<body>

<?php
if(isset($_COOKIE["username"])){

   echo "<form action=\"updatemenu.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select mname from MENU";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Menu Name: <select name=\"mname\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[mname]'>$val[mname]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>Umm...you may want to enter some data. ;) </p>";
   }

   echo "</form>";
}
else
{
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}

?>



</body>
</html>
