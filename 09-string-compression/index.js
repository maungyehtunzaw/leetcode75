function compress(chars) {
    let write = 0;
    let read = 0;

    while (read < chars.length) {
        let char = chars[read];
        let count = 0;

        // Count the number of occurrences of the current character
        while (read < chars.length && chars[read] === char) {
            read++;
            count++;
        }

        // Write the character
        chars[write++] = char;

        // If the count is greater than 1, write the count as well
        if (count > 1) {
            for (let digit of String(count)) {
                chars[write++] = digit;
            }
        }
    }

    return write;
}

// Example usage:
let chars1 = ["a","a","b","b","c","c","c"];
console.log(compress(chars1));  // Output: 6, chars1 becomes ["a","2","b","2","c","3"]
console.log(chars1);

let chars2 = ["a"];
console.log(compress(chars2));  // Output: 1, chars2 becomes ["a"]

let chars3 = ["a","b","b","b","b","b","b","b","b","b","b","b","b"];
console.log(compress(chars3)); 
console.log(chars3);
 // Output: 4, chars3 becomes ["a","b","1","2"]