<?php
// Code to generate a sign-up form and store it in the database in PHP

// Step 1: Create a database connection
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "db_bookshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Create a sign-up form using Bootstrap
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="TEST_SIGNUP.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Email:</label>
                <input type="password" class="form-control" id="Email" name="Email" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</body>
</html>

<?php
// Step 3: Create a signup.php file to handle the sign-up process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Email = $_POST["Email"];

    // Step 4: Check if the username already exists in the database
    $sql = "SELECT * FROM tbl_users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        // Step 5: Insert the new user into the database
        $sql = "INSERT INTO tbl_users (username, password, Email, is_admin) VALUES ('$username', '$password', '$Email', '0')";
        if ($conn->query($sql) === TRUE) {
            echo "Sign up successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Step 6: Close the database connection
$conn->close();
?>