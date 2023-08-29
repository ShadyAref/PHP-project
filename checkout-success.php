<?php include "header.php" ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Retrieve the total cost from the session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['total_cost'])) {
    $totalCost = (float)$_POST['total_cost'];

    // Update the balance
    if (isset($balance)) {
        $balance -= $totalCost;
    }

    // Clear the cart
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

?>

<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="card-title">Checkout Success</h1>
                <p>Your balance has been updated. New balance: <?php echo '$' . number_format($balance, 2); ?></p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <a class="home-link" href="home.php">Back to home page -></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include "footer.php" ?>