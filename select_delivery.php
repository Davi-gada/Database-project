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

   echo "<form action=\"selectdelivery.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select cname from CUSTOMER";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "CUSTOMER Name: <select name=\"cname\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[cname]'>$val[cname]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>There are no Customer DELIVERY ORDERS in the system!</p>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>
</div>

</body>
</html>
