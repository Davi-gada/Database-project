<!DOCTYPE html>
<html>
<head>
    <title>Dwayne's Lo Scoglio</title>
    <link rel="stylesheet" href="css/styleforInsert.css">
</head>
<body>
  <h1>Dwayne's Lo Scoglio</h1>
<div>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Add a New Menu Item</h1>
          </div>
          <div class="panel-body">
            <form action="insertmenu.php" method="post">
              <div class="form-group">
                <label for = "mname">Item Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="mname"
                  name="mname"
                />
              </div>
              <div class="form-group">
                <label for="price">Menu Price $</label>
                <input
                  type="number"
                  step = 0.01
                  class="form-control"
                  id="price"
                  name="price"
                />
              </div>
              <div class ="form-group">
                <label for ="category"> Menu Category</label>
                <input
                  type ="text"
                  class ="form-control"
                  id ="category"
                  name ="category"
                />
              </div>

              <input type="submit" value="Insert" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <br>
            <small>&copy; Dwayne's Lo Scoglio</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    </div>


    </body>
    </html>
