<?php include "header.php" ?>

<!DOCTYPE html>
<html>
<head>
<title>Book Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
    background-color: #f8f8f8;
    text-align: center;
}

.book-details {
    margin: 50px auto;
    width: 1200px;
    height: 500px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex; 
    flex-direction: row; 
    align-items: center; 
    justify-content: space-around; 
    padding: 100px;
}

.book-extra-details {
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    justify-content: space-around; 
    padding: 20px;
}

.book-details img {
    width: 400px; 
    height: 400px; 
    margin-bottom: 0; 
}

.book-extra-details h1 {
    margin-bottom: 10px;
}

.book-extra-details p {
     margin-bottom: 5px;
}
</style>
</head>
<body>
<div class="container mt-4">

<?php
// books array
$books = [
[
'id' => '1',
'image' => 'imgs/book1.jpg',
'title' => 'DUNE',
'price' => '$10',
'rate' => '4.5',
'author' => "FRANK HERBERT",
'description' => 'Dune is based on a complex imagined society set roughly 20,000 years in the future. The setting is the year 10,191, and human beings have spread out and colonized planets throughout the universe. On the planet Caladan, Duke Leto of the House of Atreides is preparing to leave for his new position as the governor of Arrakis'
],
[
'id' => '2',
'image' => 'imgs/book2.jpg',
'title' => 'TO KILL A Mockingbird',
'price' => '$15',
'rate' => '4.2',
'author' => "HARPER LEE",
'description' => 'To Kill a Mockingbird takes place in the fictional town of Maycomb, Alabama, during the Great Depression. The protagonist is Jean Louise (“Scout”) Finch, an intelligent though unconventional girl who ages from six to nine years old during the course of the novel.'
],
[
'id' => '3',
'image' => 'imgs/book3.jpg',
'title' => 'KILLING HEMINGWAY',
'price' => '$20',
'rate' => '3.8',
'author' => "ARTHUR BYRNE",
'description' => 'Teddy Alexander is about to have a bad day that changes his life forever. He’s found his teacher’s bad side, and she wants him expelled. Although learning is his favorite thing to do, and Teddy is good at it, what he really wants is a friend. Friendship can be hard to find and sometimes fades, but Teddy keeps trying.'
]
];

// Check if a book has been clicked
if (isset($_GET['book'])) {
$bookId = $_GET['book'];

// find the book that has clicked to display
foreach ($books as $book) {
if ($book['title'] == $bookId) {
    echo '
    <div class="book-details">
        <img src="' . $book['image'] . '" class="card-img-top" alt="' . $book['title'] . '">
        <div class="book-extra-details">
            <h1>' . $book['title'] . '</h1>
            <h4>By : ' . $book['author'] . '</h4>
            <p>' . $book['description'] . '</p>
            <h6>Price: ' . $book['price'] . '</h6>';
                // Check if user is logged in
                if (isset($_SESSION['user'])) {
                    // Ratings
                    echo '<form method="post">
                            <label for="rating">Rate:</label>
                            <select name="rating" id="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <input type="submit" value="Submit-Rating">
                        </form>';

                    // add to cart button
                    echo '<form action="shopping_cart.php" method="post">
                            <input type="hidden" name="book_id" value="' . $book['id'] . '">
                            <input type="submit" value="Add to Cart">
                        </form>';
                } else {
                    echo '<p>Rate: ' . $book['rate'] . '</p>';
                }
            }
        }
    }
?>
    </div>
    </div>
</div>
</body>
</html>

<?php include "footer.php" ?>