<?php
    include 'database.php';
    
    $db = getDatabaseConnection();
    $name = $_POST['ddrinkName'];
    $sql = "DELETE FROM Drinks WHERE Name = '$name'";
        
    $stmt = $db -> prepare($sql);
    $stmt -> execute();
    header("Location: adminPage.php?insert=success");
?>