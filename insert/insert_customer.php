<!DOCTYPE html>
<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforInsert.css">
</head>
<body>
  <h1>Dwayne's Lo Scoglio</h1>
<div>

  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Add Customer Information</h1>
          </div>
          <div class="panel-body">
            <form action="insertcustomer.php" method="post">
              <div class="form-group">
                <label for = "cname">Customer Name </label>
                <input
                  type="text"
                  class="form-control"
                  id="cname"
                  name="cname"
                />
              </div>
              <div class="form-group">
                <label for="email"> Customer Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="phone"
                  name="phone"
                />
              </div>
              <div class ="form-group">
                <label for ="paymethod"> Customer Paymethod</label>
                <input
                  type ="text"
                  class ="form-control"
                  id ="paymethod"
                  name ="paymethod"
                />
              </div>
              <input type="submit" value="Insert" value="Insert" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Dwayne's Lo Scoglio</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    </div>

    </body>
    </html>
