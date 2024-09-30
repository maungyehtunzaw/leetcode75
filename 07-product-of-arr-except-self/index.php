<?php
function productExceptSelf($nums) {
    $n = count($nums);
    $answer = array_fill(0, $n, 1);
    print_r($answer);
    // Calculate left products
    $left = 1;
    for ($i = 0; $i < $n; $i++) {
        $answer[$i] = $left;
        $left *= $nums[$i];
    }
    print_r($answer);

    // Calculate right products and multiply them with the current value in the answer
    $right = 1;
    for ($i = $n - 1; $i >= 0; $i--) {
        $answer[$i] *= $right;
        $right *= $nums[$i];
    }

    return $answer;
}

// Example Usage:
$nums = [1, 2, 3, 4];
$result = productExceptSelf($nums);
print_r($result); // Output: [24, 12, 8, 6]
?>