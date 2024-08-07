<?php

include ('C:\Users\willi\php_projects/tutorial/templates/config/db_connect.php');

$title = $ingredients = $email = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {
    // CHECK EMAIL
    if (empty($_POST['email'])) {
        $errors['email'] = "An email is required <br />";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address <br />';
        }
    }
    
    // CHECK TITLE
    if (empty($_POST['title'])) {
        $errors['title'] = "A title is required <br />";
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    // CHECK INGREDIENTS 
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "At least one ingredient is required <br />";
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma-separated list';
        }
    }

    // REDIRECT
    // Checking if form has errors and if not redirect user
    if (array_filter($errors)) {
        echo 'errors in the form';
    } else {
        echo 'form is valid';

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        // CREATE SQL
        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

        // SAVE TO DB AND CHECK
        if (mysqli_query($conn, $sql)) {
            // success
            header('Location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}
// end of POST check

?>

<!DOCTYPE html>
<html lang="en">
<?php include ('C:\Users\willi\php_projects/tutorial/templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"> Add a Pizza </h4>
    <form action="add.php" class="white" method="POST">
        <label for="">Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label for="">Pizza Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label for="">Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include ('C:\Users\willi\php_projects/tutorial/templates/footer.php'); ?>

</html>
