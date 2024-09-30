package main

import "fmt"

func canPlaceFlowers(flowerbed []int, n int) bool {
    length := len(flowerbed)
    
    for i := 0; i < length; i++ {
        if flowerbed[i] == 0 &&
            (i == 0 || flowerbed[i-1] == 0) &&
            (i == length-1 || flowerbed[i+1] == 0) {
            flowerbed[i] = 1  // Plant the flower
            n--  // One less flower to plant
        }
        
        if n <= 0 {
            return true  // All flowers planted
        }
    }
    
    return false  // Couldn't plant all flowers
}

func main() {
    fmt.Println(canPlaceFlowers([]int{1, 0, 0, 0, 1}, 1))  // Output: true
    fmt.Println(canPlaceFlowers([]int{1, 0, 0, 0, 1}, 2))  // Output: false
}