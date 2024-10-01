Given a string s and an integer k, return the maximum number of vowel letters in any substring of s with length k.

Vowel letters in English are 'a', 'e', 'i', 'o', and 'u'.

 

Example 1:

Input: s = "abciiidef", k = 3
Output: 3
Explanation: The substring "iii" contains 3 vowel letters.
Example 2:

Input: s = "aeiou", k = 2
Output: 2
Explanation: Any substring of length 2 contains 2 vowels.
Example 3:

Input: s = "leetcode", k = 3
Output: 2
Explanation: "lee", "eet" and "ode" contain 2 vowel


Example Walkthrough:

Input: s = "abciiidef", k = 3

	1.	The first window "abc" contains 1 vowel (a).
	2.	The second window "bci" contains 1 vowel (i).
	3.	The third window "cii" contains 2 vowels (i).
	4.	The fourth window "iii" contains 3 vowels (i, i, i). This is the maximum.
	5.	The subsequent windows do not contain more than 3 vowels.