<?php
function isSubsequence($s, $t) {
    $s_len = strlen($s);
    $t_len = strlen($t);
    $i = 0; // Pointer for s
    $j = 0; // Pointer for t

    while ($i < $s_len && $j < $t_len) {
        if ($s[$i] === $t[$j]) {
            $i++; // Move the s pointer if a match is found
        }
        $j++; // Always move the t pointer
    }

    return $i === $s_len; // If we matched all characters in s
}

function isSubsequenceRecursive($s, $t) {
    // Base cases
    if (empty($s)) return true;
    if (empty($t)) return false;

    // If the first characters match, move to the next character in both strings
    if ($s[0] === $t[0]) {
        return isSubsequenceRecursive(substr($s, 1), substr($t, 1));
    }

    // If they don't match, move to the next character in t and try again
    return isSubsequenceRecursive($s, substr($t, 1));
}
// Example usage:
$s = "abc";
$t = "ahbgdc";
var_dump(isSubsequence($s, $t));  // Output: true

$s = "axc";
$t = "ahbgdc";
var_dump(isSubsequence($s, $t));  // Output: false

$s = "abc";
$t = "ahbgdc";
var_dump(isSubsequenceRecursive($s, $t));  // Output: true