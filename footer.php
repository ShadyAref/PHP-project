<?php
$social_links = array(
"twitter" => "https://twitter.com",
"linkedin" => "https://linkedin.com",
"facebook" => "https://facebook.com",
"instagram" => "https://instagram.com",
);


$social_icons = array(
"twitter" => "https://cdn-icons-png.flaticon.com/512/124/124021.png",
"linkedin" => "https://cdn-icons-png.flaticon.com/512/174/174857.png",
"facebook" => "https://cdn-icons-png.flaticon.com/512/124/124010.png",
"instagram" => "https://cdn-icons-png.flaticon.com/512/174/174855.png",
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <footer class="bg-dark py-2 fixed-bottom">
        <div class="container text-center">
            <?php foreach ($social_links as $key => $value) { ?>
                <a href="<?php echo $value; ?>" target="_blank">
                    <img src="<?php echo $social_icons[$key]; ?>" alt="<?php echo $key; ?>" width="32" height="32">
                </a>
            <?php } ?>

            <p class="text-white mt-3">© 2023 Books Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
