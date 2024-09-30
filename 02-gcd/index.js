function gcd(a, b) {
    return b === 0 ? a : gcd(b, a % b);
}

function gcdOfStrings(str1, str2) {
    if (str1 + str2 !== str2 + str1) {
        return "";
    }
    let gcdLength = gcd(str1.length, str2.length);
    return str1.substring(0, gcdLength);
}

// Test examples
console.log(gcdOfStrings("ABCABC", "ABC"));  // Output: "ABC"
console.log(gcdOfStrings("ABABAB", "ABAB")); // Output: "AB"
console.log(gcdOfStrings("LEET", "CODE"));   // Output: ""