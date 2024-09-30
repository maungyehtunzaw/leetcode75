package main

import "fmt"
func main() {
	fmt.Println(gcdOfStrings("ABCABC", "ABC"))  // Output: "ABC"
    fmt.Println(gcdOfStrings("ABABAB", "ABAB")) // Output: "AB"
    fmt.Println(gcdOfStrings("LEET", "CODE"))   // Output: ""
}
func gcd(a, b int) int {
    if b == 0 {
        return a
    }
    return gcd(b, a%b)
}

func gcdOfStrings(str1, str2 string) string {
    if str1 + str2 != str2 + str1 {
        return ""
    }
    gcdLength := gcd(len(str1), len(str2))
    return str1[:gcdLength]
}