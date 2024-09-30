<?php 

function reverseWords($s) {
    // Trim leading and trailing spaces and split by whitespace
    $words = preg_split('/\s+/', trim($s));
    // Reverse the array of words
    $reversed = array_reverse($words);
    // Join the reversed array back into a string
    return implode(' ', $reversed);
}

echo reverseWords("  hello world  ");  // Output: "world hello"
?>