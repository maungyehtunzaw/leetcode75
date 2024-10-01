function isSubsequence(s, t) {
    let i = 0, j = 0;
    
    while (i < s.length && j < t.length) {
        if (s[i] === t[j]) {
            i++; // Move pointer for s if we find a match
        }
        j++; // Always move pointer for t
    }
    
    return i === s.length; // Check if we matched all of s
}

// Example usage:
console.log(isSubsequence("abc", "ahbgdc"));  // Output: true
console.log(isSubsequence("axc", "ahbgdc"));  // Output: false