<?php 

function findMaxAverage($nums, $k) {
    $n = count($nums);
    
    // Step 1: Calculate the sum of the first window
    $currentSum = array_sum(array_slice($nums, 0, $k));
    $maxSum = $currentSum;
    
    // Step 2: Slide the window across the array
    for ($i = $k; $i < $n; $i++) {
        // Subtract the element that's sliding out and add the new one
        $currentSum = $currentSum - $nums[$i - $k] + $nums[$i];
        // Track the maximum sum
        $maxSum = max($maxSum, $currentSum);
    }
    
    // Step 3: Return the maximum average
    return $maxSum / $k;
}

// Example usage
$nums = [0, 4, 0, 3, 2];
$k = 1;
echo findMaxAverage($nums, $k); // Output: 4.00000
