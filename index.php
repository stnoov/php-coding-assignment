<?php

include './incs/funcs.php';

$response = '';
if ($_POST) {
    $response = validate($_POST['email']);
    if($response == 'Success') {
        header("Location: success.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email Validation</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="style.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/8f2728e650.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="main-container">
    <div class="main-block">
        <form method="post" action="" class="email-form">
            <h3>Please, enter your email address</h3>
            <?php
            if ($response)
            {
            echo '<div class="email-error"> <i class="fas fa-exclamation-triangle error-icon"></i>' . $response. '</div>';
            }
            ?>
            <label for="email">
                <input class="email-input-field" type="text" name="email" id="email" placeholder="E-mail address"/>
            </label>
            <button class="submit-button" type="submit">SUBMIT</button>
            <a href="emails.php" class="link-to-emails"><small>View data</small></a>
        </form>

    </div>
</div>

</body>
</html>
