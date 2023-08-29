<?php
session_start();

if (isset($_POST['submit'])) {
    // Get username and password from the session
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if true credentials
    if ($username == $_SESSION['user'] || $_SESSION['mail'] && $password == $_SESSION['pass']) {
        echo "Login successful!";
        header('Location: home.php');
        exit;
    } else {
        echo "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form method="post" class="login-form bg-white p-4 border rounded">
                    <h1 class="text-center">Login</h1>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
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