function foo(array $arr): array {
  //Check if the array is empty or not
  if(empty($arr)){
    return [];
  }

  //Declare a variable to store the result
  $result = [];

  //Iterate over the array
  foreach($arr as $key => $value){
    //Check if the value is an array
    if(is_array($value)){
      //Recursively call the function for the nested array
      $result[$key] = foo($value);
    }else{
      //Add the value to the result array
      $result[$key] = $value;
    }
  }

  //Return the result array
  return $result;
}