<?php
    include 'database.php';
    
    $results = getOriginHTML($_GET['country']);
    
    echo json_encode($results);
?>