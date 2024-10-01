package main

import "fmt"
func isSubsequence(s string, t string) bool {
    i, j := 0, 0
    for i < len(s) && j < len(t) {
        if s[i] == t[j] {
            i++ // Move the pointer in s if a match is found
        }
        j++ // Always move the pointer in t
    }
    return i == len(s) // Check if we matched all characters in s
}

// Example usage:
func main() {
	fmt.Println(isSubsequence("abc", "ahbgdc"))  // Output: true
 fmt.Println(isSubsequence("axc", "ahbgdc"))  // Output: false
}