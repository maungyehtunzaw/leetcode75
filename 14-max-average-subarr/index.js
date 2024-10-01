function findMaxAverage(nums, k) {
    let currentSum = 0;

    // Step 1: Calculate the sum of the first window
    for (let i = 0; i < k; i++) {
        currentSum += nums[i];
    }

    let maxSum = currentSum;

    // Step 2: Slide the window across the array
    for (let i = k; i < nums.length; i++) {
        currentSum = currentSum - nums[i - k] + nums[i];
        maxSum = Math.max(maxSum, currentSum);
    }

    // Step 3: Return the maximum average
    return maxSum / k;
}

// Example usage
let nums = [1, 12, -5, -6, 50, 3];
let k = 4;
console.log(findMaxAverage(nums, k)); // Output: 12.75