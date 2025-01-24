```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value)) {
      $data[$key] = strtolower($value); // Convert to lowercase
    }
  }
  return $data;
}

$data = ['Name' => 'John Doe', 'age' => 30, 'Address' => ['Street' => '123 Main St', 'City' => 'Anytown']];
$processedData = processData($data);
print_r($processedData);
```