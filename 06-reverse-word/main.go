package main

import (
	"fmt"
	"regexp"
	"strings"
)

func reverseWords(s string) string {
	// Compile a regex to match one or more whitespace characters
	re := regexp.MustCompile(`\s+`)
	// Trim leading and trailing spaces, then replace multiple spaces with a single space
	trimmed := re.ReplaceAllString(strings.TrimSpace(s), " ")
	// Split the trimmed string by spaces
	words := strings.Split(trimmed, " ")
	// Reverse the words array
	for i, j := 0, len(words)-1; i < j; i, j = i+1, j-1 {
		words[i], words[j] = words[j], words[i]
	}
	// Join the reversed array back into a single string
	return strings.Join(words, " ")
}

func main() {
	fmt.Println(reverseWords("  hello world  "))        // Output: "world hello"
	fmt.Println(reverseWords("a good   example"))       // Output: "example good a"
	fmt.Println(reverseWords("  the sky is blue  "))    // Output: "blue is sky the"
}