<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforInsert.css">
</head>
<body>
  <h1>Dwayne's Lo Scoglio</h1>
<div>

<?php

if(isset($_COOKIE["username"]))
{

   echo "<form action=\"deletemenu.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select mname from MENU";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "MENU item Name: <select name=\"mname\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[mname]'>$val[mname]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"Delete\">";
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
