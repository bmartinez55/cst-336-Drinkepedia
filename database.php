<?php
    function getDatabaseConnection() {
        // $host = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "Recipes"; 
        //mysql://bcd5ee89f4f9c2:75197864@us-cdbr-iron-east-04.cleardb.net/heroku_962744be0fd6690?reconnect=true
        $host="us-cdbr-iron-east-04.cleardb.net";
        $username = "bcd5ee89f4f9c2";
        $password = "75197864";
        $dbname = "heroku_962744be0fd6690";
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $dbConn; 
    }
    
    function getOriginHTML($country) {
        $db = getDatabaseConnection(); 
        $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM Drinks WHERE Origin = '$country'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
    }
    function getComplexityHTML($com){
        $db = getDatabaseConnection(); 
        $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM Drinks WHERE Complexity = '$com'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
    }
    
    function getNameHTML($name) {
        $db = getDatabaseConnection(); 
        $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM Drinks WHERE Name = '$name'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        
        return $records; 
    }
    
    function getFoodNameHTML($name) {
        $db = getDatabaseConnection(); 
        $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM DrunkFood WHERE Name = '$name'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        
        return $records; 
    }
    
    function getFoodStyleHTML($style) {
        $db = getDatabaseConnection(); 
        $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM DrunkFood WHERE Style = '$style'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        
        return $records; 
    }
    
?>