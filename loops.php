<?php 
// LOOPS
$ninjas = ['Peter', 'Paul', 'George', 'Ringo'];

// for($i = 0; $i< count($ninja); $i++){
//     echo $ninjas[$i] . '<br/>';
// };

// foreach($ninjas as $ninja){
//     echo $ninjas. '<br/>';
// }; 

$products= [
    ['name' =>	'shiny star',	'price' =>	20],
    ['name' =>	'green shell', 'price'=>	10],
    ['name' =>	'red shell', 'price' => 15],
    ['name' =>	'gold coin'	, 'price' =>5],
    ['name' => 'lighting bolt',	'price' => 40],
    ['name' =>'banana skin',	'price' => 2],
];


//  FOREACH LOOP
//  foreach($products as $product){
//    echo $product['name'] . ' - ' . $product ['price'] . '<br/>';};


//  FOR LOOP
//    for($i = 0; $i < count($products); $i++){
//     echo 'Product: ' . $products[$i]['name'] . ', Price: ' . $products[$i]['price'] . '<br/>';
// }


//  WHILE LOOP
// $i = 0;

// while($i<count($products)){
//     echo $products[$i]['name'] . ' - ' . $products[$i]['price'] . '<br/>';
//     $i++;
// }






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>Products</h1>
<ul>
    <?php foreach($products as $product){?>

        <h3><?php echo $product['name']; ?></h3>
        <p>$<?php echo $product['price']; ?></p>
    <?php } ?>
</ul>
    
</body>
</html>