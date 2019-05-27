// rotate :: [A] -> Int -> [A]
// rotate arr from right to left n times
function rotate(arr, n) {
  if (n <= 0) return arr
  else if (arr.length === 0) return arr
  else {
    return rotate(arr.slice(1).concat(arr[0]), (n % arr.length) - 1)
  }
}

// Test cases

// Input: [1, 2, 3, 4, 5], 3
// Output: [4, 5, 1, 2, 3]
console.log(rotate([1, 2, 3, 4, 5], 3))

// Input: ['a', 'b', 'c', 'd', 1, 2, 3], 10
// Output: ['d', 1, 2, 3, 'a', 'b', 'c']
console.log(rotate(['a', 'b', 'c', 'd', 1, 2, 3], 10))
