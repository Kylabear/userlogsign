<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, username, course FROM users"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Username</th><th>Course</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["course"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $year = $_POST['year'];
    $course = $_POST['course'];
    $program = $_POST['program'];

    $sql = "INSERT INTO users (username, password, year, course, program)
            VALUES ('$username', '$password', '$year', '$course', '$program')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Example</title>
</head>
<body>
<form method="POST" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <label for="year">Year:</label><br>
    <input type="text" id="year" name="year"><br>

    <label for="course">Course:</label><br>
    <input type="text" id="course" name="course" required><br>

    <label for="program">Program:</label><br>
    <input type="text" id="program" name="program"><br><br>

    <input type="submit" value="Add User">
</form>

</body>
</html>
