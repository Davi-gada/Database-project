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

   echo "<form action=\"insertcontains.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);


   $sql = "select orderno from ORDERS";
   $sql1 = "select mname from MENU";
   $result = $conn->query($sql);
   $result1 = $conn->query($sql1);


   if($result->num_rows != 0)
   {
      echo "Order Number: <select name=\"orderno\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[orderno]'>$val[orderno]</option>";

      }


      echo "</select>";



      echo "<br>";
      echo "Menu Item name: <select name=\"mname\">";


      while($val1 = $result1->fetch_assoc())
      {
   echo "<option value='$val1[mname]'>$val1[mname]</option>";

      }


      echo "</select>";





      echo "<input type=submit name=\"submit\" value=\"Add Items to Order\">";
   }
   else
   {
      echo "<H3>There are no customers in the system! </H3>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>

</div>

</body>
</html>
