function canPlaceFlowers(flowerbed, n) {
    for (let i = 0; i < flowerbed.length; i++) {
        if (flowerbed[i] === 0 &&
            (i === 0 || flowerbed[i - 1] === 0) &&
            (i === flowerbed.length - 1 || flowerbed[i + 1] === 0)) {
            flowerbed[i] = 1;  // Plant the flower
            n--;  // One less flower to plant
        }
        
        if (n <= 0) {
            return true;  // All flowers planted
        }
    }
    
    return false;  // Couldn't plant all flowers
}

// Test cases
console.log(canPlaceFlowers([1, 0, 0, 0, 1], 1));  // Output: true
console.log(canPlaceFlowers([1, 0, 0, 0, 1], 2));  // Output: false