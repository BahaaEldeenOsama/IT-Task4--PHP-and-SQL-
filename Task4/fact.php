<?php
function factorial($n)
{
   if($n>=0)
   {
      if($n ==0)
     {
	           return 1;
     }
    else 
     {	
	           return $n * factorial($n-1);
     }
   }
   
   else
   {
          return 0 ;
   } 
}

/// Test 1 
///$result = factorial(-1);  /// Print "Input is invalid"

/// Test 2 
$result = factorial(10);  /// Print "The result = 3628800"

if($result)
{
   echo "The result = " . $result."\n";
}
else
{
    echo "Input is invalid \n"; 
}


?>