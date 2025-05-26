<?php
$servername = "localhost";
$username = "root";
$password = ""; // Adjust password if needed
$dbname = "user_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reservations from the database
$sql = "SELECT * FROM reservation_form";
$result = $conn->query($sql);
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Reservations</title>
  <link rel="stylesheet" href="./css/Res2style.css">
</head>
<body>
  <header class="header">
    <style>
      @charset "utf-8";
/* CSS Document */

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.header {
  background-color: #333;
  color: #fff;
  padding: 15px 20px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
}

.container {
  padding: 80px 20px 20px;
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
  font-size: 2rem;
  color: #333;
  margin-bottom: -100px;
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #FF5722; /* Accent color */
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f1f1f1;
}

p {
  font-size: 1rem;
  color: #333;
  text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
  .header {
    padding: 10px;
  }

  h1 {
    font-size: 1.5rem;
  }

  table {
    font-size: 0.9rem;
  }

  th, td {
    padding: 8px;
  }
}

    </style>
  </header>

  <div class="container">
    <h1>Reservation List</h1>
    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number of People</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['people']); ?></td>
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td><?php echo htmlspecialchars($row['time']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No reservations found.</p>
    <?php endif; ?>
    <?php $conn->close(); ?>
  </div>
</body>
</html>
