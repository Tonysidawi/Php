<?php

include('config/db_connect.php');

// WRITE QUERY FOR ALL PIZZAS
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// MAKE QUERY AND GET RESULT
$result = mysqli_query($conn, $sql);

// FETCH THE RESULT IN ARRAY FORMAT
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// FREE RESULT FROM MEMORY
mysqli_free_result($result);
// CLOSE CONNECTION
mysqli_close($conn);

// explode(' , ', $pizzas[0]['ingredients']);

 
// print_r($pizzas);



?>

<!DOCTYPE html>
<html lang="en">
    <?php
include ('header.php');
?>

<h4 class = center grey-text>Pizzas!</h4>
<div class ="container">
    <div class ="row">
        <?php foreach($pizzas as $pizza): ?> 
            <div class ="col s6 md3">
                <div class = "card z-depth-0">
                    <div class = "card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                       <ul>
                        <?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php } ?>
                       </ul>
                    </div>
                    <div class = "card-action right-align" >
                        <a class = "brand-text" href="#">more info"></a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

            <?php if(count($pizza) >= 3):  ?>
                <p> there are 2 or more pizzas</p>
                <?php  else : ?>
                    <p>there are less than 3 pizzas</p>

                    <?php endif ?>
        </div>
</div>

<?php 
include ('footer.php'); 
?> 





    

</html>