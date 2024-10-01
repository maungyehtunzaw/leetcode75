package main

import (
	"fmt"
	"sort"
)

func maxOperations(nums []int, k int) int {
	// Sort the array
	sort.Ints(nums)

	left, right := 0, len(nums)-1
	operations := 0

	for left < right {
		currentSum := nums[left] + nums[right]

		if currentSum == k {
			operations++
			left++
			right--
		} else if currentSum < k {
			left++
		} else {
			right--
		}
	}

	return operations
}

func main() {
	nums := []int{3, 1, 3, 4, 3}
	k := 6
	fmt.Println(maxOperations(nums, k)) // Output: 1
}