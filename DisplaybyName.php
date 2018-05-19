<?php
    include 'database.php';
    
    $result = getNameHTML($_GET['drinkName']);
    
    echo json_encode($result);
?>