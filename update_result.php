<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evergreen Café Update Result</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header>
    <div class="header-wrap">
      <img class="logo" src="logo.png" alt="Evergreen Café logo">
      <div>
        <h1>Evergreen Café</h1>
        <p>Menu Update Result</p>
      </div>
    </div>
  </header>

  <main>
    <section class="menu-panel">
      <h2 class="section-title">Insert Result</h2>
      <div class="item-card">
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $conn = new mysqli("localhost", "root", "", "evergreen");

  if ($conn->connect_error) {
      die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $item = $conn->real_escape_string($_POST["item"]);
      $size = $conn->real_escape_string($_POST["size"]);
      $price = (float)$_POST["price"];

      $sql = "INSERT INTO menu (item, size, price) VALUES ('$item', '$size', $price)";

      if ($conn->query($sql) === TRUE) {
          echo "<p style='color:green;font-weight:bold;'>Success! '" . htmlspecialchars($item) . "' was added to the menu.</p>";
      } else {
          echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
      }
  } else {
      echo "<p>No form was submitted.</p>";
  }

  $conn->close();
?>
      </div>

      <p style="margin-top:18px;">
        <a class="add-btn" style="display:inline-block;text-decoration:none;" href="menu.php">&larr; Back to Menu</a>
      </p>
    </section>
  </main>

  <footer>
    <p><strong>Student:</strong> Saphal Giri</p>
    <p>&copy; Evergreen Café <?php echo date("Y"); ?></p>
  </footer>
</body>
</html>
