function foo(array $arr): array {
  // Check if the array is empty
  if (empty($arr)) {
    return [];
  }

  $result = [];

  foreach ($arr as $key => $value) {
    //Check if the value is an array using is_array()
    if (is_array($value)) {
      $result[$key] = foo($value);
    } elseif (is_scalar($value) || is_null($value)) { //handle scalar values and null
      $result[$key] = $value;
    } else {
      //Handle non-array values appropriately (e.g., log an error or throw an exception)
      error_log('Unexpected value type encountered in nested array: ' . gettype($value));
    }
  }

  return $result;
}