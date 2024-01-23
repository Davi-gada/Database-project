<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforSelects.css">
</head>

<body>
 <table cellspacing="0" cellpadding="0" align="center" border="1px" style="width:600px; line-height:40px;">
 <tr class = "heading">
     <th colspan="4"><h2>Customer List</h2></th>
     </tr>
           <th style="color:white; font-size: 20px;"> Customer Name </th>
           <th style="color:white; font-size: 20px;"> Email </th>
           <th style="color:white; font-size: 20px;"> Phone </th>
           <th style="color:white; font-size: 20px;"> Payment Method </th>
     </tr>

<div> 
<?php

if(isset($_COOKIE["username"])) {
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select * from CUSTOMER";

   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {

      while($rec = $result->fetch_assoc()) {

      echo "<tr class ='data'>";
  		echo "<td>$rec[cname]</td>";
  		echo "<td>$rec[email]</td>";
      echo "<td>$rec[phone]</td>";
  		echo "<td>$rec[paymethod]</td>";
  		echo "</tr>";
      }
      echo "</table>";


   } else {

      echo "<p>No CUSTOMERS at the moment..</p>";

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
