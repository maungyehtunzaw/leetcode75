<?php
class Solution {

/**
 * @param String $str1
 * @param String $str2
 * @return String
 */
public function gcd($a, $b) {
    return $b === 0 ? $a : $this->gcd($b, $a % $b);
}

public function gcdOfStrings($str1, $str2) {
    // Handle empty strings gracefully
    if (empty($str1) || empty($str2)) {
        return "";
    }

    // Efficiently find the greatest common divisor (GCD) of string lengths
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $gcd = $this->gcd($len1, $len2);

    // Extract the common substring of length GCD
    $commonSubstring = substr($str1, 0, $gcd);

    // Verify if the common substring is a prefix of both strings
    if (strpos($str1, $commonSubstring) === 0 && strpos($str2, $commonSubstring) === 0) {
        return $commonSubstring;
    } else {
        return "";
    }
}
}

echo (new Solution())->gcdOfStrings("ABCABC", "ABC")."\n"; // Output: "ABC"
echo (new Solution())->gcdOfStrings("ABABAB", "ABAB")."\n"; // Output: "AB"
echo (new Solution())->gcdOfStrings("LEET", "CODE"); // Output: ""

// Define the 3x3 matrix
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

$n = count($matrix);
print_r($matrix);
print_r($n);