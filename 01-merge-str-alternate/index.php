<?php 
class solution {
    public function mergeAlternately($word1, $word2) {
        $result = '';
        $i = 0;
        $j = 0;
        while ($i < strlen($word1) || $j < strlen($word2)) {
            if ($i < strlen($word1)) {
                $result .= $word1[$i];
                $i++;
            }
            if ($j < strlen($word2)) {
                $result .= $word2[$j];
                $j++;
            }
        }
        return $result;
    }
}

class Solution2 {

/**
 * @param String $word1
 * @param String $word2
 * @return String
 */
function mergeAlternately($word1, $word2) {
$merged = '';
$len1 = strlen($word1);
$len2 = strlen($word2);
$maxLen = max($len1, $len2);

for ($i = 0; $i < $maxLen; $i++) {
    if ($i < $len1) { //check for index
        $merged .= $word1[$i];
    }
    if ($i < $len2) {
        $merged .= $word2[$i];
    }
}

return $merged;
}

}
print_r((new Solution())->mergeAlternately("abc", "pqr")); // Output: "apbqcr"
print_r((new Solution())->mergeAlternately("ab", "pqrs")); // Output: "apbqrs"