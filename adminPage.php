<?php
    include 'database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Drinkepedia</title>
    </head>
    
    <body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/white-wallpapers-8.jpg">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Drinkepedia</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
          </div>
        </nav>
        <h1>Welcome to the Administrator Page</h1>
        <div class="container">
            <br>
            <div class="delete">
                <form method="POST" action="deleteDrink.php">
                    <p>To delete a drink, insert the name of the drink.</p>
                    <input type="text" class="form-control" name="ddrinkName" id="pName" placeholder="Name">
                    <input id="delete_btn" type="submit" value="Submit" class="btn btn-default">
                </form>
            </div>
            <br>
            <div class="add">
                <form method="post" action="addDrink.php">
                    <p>To insert a drink, input the name of the drink.</p>
                    <input type="text" class="form-control" name="drinkImage" id="pImage" placeholder="Image Address"><br>
                    <input type="text" class="form-control" name="newName" id="pName" placeholder="Name"><br>
                    <input type="text" class="form-control" name="drinkOrigin" id="pOrigin" placeholder="Origin"><br>
                    <input type="text" class="form-control" name="drinkComplex" id="pComplex" placeholder="Complexity"><br>
                    <input type="text" class="form-control" name="drinkIngredients" id="pIngre" placeholder="Ingredients e.g. 1) 1 ounce Water<br>"><br>
                    <input id="insert_btn" type="submit" value="Submit" class="btn btn-default">
                </form>
            </div>
            
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/handle.js"></script>
        </div>
    </body>
</html>