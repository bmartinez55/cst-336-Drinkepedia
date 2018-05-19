<?php
    include 'database.php';
    
    $results = getFoodStyleHTML($_GET['style']);
    
    echo json_encode($results);
?>