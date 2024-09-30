function productExceptSelf(nums) {
    let n = nums.length;
    let answer = new Array(n).fill(1);

    // Calculate left products
    let left = 1;
    for (let i = 0; i < n; i++) {
        answer[i] = left;
        left *= nums[i];
    }

    // Calculate right products and multiply them with the current value in answer
    let right = 1;
    for (let i = n - 1; i >= 0; i--) {
        answer[i] *= right;
        right *= nums[i];
    }

    return answer;
}

// Example Usage:
let nums = [1, 2, 3, 4];
let result = productExceptSelf(nums);
console.log(result); // Output: [24, 12, 8, 6]