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

   echo "<form action=\"insertdine_in.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);


   $sql = "select cname from CUSTOMER";
   $result = $conn->query($sql);

   if($result->num_rows != 0)
   {
      echo "Timeslot: <input type=text name=\"timeslot\" size=4> <br><br>";
      echo "Number of People: <input type=text name=\"peopleno\" size=4> <br><br>";
      echo "CUSTOMER name: <select name=\"cname\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[cname]'>$val[cname]</option>";

      }


      echo "</select>";



      echo "<br>";


      echo "<input type=submit name=\"submit\" value=\"Add DINE_IN Order\">";
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
