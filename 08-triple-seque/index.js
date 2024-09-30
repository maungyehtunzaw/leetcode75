function increasingTriplet(nums) {
    let first = Infinity;
    let second = Infinity;

    for (let num of nums) {
        if (num <= first) {
            first = num;  // Update first
        } else if (num <= second) {
            second = num;  // Update second
        } else {
            return true;  // We found the triplet
        }
    }

    return false;
}

// Example usage:
let nums1 = [1, 2, 3, 4, 5];
let nums2 = [5, 4, 3, 2, 1];
let nums3 = [2, 1, 5, 0, 4, 6];
console.log(increasingTriplet(nums1)); // Output: true
console.log(increasingTriplet(nums2)); // Output: false
console.log(increasingTriplet(nums3)); // Output: true