<?php
function canPlaceFlowers($flowerbed, $n) {
    $length = count($flowerbed);
    
    for ($i = 0; $i < $length; $i++) {
        if ($flowerbed[$i] == 0 && 
           ($i == 0 || $flowerbed[$i - 1] == 0) && 
           ($i == $length - 1 || $flowerbed[$i + 1] == 0)) {
            $flowerbed[$i] = 1;  // Plant the flower
            $n--;  // One less flower to plant
        }
        
        if ($n <= 0) {
            return true;  // All flowers planted
        }
    }
    
    return false;  // Couldn't plant all flowers
}

// Test cases
echo canPlaceFlowers([1, 0, 0, 0, 1], 1) ? "true" : "false";  // Output: true
echo canPlaceFlowers([1, 0, 0, 0, 1], 2) ? "true" : "false";  // Output: false