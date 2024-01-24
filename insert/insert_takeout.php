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

   echo "<form action=\"inserttakeout.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);


   $sql = "select cname from CUSTOMER";
   $sql1 = "select mname from MENU";
   $result = $conn->query($sql);
   $result1 = $conn->query($sql1);

   if($result->num_rows != 0)
   {
      echo "TAKEOUT Time: <input type=text name=\"taketime\" size=4> <br><br>";
      echo "CUSTOMER name: <select name=\"cname\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[cname]'>$val[cname]</option>";

      }

      echo "</select>";

      echo "<input type=submit name=\"submit\" value=\"Add TAKEOUT Order\">";
   }
   else
   {
      echo "<H3>There are no customers in the system! </H3>";
   }

   echo "</form>";

   echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>
</div>


</body>
</html>
