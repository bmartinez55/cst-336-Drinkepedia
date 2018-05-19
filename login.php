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
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
        
        <h1>Login</h1>
        <h2>Credentials required before submiting form.</h2>
        <p>You can log in using usernames <strong>admin1</strong> or <strong>brye1</strong>. The password is the same as the username.</p>
        
        <!--Form to enter credentials-->
          <form method="post" action="verifyUsers.php">
              <input type="text" name="username" placeholder="Username"/><br />
              <input type="password" name="password" placeholder="Password"/><br />
              <input type="submit" name="submit" placeholder="Login"/><br />
          </form>
    </body>
</html>