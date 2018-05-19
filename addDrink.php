<?php
    include 'database.php';
    
    $db = getDatabaseConnection();
    $img = $_POST['drinkImage'];
    $name = $_POST['newName'];
    $origin = $_POST['drinkOrigin'];
    $complex = $_POST['drinkComplex'];
    $ingredients = $_POST['drinkIngredients'];
    
    $sql = "INSERT INTO Drinks (Image, Name, Origin, Complexity, Ingredients) VALUES ('$img', '$name', '$origin', '$complex', '$ingredients')";
    
    $stmt = $db -> prepare($sql);
    $stmt -> execute();
    
    header("Location: adminPage.php?insert=success");
?>