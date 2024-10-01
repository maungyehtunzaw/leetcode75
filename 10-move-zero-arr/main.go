package main

import "fmt"

func moveZeroes(nums []int) {
    index := 0 // To track the position for non-zero elements

    // Move non-zero elements forward
    for i := 0; i < len(nums); i++ {
        if nums[i] != 0 {
            nums[index] = nums[i]
            index++
        }
    }

    // Fill the remaining positions with zero
    for index < len(nums) {
        nums[index] = 0
        index++
    }
}

func main() {
    nums := []int{0, 1, 0, 3, 12}
    moveZeroes(nums)
    fmt.Println(nums) // Output: [1, 3, 12, 0, 0]
}