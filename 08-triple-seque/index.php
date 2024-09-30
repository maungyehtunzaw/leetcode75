<?php
function increasingTriplet($nums) {
    $first = PHP_INT_MAX;
    $second = PHP_INT_MAX;

    foreach ($nums as $num) {
        if ($num <= $first) {
            $first = $num;  // Update first
        } elseif ($num <= $second) {
            $second = $num;  // Update second
        } else {
            return true;  // We found the triplet
        }
    }

    return false;
}

// Example usage:
$nums1 = [1, 2, 3, 4, 5];
$nums2 = [5, 4, 3, 2, 1];
$nums3 = [2, 1, 5, 0, 4, 6];
echo increasingTriplet($nums1) ? 'true' : 'false'; // Output: true
echo increasingTriplet($nums2) ? 'true' : 'false'; // Output: false
echo increasingTriplet($nums3) ? 'true' : 'false'; // Output: true