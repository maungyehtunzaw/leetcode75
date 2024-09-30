<?php
 function compress(&$chars) {
    $write = 0;
    $read = 0;
    
    while ($read < count($chars)) {
        $char = $chars[$read];
        $count = 0;
        
        // Count the number of occurrences of the current character
        while ($read < count($chars) && $chars[$read] == $char) {
            $read++;
            $count++;
        }
        
        // Write the character
        $chars[$write++] = $char;
        
        // If the count is greater than 1, write the count as well
        if ($count > 1) {
            foreach (str_split(strval($count)) as $digit) {
                $chars[$write++] = $digit;
            }
        }
    }
    
    return $write;
}
$chars1 = ["a","a","b","b","c","c","c"];
$newLength1 = compress($chars1);  // Output: 6, chars1 becomes ["a","2","b","2","c","3"]
print_r(array_slice($chars1, 0, $newLength1));
echo PHP_EOL;

$chars2 = ["a"];
$newLength2 = compress($chars2);  // Output: 1, chars2 becomes ["a"]
print_r(array_slice($chars2, 0, $newLength2));
echo PHP_EOL;

$chars3 = ["a","b","b","b","b","b","b","b","b","b","b","b","b"];
$newLength3 = compress($chars3);  // Output: 4, chars3 becomes ["a","b","1","2"] .. store each 1..2
print_r(array_slice($chars3, 0, $newLength3));

echo PHP_EOL;

// // Example usage:
// $chars1 = ["a","a","b","b","c","c","c"];
// print_r(compress($chars1));  // Output: 6, chars1 becomes ["a","2","b","2","c","3"]
// print_r($chars1);
// echo PHP_EOL;
// $chars2 = ["a"];
// print_r(compress($chars2));  // Output: 1, chars2 becomes ["a"]
// print_r($chars2);
// echo PHP_EOL;
// $chars3 = ["a","b","b","b","b","b","b","b","b","b","b","b","b"];
// print_r(compress($chars3));  // Output: 4, chars3 becomes ["a","b","1","2"]
// echo PHP_EOL;
// print_r($chars3);