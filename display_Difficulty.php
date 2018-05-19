<?php
    include 'database.php';
    
    $result = getComplexityHTML($_GET['complex']);
    
    echo json_encode($result);
?>