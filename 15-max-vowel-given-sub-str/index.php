<?php
function maxVowels($s, $k) {
    $vowels = ['a', 'e', 'i', 'o', 'u']; // Set of vowels
    $n = strlen($s);
    $maxVowels = 0;
    $currentVowels = 0;

    // Step 1: Count vowels in the first window of size k
    for ($i = 0; $i < $k; $i++) {
        if (in_array($s[$i], $vowels)) {
            $currentVowels++;
        }
    }

    $maxVowels = $currentVowels;

    // Step 2: Slide the window across the string
    for ($i = $k; $i < $n; $i++) {
        // Subtract the outgoing character
        if (in_array($s[$i - $k], $vowels)) {
            $currentVowels--;
        }
        // Add the incoming character
        if (in_array($s[$i], $vowels)) {
            $currentVowels++;
        }
        // Track the maximum number of vowels in any window
        $maxVowels = max($maxVowels, $currentVowels);
    }

    return $maxVowels;
}

// Example usage
$s = "abciiidef";
$k = 3;
echo maxVowels($s, $k); // Output: 3
echo maxVowels("aeiou", 2); // Output: 2
echo maxVowels("leetcode", 3); // Output: 2
echo maxVowels("rhythms", 4); // Output: 0
echo maxVowels("tryhard", 4); // Output: 1 tryh, ryha, yhar, hard maxium 1 vowel in each window
?>