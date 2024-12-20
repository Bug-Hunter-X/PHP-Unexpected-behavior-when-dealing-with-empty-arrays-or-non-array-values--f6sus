function calculateSum(numbers) {
  // Check if the input is an array and not empty
  if (!is_array(numbers) || empty(numbers)) {
    return 0; // Or throw an exception: throw new InvalidArgumentException('Input must be a non-empty array.');
  }

  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

//Example Usage
$result1 = calculateSum([1, 2, 3, 4, 5]);
echo "Sum: " . $result1 . "\n"; // Output: Sum: 15

$result2 = calculateSum([]);
echo "Sum: " . $result2 . "\n"; // Output: Sum: 0

//This will not cause an error
$result3 = calculateSum(null);
echo "Sum: " . $result3 . "\n"; // Output: Sum: 0