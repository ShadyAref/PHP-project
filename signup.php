<?php
session_start();

if (isset($_POST['register'])) {
    // Get data from sign up form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Save data to session
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    $_SESSION['mail'] = $email;

    // Redirect to login page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form method="post" class="signup-form bg-white p-4 border rounded">
                    <h1 class="text-center">Sign Up</h1>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <input type="submit" name="register" value="Let's Go" class="btn btn-primary btn-block">
                </form>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-6 text-center">
                        <a class="home-link" href="home.php">Back to home page -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include "footer.php" ?>