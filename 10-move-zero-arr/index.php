<?php
function moveZeroes(&$nums) {
    $index = 0; // To keep track of the next position for non-zero elements

    // Loop through the array
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] != 0) {
            $nums[$index++] = $nums[$i]; // Place non-zero elements at the correct position
        }
    }

    // After placing all non-zero elements, fill the rest with 0
    while ($index < count($nums)) {
        $nums[$index++] = 0;
    }
}

function moveZeroes2(&$nums) {
        
    $nonZero = array_filter($nums, function($num) {
return $num !== 0;
});
print_r($nonZero);

$zeroes = array_filter($nums, function($num) {
return $num === 0;
});
print_r($zeroes);
$a = array_values($nonZero);
$b = array_values($zeroes);
// Merge non-zero elements followed by zeroes
$numb= [...$nonZero, ...$zeroes];
print_r($a);
print_r($b);
$result = array_merge($a, $b);
return $result;
}

function moveZeroes3(&$nums) {
    $nonZero = array_filter($nums, function($num) {
      return $num !== 0; // Collect non-zero elements
  });

  $zeroCount = count($nums) - count($nonZero); // Count zeroes

  // Overwrite original array with non-zero elements
  $nums = array_values($nonZero); 

  // Append the required number of zeroes at the end
  for ($i = 0; $i < $zeroCount; $i++) {
      $nums[] = 0; // Append zeroes manually
  }
  return $nums;   
  }

// Example usage:
$nums = [0, 1, 0, 3, 12];
moveZeroes2($nums);
print_r($nums); // Output: [1, 3, 12, 0, 0]