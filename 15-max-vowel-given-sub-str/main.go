package main

import (
	"fmt"
)

func isVowel(c byte) bool {
	return c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u'
}

func maxVowels(s string, k int) int {
	n := len(s)
	maxVowels := 0
	currentVowels := 0

	// Step 1: Count vowels in the first window of size k
	for i := 0; i < k; i++ {
		if isVowel(s[i]) {
			currentVowels++
		}
	}
	maxVowels = currentVowels

	// Step 2: Slide the window across the string
	for i := k; i < n; i++ {
		// Subtract the outgoing character
		if isVowel(s[i-k]) {
			currentVowels--
		}
		// Add the incoming character
		if isVowel(s[i]) {
			currentVowels++
		}
		// Track the maximum number of vowels in any window
		if currentVowels > maxVowels {
			maxVowels = currentVowels
		}
	}

	return maxVowels
}

func main() {
	s := "abciiidef"
	k := 3
	fmt.Println(maxVowels(s, k)) // Output: 3
}