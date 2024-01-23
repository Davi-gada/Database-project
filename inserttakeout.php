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


   $sql0 = "insert into ORDERS values ('$_POST[orderno]','$_POST[cname]')";
   if($conn->query($sql0))
   {

     $sql = "insert into TAKEOUT values ('$_POST[orderno]','$_POST[taketime]','$_POST[cname]')";




        if($conn->query($sql))
        {


           echo "<h3> New Order added!</h3>";

        }else {
           $err = $conn->errno;
           if($err == 1062)
           {
             echo "<p> Customer $_POST[cname] has AN ORDER pending!</p>";
           }
           else {
       echo "error number $err";
           }

        }


   }


   else {
      $err = $conn->errno;
      if($err == 1062)
      {
	 echo "<p>Customer $_POST[cname] has AN  ORDER pending!</p>";
      }
      else {
	 echo "error number $err";
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
