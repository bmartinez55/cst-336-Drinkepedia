<?php
    include 'database.php';
    
    $results = getFoodNameHTML($_GET['foodName']);
    
    echo json_encode($results);
?>