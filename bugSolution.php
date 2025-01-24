```php
function processData(array $data): array {
  $dataCopy = $data; // Create a copy of the array
  foreach ($dataCopy as $key => $value) {
    if (is_array($value)) {
      $dataCopy[$key] = processData($value); // Recursive call on copy
    } else if (is_string($value)) {
      $dataCopy[$key] = strtolower($value); // Convert to lowercase
    }
  }
  return $dataCopy;
}

$data = ['Name' => 'John Doe', 'age' => 30, 'Address' => ['Street' => '123 Main St', 'City' => 'Anytown']];
$processedData = processData($data);
print_r($processedData);
print_r($data); // Original array remains unchanged
```