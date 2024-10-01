function maxOperations(nums, k) {
    // Sort the array
    nums.sort((a, b) => a - b);
    
    let left = 0;
    let right = nums.length - 1;
    let operations = 0;

    while (left < right) {
        const currentSum = nums[left] + nums[right];

        if (currentSum === k) {
            operations++;
            left++;
            right--;
        } else if (currentSum < k) {
            left++;
        } else {
            right--;
        }
    }

    return operations;
}

// Example usage
const nums = [3, 1, 3, 4, 3];
const k = 6;
console.log(maxOperations(nums, k)); // Output: 1