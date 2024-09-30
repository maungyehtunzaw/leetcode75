package main

import "fmt"

func kidsWithCandies(candies []int, extraCandies int) []bool {
    maxCandies := 0
    for _, candy := range candies {
        if candy > maxCandies {
            maxCandies = candy
        }
    }

    result := make([]bool, len(candies))
    for i, candy := range candies {
        result[i] = candy + extraCandies >= maxCandies
    }

    return result
}

func main() {
    fmt.Println(kidsWithCandies([]int{2, 3, 5, 1, 3}, 3))  // Output: [true, true, true, false, true]
}