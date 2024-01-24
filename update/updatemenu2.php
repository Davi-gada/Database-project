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
$sql = "update MENU set mname='$_POST[mname]',price='$_POST[price]',category='$_POST[category]' where mname='$_POST[oldname]'";
if($conn->query($sql))
{
	echo "<h3> MENU updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>MENU item name $_POST[mname] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
</div>


</body>
</html>
