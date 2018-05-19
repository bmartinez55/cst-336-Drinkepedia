<?php
    session_start();
    
    include 'database.php';
    $connect = getDatabaseConnection();
    
    //Checking credentials in database
    $sql = "SELECT * FROM User WHERE Username = :username AND Password = :password";
    
    $stmt = $connect->prepare($sql);
    $data = array(":username" => $_POST['username'], ":password" => sha1($_POST['password']));
    echo sha1($_POST['password']);
    $stmt->execute($data);
    $user=$stmt->fetch(PDO::FETCH_ASSOC);
    print_r($user);
    //redirecting user to quiz if credentials are valid
    if($user['Username'] == "admin1"){
        $_SESSION['username'] = $user['Username'];
        header('Location: adminPage.php');
    } else {
    echo "The values you entered were incorrect. <a href='login.php'>Retry</a>";
    }
?>