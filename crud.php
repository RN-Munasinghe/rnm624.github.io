<?php
// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'collection';
// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Create a new user
function createUser($fullname,$email,$mobilenumber,$emailsubject,$yourmessage) {
    global $conn;
    $sql = "INSERT INTO details (fullname,email,mobilenumber,emailsubject,yourmessage) VALUES ('$fullname', '$email','$mobilenumber','$emailsubject','$yourmessage')";
    if ($conn->query($sql) === TRUE) {
    echo "User created successfully!";
    } else {
    echo "Error creating user: " . $conn->error;
    }
    }
    // Read all users
    function readUsers() {
    global $conn;
    $sql = "SELECT * FROM details";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['fullname'] . ", Email: " . $row['email'] . ", Mobile Number: ".$row['mobilenumber']. ", Email Subject: " . $row['emailsubject'] . ", Your message: " . $row['yourmessage'] . "<br>";
    }
    } else {
    echo "No users found.";
    }
    }
    // Update a user by email
    function updateUser($fullname, $email,$mobilenumber,$emailsubject,$yourmessage) {
    global $conn;
    $sql = "UPDATE details SET fullname='$fullname',mobilenumber='$mobilenumber',emailsubject='$emailsubject' yourmessage='$yourmessage' WHERE email=$email";
    if ($conn->query($sql) === TRUE) {
    echo "User updated successfully!";
    } else {
    echo "Error updating user: " . $conn->error;
    }
    }
    // Delete a user by email
    function deleteUser($email) {
    global $conn;
    $sql = "DELETE FROM details WHERE email=$email";
    if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully!";
    } else {
    echo "Error deleting user: " . $conn->error;
    }
    }
    // Usage examples
    // Create a new user
    createUser('John Doe', 'john@example.com',074125661,'web analysis','ccccccccccccc');
    // Read all users
    readUsers();
    // Update a user
    updateUser('john@example.com','Jann Doe',0711234567,'wwwwwwwwwwwww','ddddddddddddd');
    // Delete a user
    deleteUser('john@example.com');
    // Close the database connection
    $conn->close();
    ?>