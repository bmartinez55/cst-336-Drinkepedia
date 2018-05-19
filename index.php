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
    <body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/white-wallpapers-8.jpg">
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
                            <label for="pName">Drink Name</label>
                            <input type="text" class="form-control" name="drinkName" id="pName" placeholder="Name">
                            <br>
                            
                            <p>Choose the Complexity of the drink.</p>
                            <select id="complex" name="complex">
                                <option value="Null">Select One</option>
                                <option value="Easy">Easy</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Difficult">Difficult</option>
                            </select>
                            
                            <p>Choose the origin of the drink</p>
                            <select id="country" name="country">
                                <option value="Null">Select One</option>
                                <option value="US">United States</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Canada">Canada</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Spain">Spain</option>
                                <option value="Britain">Britain</option>
                                <option value="Italy">Italy</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Japan">Japan</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Poland">Poland</option>
                            </select>
                        </form>
                        <input id="enter_btn" type="submit" value="Submit" class="btn btn-default">
                    </div>
                    
                    <br /><br />
                
                <div id="display"></div>
                
                <br/> <br/> <br/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/handle.js"></script>
            </div>
        </div>
    </body>
</html>
