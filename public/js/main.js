function checkPositive(arr) {
  // Only change code below this line

return arr.some(value => value > 0)
  // Only change code above this line
}
checkPositive([1, 2, 3, -4, 5]);

function add(x) {
  // Add your code below this line
  return function(y) {
    return function(z) {
      return x + y + z;
    };
  };
  // Add your code above this line
}
add(10)(20)(30);
console.clear()
console.log(function(add))