<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .user-balance {
            margin-left: 10px;
        }
        
        .icon {
            margin-right: 5px;
        }

        .links {
            display: flex;
        }
        
        .links a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <header class="header bg-light rounded-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="imgs/books.png" alt="Books Logo">
            </div>

            <div class="links">
                <a class="nav-link" href="home.php">Home</a>
                <a class="nav-link" href="about.php">About</a>
            </div>

            <div class="user-actions d-flex align-items-center">
                <?php
                session_start();

                // Check if user is logged in
                if (isset($_SESSION['user'])) {

                    // User is logged in

                    $balance = 100; 

                    // balance 
                    echo '<div class="user-balance d-flex align-items-center">';
                    echo '<span class="icon">&#x1F4B0;</span>'; 
                    echo 'Balance: $' . $balance;
                    echo '</div>';

                    // cart
                    echo '<a class="btn btn-primary ml-3" href="shopping_cart.php">';
                    echo '<span class="icon">&#x1F6D2;</span>'; 
                    echo 'Cart';
                    echo '</a>';

                    // logout option
                    echo '<a class="btn btn-primary ml-3" href="logout.php">';
                    echo 'Logout';
                    echo '</a>';
                } else {

                    // User is not logged in
                    echo '<a class="btn btn-primary" href="login.php">';
                    echo 'Login';
                    echo '</a>';

                    echo '<a class="btn btn-secondary ml-2" href="signup.php">';
                    echo 'Register';
                    echo '</a>';
                }
                ?>
            </div>
        </div>
    </header>
</body>
</html>