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
if($mysqli->connect_errno)
{
   echo "Connection Issue!";
   exit;
}

$sql = "insert into CUSTOMER (cname, email, phone, paymethod) values ('$_POST[cname]','$_POST[email]','$_POST[phone]','$_POST[paymethod]')";
if($conn->query($sql))
{
	echo "<h3> CUSTOMER info added!</h3>";

} else {
   $err = $conn->errno;
   if($err == 1062)
   {
      echo "<p>Customer name $_POST[cname] already exists!</p>";
   } else {
      echo "<p>MySQL error code $err </p>";

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
