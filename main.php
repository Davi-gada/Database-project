<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dwayne's Lo Scoglio</title>
  <link rel="stylesheet" href="css/style2.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>


<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Dwayne's Lo Scoglio</a></div>
        <ul class="links">
          <li>
            <a href="#" class="desktop-link">Menu</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Menu</label>
            <ul>
              <li><a href="selectmenu2.php">View</a></li>
              <li><a href="insert_menu.php">Insert</a></li>
              <li><a href="update_menu.php">Update</a></li>
              <li><a href="delete_menu.php">Delete</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Customer</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Customer</label>
            <ul>
              <li><a href="selectcustomer2.php">View</a></li>
              <li><a href="insert_customer.php">Insert</a></li>
              <li><a href="update_customer.php">Update</a></li>
              <li><a href="delete_customer.php">Delete</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Order Status</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Order Status</label>
            <ul>
            <li>
                <a href="#" class="desktop-link">Dine In</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">Dine In</label>
                <ul>
                  <li><a href="select_dine_in.php">View </a></li>
                  <li><a href="selectdine_in2.php">View All</a></li>
                  <li><a href="insert_dine_in.php">Insert</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="desktop-link">Takeout</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">Takeout</label>
                <ul>
                  <li><a href="select_takeout.php">View </a></li>
                  <li><a href="selecttakeout2.php">View All</a></li>
                  <li><a href="insert_takeout.php">Insert</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="desktop-link">Delivery</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">Delivery</label>
                <ul>
                  <li><a href="select_delivery.php">View </a></li>
                  <li><a href="selectdelivery2.php">View All</a></li>
                  <li><a href="insert_delivery.php">Insert</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Contains</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Contains</label>
            <ul>
              <li><a href="insert_contains.php">Insert</a></li>
              <li><a href="select_contains.php">View </a></li>
              <li><a href="selectcontains2.php">View All</a></li>
            </ul>
          </li>
          <li>
            <a href="selectorders2.php" class="desktop-link">Orders</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Orders</label>
          </li>
          <li>
            <a href="logout.php" class="desktop-link">Logout</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Logout</label>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="bg">
    <img width = "1536" height = "705" src="TheRock.jpg" alt = "Link Bow" />
    </div>

</body>

</html>
