function reverseWords(s) {
    // Trim leading and trailing spaces, split by spaces, and filter out empty elements
    let words = s.trim().split(/\s+/);
    // Reverse the words array and join them back into a string
    return words.reverse().join(' ');
}

console.log(reverseWords("  hello world  "));  // Output: "world hello"
console.log(reverseWords("the sky is blue"));  // Output: "blue is sky the"
console.log(reverseWords("a bad   good   example"));  // Output: "example good a"