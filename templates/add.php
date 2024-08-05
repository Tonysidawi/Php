<?php
// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
    
// }
$title = $ingredients = $email = '';
$errors = array('email' =>'','title'=>'','ingredients'=>'');

if(isset($_GET['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    // CHECK EMAIL
    
    if(empty($_GET['email'])){
        $errors['email'] = "An email is required <br />";
    } else {
        $email = $_GET['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $errors['email'] = 'email must be a valid email address <br />';
        }
    }
    
// CHECK TITLE
    if(empty($_GET['title'])){
        $errors['title'] = "a title is required <br />";
    } else {
        $title = $_GET['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
           $errors['title'] = 'title must be letters and spaces only';
    }
}

    // CHECK INGREDIENTS 
    if(empty($_GET['ingredients'])){
        $errors['ingredients'] =  "At least one ingredient is required <br />";
    } else {
        $ingredients = $_GET['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
           $errors['ingredients'] = 'ingredients must be a comma separated list';
        }
    }

// CHECKING IF FORM HAS ERROR AND IF NOT REDIRECT USER
    if(array_filter($errors)){
        // echo 'erroes in the form';
    } else {
        // echo 'form is valid';

        header('Location: index.php');

    }
}
// end of POST check


?>

<!DOCTYPE html>
<html lang="en">
    <?php
include ('header.php'); 
?>

<section class= "container grey-text">
    <h4 class = "center"> Add a Pizza </h4>
    <form action="add.php" class = "white" method="GET">
        <label for="">Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email)?> ">
        <div class = 'red-text'><?php echo $errors['email']; ?></div>
        <label for="">Pizza Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title)?> ">
        <div class = 'red-text'><?php echo $errors['title']; ?></div>
        <label for="">Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients)?> ">
        <div class = 'red-text'><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>

</section>

<?php include ('footer.php');  
?>





    

</html>