<?php
$servername = "localhost";
$username = "root";
$password = ""; // Adjust password if needed
$dbname = "user_db"; // Adjust to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch contact queries from the database
$sql = "SELECT * FROM contact_form";
$result = $conn->query($sql);
?>

<!doctype html>

<style>
/* General Styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Header Styles */
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

.nav-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav-bar .title {
    font-size: 2rem;
    font-weight: 600;
}

.nav-bar .title span {
    color: #BCFD4C;
    font-weight: bold;
}

.page {
    list-style: none;
    display: flex;
    gap: 20px;
}

.page li a {
    text-decoration: none;
    color: #fff;
    font-size: 1.2rem;
    font-weight: 600;
    transition: color 0.4s ease, padding 0.4s ease, border 0.4s ease;
}

.page li a:hover {
    color: #BCFD4C;
    padding: 10px 20px;
    border: 2px solid #BCFD4C;
}

/* Container Styles */
.container {
    padding: 80px 20px 20px; /* Adjusted top padding to account for fixed header */
    max-width: 1200px;
    margin: 0 auto;
}

.contact-queries {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-queries h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 1.8rem;
}

/* Table Styles */
.contact-queries table {
    width: 100%;
    border-collapse: collapse;
}

.contact-queries th, .contact-queries td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

.contact-queries th {
    background-color: #f4f4f4;
    color: #333;
}

.contact-queries tr:nth-child(even) {
    background-color: #f9f9f9;
}

.contact-queries tr:hover {
    background-color: #e2e2e2;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Responsive Design */
@media (max-width: 768px) {
    .header {
        padding: 10px;
    }

    .container {
        padding: 60px 10px 20px;
    }

    .nav-bar .title {
        font-size: 1.5rem;
    }

    .page li a {
        font-size: 1rem;
    }

    .contact-queries h2 {
        font-size: 1.5rem;
    }

    .contact-queries table {
        font-size: 0.9rem;
    }
}

</style>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signature Cuisine - Contact Queries</title>
  <link rel="stylesheet" href="css/ContactUs.css">
</head>
<body>

  <div class="container">
    <div class="contact-queries">
      <h2 class="title-1">Contact Queries</h2>
      <?php if ($result->num_rows > 0): ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Query</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo nl2br(htmlspecialchars($row['query'])); ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>No contact queries found.</p>
      <?php endif; ?>
      <?php $conn->close(); ?>
    </div>
  </div>
</body>
</html>
