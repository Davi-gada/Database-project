<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforInsert.css">
</head>
<body>
  <h1>Dwayne's Lo Scoglio</h1>
<div>

<?php

if (isset($_COOKIE["username"])) {

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "delete from MENU where mname='$_POST[mname]'";
   if($conn->query($sql))
   {
	echo "<h3> MENU item information deleted!</h3>";

   } else {
      $err = $conn->errno;
      $errtxt = $conn->error;
      if($err == 1451)
      {
	 echo "<h3>Cannot delete menu item $_POST[mname]!</h3>";
	 echo "One or more $_POST[mname]  is  contained in an Order.";
      }
      else {
	 echo "you got an error code of $err. $errtxt";
      }
   }
   echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
} else {

   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>
</div>

</body>
</html>
