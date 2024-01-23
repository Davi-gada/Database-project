<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforSelects.css">
</head>

<body>
 <table cellspacing="0" cellpadding="0" align="center" border="1px" style="width:600px; line-height:40px;">
 <tr class = "heading">
     <th colspan="3"><h2>Dine In List</h2></th>
     </tr>
           <th style="color:white; font-size: 20px;"> Order Number </th>
           <th style="color:white; font-size: 20px;"> Time Slot </th>
           <th style="color:white; font-size: 20px;"> Customer Name </th>
     </tr>

<div>

<?php

if(isset($_COOKIE["username"])) {
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select * from TAKEOUT where cname='$_POST[cname]'";

   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {

      while($rec = $result->fetch_assoc()) {

		echo "<tr class ='data'>";
		echo "<td>$rec[orderno]</td>";
		echo "<td>$rec[taketime]</td>";
    echo "<td>$rec[cname]</td>";
		echo "</tr>";
      }
      echo "</table>";


   } else {

      echo "<p>CUSTOMER $_POST[cname] has no TAKEOUT Orders.</p>";

   }

}
else
{
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}

?>
</div>

</body>

<p align="right">
<button onclick="window.location.href='main.php';">
      Return Home
    </button>
</p>

  </html>
