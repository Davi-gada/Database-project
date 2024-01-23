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
$sql = "update CUSTOMER set cname='$_POST[cname]',email='$_POST[email]', phone='$_POST[phone]',paymethod='$_POST[paymethod]' where cname='$_POST[oldname]'";
if($conn->query($sql))
{
	echo "<h3> Customer info updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>Customer name $_POST[cname] already exists!</p>";
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
