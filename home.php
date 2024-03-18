<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<?php
// PHP code to demonstrate basic functionalities
echo "<h1>Welcome to our website!</h1>";
echo "<p>This is the home page.</p>";

// Example of a simple conditional statement
$loggedIn = true;

if ($loggedIn) {
    echo "<p>You are logged in.</p>";
} else {
    echo "<p>You are not logged in.</p>";
}

// Example of a loop
echo "<h2>Recent Posts:</h2>";
$posts = array("Post 1", "Post 2", "Post 3");

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>$post</li>";
}
echo "</ul>";
?>

</body>
</html>
