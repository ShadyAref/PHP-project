<?php include "header.php" ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .welcome-text {
            margin-bottom: 20px;
        }
        
        .book-card {
            width: 18rem;
            margin-bottom: 20px;
        }
        
        .book-card img {
            object-fit: cover;
        }

        .row {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Check if user is logged in
        if (isset($_SESSION['user'])) {
            // User is logged in
            $username = $_SESSION['user'] || $_SESSION['mail'];
            echo '<h2 class="welcome-text">Welcome, ' . $_SESSION['user'] . '!</h2>';
        }
        ?>

        <div class="row">
            <?php
            // books details
            $books = [
                [
                    'image' => 'imgs/book1.jpg',
                    'title' => 'DUNE',
                    'price' => '$10',
                    'rate' => '4.5',
                    'link' => 'book1.php'
                ],
                [
                    'image' => 'imgs/book2.jpg',
                    'title' => 'TO KILL A Mockingbird',
                    'price' => '$15',
                    'rate' => '4.2',
                    'link' => 'book2.php'
                ],
                [
                    'image' => 'imgs/book3.jpg',
                    'title' => 'KILLING HEMINGWAY',
                    'price' => '$20',
                    'rate' => '3.8',
                    'link' => 'book3.php'
                ]
            ];

            // Loop through each book and display the cards 
            foreach ($books as $book) {
                echo '<div class="col-md-4">
                        <div class="card book-card">
                            <img src="' . $book['image'] . '" class="card-img-top" alt="' . $book['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $book['title'] . '</h5>
                                <p class="card-text">Price: ' . $book['price'] . '</p>
                                <p class="card-text">Rate: ' . $book['rate'] . '</p>
                                <a href="book-details.php?book=' . $book['title'] . '" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php include "footer.php" ?>