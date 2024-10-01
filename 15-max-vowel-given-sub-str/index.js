function maxVowels(s, k) {
    const vowels = new Set(['a', 'e', 'i', 'o', 'u']); // Set to store vowels
    let maxVowels = 0;
    let currentVowels = 0;

    // Step 1: Count vowels in the first window of size k
    for (let i = 0; i < k; i++) {
        if (vowels.has(s[i])) {
            currentVowels++;
        }
    }

    maxVowels = currentVowels;

    // Step 2: Slide the window across the string
    for (let i = k; i < s.length; i++) {
        // Subtract the outgoing character
        if (vowels.has(s[i - k])) {
            currentVowels--;
        }
        // Add the incoming character
        if (vowels.has(s[i])) {
            currentVowels++;
        }
        // Track the maximum number of vowels in any window
        maxVowels = Math.max(maxVowels, currentVowels);
    }

    return maxVowels;
}

// Example usage
let s = "abciiidef";
let k = 3;
console.log(maxVowels(s, k)); // Output: 3