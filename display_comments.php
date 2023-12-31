<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve comments from the database
$sql = "SELECT * FROM mmcomment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output each comment
    while ($row = $result->fetch_assoc()) {
        $username = $row['Username'];
        $usercomment = $row['Usercomment'];
        $datetime = $row['Datetime'];

        // Display comment
        echo "<div>";
        echo "<p><strong>$username:</strong></p>";
        echo "<p>$usercomment</p>";
        echo "<p>$datetime</p>";
        echo "</div>";
    }
} else {
    echo "No comments found.";
}

// Close the database connection
$conn->close();
?>
