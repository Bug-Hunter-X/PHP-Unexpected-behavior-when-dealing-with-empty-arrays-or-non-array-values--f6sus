function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

// This will cause an error if numbers is not an array or is empty
let result = calculateSum(); //Error
console.log(result); //Error