<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a MySQLi connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$event_id = 402; // Replace this with the event ID you want to retrieve

$query = "SELECT e.event_id, et.event_name, c.coust_first_name, c.coust_last_name, e.date
          FROM team6_Events AS e
          INNER JOIN team6_customer AS c ON e.customer_id = c.coust_id
          INNER JOIN team6_event_types AS et ON et.event_type_id = e.event_type_id
          WHERE e.event_id = $event_id AND e.date >= CURDATE()
          ORDER BY e.date";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("DB query failed.");
}

// Fetch and display the results
while ($row = mysqli_fetch_assoc($result)) {
    echo "Event ID: " . $row['event_id'] . "<br>";
    echo "Event Name: " . $row['event_name'] . "<br>";
    echo "Customer First Name: " . $row['coust_first_name'] . "<br>";
    echo "Customer Last Name: " . $row['coust_last_name'] . "<br>";
    echo "Date: " . $row['date'] . "<br>";
    echo "<br>";
}

// Close the connection
$connection->close();
?>