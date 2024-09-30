package main
func main() {
	// Test cases
	println(mergeAlternately("abc", "pqr")) // Output: "apbqcr"
	println(mergeAlternately("ab", "pqrs")) // Output: "apbqrs"
	println(mergeAlternately("abcd", "pq")) // Output: "apbqcd"
}
func mergeAlternately(word1 string, word2 string) string {
	merged := ""
	 len1 := len(word1)
	 len2 := len(word2)
	 maxLen := len1
	 if len2 > len1 {
		 maxLen = len2
	 }
 
	 for i := 0; i < maxLen; i++ {
		 if i < len1 {
			 merged += string(word1[i])
		 }
		 if i < len2 {
			 merged += string(word2[i])
		 }
	 }
 
	 return merged
 
 }