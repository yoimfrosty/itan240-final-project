<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evergreen Café Database Setup</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header>
    <div class="header-wrap">
      <img class="logo" src="logo.png" alt="Evergreen Café logo">
      <div>
        <h1>Evergreen Café</h1>
        <p>Database Setup</p>
      </div>
    </div>
  </header>

  <main>
    <section class="menu-panel">
      <h2 class="section-title">Database Setup Results</h2>
      <div class="item-card">
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $conn = new mysqli("localhost", "root", "");

  if ($conn->connect_error) {
      die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
  }

  // This pattern lets the setup file run cleanly each time while avoiding duplicate sample data.
  $sql = "DROP DATABASE IF EXISTS evergreen";
  if ($conn->query($sql) === TRUE) {
      echo "<p>Old database dropped successfully.</p>";
  } else {
      echo "<p style='color:red;'>Error dropping database: " . $conn->error . "</p>";
  }

  $sql = "CREATE DATABASE evergreen";
  if ($conn->query($sql) === TRUE) {
      echo "<p>Database 'evergreen' created successfully.</p>";
  } else {
      echo "<p style='color:red;'>Error creating database: " . $conn->error . "</p>";
  }

  $conn->select_db("evergreen");

  $sql = "CREATE TABLE menu (
      id INT AUTO_INCREMENT PRIMARY KEY,
      item VARCHAR(100) NOT NULL,
      size VARCHAR(20) NOT NULL,
      price FLOAT NOT NULL
  )";

  if ($conn->query($sql) === TRUE) {
      echo "<p>Table 'menu' created successfully.</p>";
  } else {
      echo "<p style='color:red;'>Error creating table: " . $conn->error . "</p>";
  }

  $items = [
      ["Espresso", "Small", 3.50],
      ["Latte", "Medium", 5.00],
      ["Cappuccino", "Large", 5.50],
      ["Mocha", "Large", 5.75],
      ["Iced Coffee", "Medium", 4.25],
      ["Caramel Frappuccino", "Large", 6.25]
  ];

  foreach ($items as $row) {
      $item = $conn->real_escape_string($row[0]);
      $size = $conn->real_escape_string($row[1]);
      $price = (float)$row[2];

      $conn->query("INSERT INTO menu (item, size, price) VALUES ('$item', '$size', $price)");
  }

  echo "<p>Sample menu items imported successfully.</p>";

  $conn->close();
?>
      </div>

      <p style="margin-top:18px;">
        <a class="add-btn" style="display:inline-block;text-decoration:none;" href="menu.php">Go to Menu Page</a>
        <a class="clear-btn" style="display:inline-block;text-decoration:none;width:auto;margin-top:0;margin-left:8px;" href="index.php">Back Home</a>
      </p>
    </section>
  </main>

  <footer>
    <p><strong>Student:</strong> Saphal Giri</p>
    <p>&copy; Evergreen Café <?php echo date("Y"); ?></p>
  </footer>
</body>
</html>
