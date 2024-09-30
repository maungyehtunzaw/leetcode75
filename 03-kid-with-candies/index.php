<?php
class Solution
{

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $maxCandies = max($candies);
        $result = [];

        foreach ($candies as $candy) {
            $result[] = ($candy + $extraCandies) >= $maxCandies;
        }

        return $result;
    }
}
// Test case
print_r(kidsWithCandies([2, 3, 5, 1, 3], 3)); // [true, true, true, false, true]
