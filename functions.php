<?php
    function displayResults() {
        // Access Global $items array
        global $items;
        
        if(isset($items)) {
            echo "<table class='table'>";
            
            foreach($items as $item) {
                $itemName = $item['name'];
                $itemPrice = $item['price'];
                $itemImage = $item['image_url'];
                $itemId = $item['item_id'];
                
                echo "<tr>";
                if($itemImage)
                    echo "<td> <img src='$itemImage'></td>";
                echo "<td><h4>$itemName</h4></td>";
                echo "<td><h4>$$itemPrice</h4></td>";
                
                // Hidden input element containing the item name
                echo "<form method='post'>";
                echo "<input type='hidden' name='itemName' value='$itemName'>";
                echo "<input type='hidden' name='itemId' value='$itemId'>";
                echo "<input type='hidden' name='itemImage' value='$itemImage'>";
                echo "<input type='hidden' name='itemPrice' value='$itemPrice'>";
                
                if($_POST['itemId'] == $itemId) {
                    echo "<td><button class='btn btn-success'>Added</button></td>";
                } else {
                    echo "<td><button class='btn btn-warning'>Add</button></td>";
                }
                echo "</form>";
                echo "</tr>";
            }
            
            echo "</table>";
        }
    }
    
?>