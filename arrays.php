<?php
$peopleOne = [
'John', 'Luke', 'Peter','Mark',
];
// echo $peopleOne[0];

$peopleTwo = 
    array('John', 'Luke', 'Peter','Mark');
   

// echo $peopleTwo[3];

$age = [20,30,40,50];
$age[1]=25;
$age[]=60;
array_push($age,70);


// print_r($age); 

// echo count($age);



// merging arrays
// $PeopleThree = array_merge($peopleOne,$peopleTwo);
// print_r($PeopleThree);

// associative arrays(key & value pairs)
$ninjaOne = ['shuang' => 'green', 'yoshi' => 'yellow', 'ken' => 'red'];
// echo $ninjaOne['yoshi'];
// print_r($ninjaOne);

$ninjaOne['tree']='brown';
$ninjaOne['yoshi']='green';
print_r($ninjaOne);
echo count($ninjaOne);
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>