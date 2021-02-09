<?php
include './incs/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM emails";
$result = mysqli_query($conn, $sql);
$conn->close();

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
    <div class="main-block emails-block">
        <h3>Submitted emails</h3>
        <table class="emails-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>". $row["id"]. "</td><td>" . $row["email"]."</td></tr>";
                }
            }
            ?>
            </tbody>
        </table>
        <a href="index.php">
            <button class="submit-button" type="submit"><i class="fas fa-arrow-left back-icon"></i> Back to form
            </button>
        </a>
    </div>
</div>

</body>
</html>
