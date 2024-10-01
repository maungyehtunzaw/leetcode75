package main

import (
	"fmt"
)

func findMaxAverage(nums []int, k int) float64 {
	n := len(nums)
	// Step 1: Calculate the sum of the first window
	currentSum := 0
	for i := 0; i < k; i++ {
		currentSum += nums[i]
	}
	maxSum := currentSum

	// Step 2: Slide the window across the array
	for i := k; i < n; i++ {
		currentSum = currentSum - nums[i-k] + nums[i]
		if currentSum > maxSum {
			maxSum = currentSum
		}
	}

	// Step 3: Return the maximum average
	return float64(maxSum) / float64(k)
}

func main() {
	nums := []int{1, 12, -5, -6, 50, 3}
	k := 4
	fmt.Printf("%.5f\n", findMaxAverage(nums, k)) // Output: 12.75000
}