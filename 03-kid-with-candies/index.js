function kidsWithCandies(candies, extraCandies) {
    let maxCandies = Math.max(...candies);
    return candies.map(candy => candy + extraCandies >= maxCandies);
}
console.log(kidsWithCandies([2, 3, 5, 1, 3], 3));  // Output: [true, true, true, false, true]