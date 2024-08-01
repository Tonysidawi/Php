<?php
// FUNCTIONS

function sayHello($name = 'John', $age = 20){
    echo "Hello I am $name and I am $age years old";
}
// sayHello('mario', 50);


function formatProduct($product){
    // echo "{$product['name']} costs \${$product['price']} to buy <br/>";
    return "{$product['name']} costs \${$product['price']} to buy <br/>";
}

// $formatted = formatProduct(['name' => 'gold star', 'price' =>20]);

// echo $formatted;

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