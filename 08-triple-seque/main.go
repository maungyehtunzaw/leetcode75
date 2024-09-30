package main

import (
	"fmt"
	"math"
)

func increasingTriplet(nums []int) bool {
    first, second := math.MaxInt64, math.MaxInt64

    for _, num := range nums {
        if num <= first {
            first = num  // Update first
        } else if num <= second {
            second = num  // Update second
        } else {
            return true  // We found the triplet
        }
    }

    return false
}

func main() {
    nums1 := []int{1, 2, 3, 4, 5}
    nums2 := []int{5, 4, 3, 2, 1}
    nums3 := []int{2, 1, 5, 0, 4, 6}
    fmt.Println(increasingTriplet(nums1)) // Output: true
    fmt.Println(increasingTriplet(nums2)) // Output: false
    fmt.Println(increasingTriplet(nums3)) // Output: true
}