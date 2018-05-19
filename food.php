<?php
    include 'database.php';
    session_start();
    
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
    <body>
       <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Drinkepedia</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="active"><a href="food.php">Food</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
            
        <div class='container'>
                <br /> <br /> <br />
                    <div class="text-center">
                        <form method="get">
                            <label for="fName">Food Name</label>
                            <input type="text" class="form-control" name="foodName" id="fName" placeholder="Name">
                            <br>
                            
                            <p>Choose the style of the food.</p>
                            <select id="style" name="style">
                                <option value="Null">Select One</option>
                                <option value="Salty">Salty</option>
                                <option value="Spicy">Spicy</option>
                            </select><br>
                                
                        </form>
                        <input id="food_btn" type="submit" value="Submit" class="btn btn-default">
                    </div>
                    
                    <br /><br />
                
                <div id="foodDisplay"></div>
                
                <br/> <br/> <br/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/handleFood.js"></script>
            </div>
        </div>
    </body>
</html>
