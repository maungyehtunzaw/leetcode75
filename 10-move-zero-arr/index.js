function moveZeroes(nums) {
    nums.sort((a, b) => (b === 0 ? -1 : 0));
}

// Example usage:
let nums = [0, 1, 0, 3, 12];
moveZeroes(nums);
console.log(nums); // Output: [1, 3, 12, 0, 0]