<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evergreen Café Menu</title>

  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header>
    <div class="header-wrap">
      <img class="logo" src="logo.png" alt="Evergreen Café logo">
      <div>
        <h1>Evergreen Café</h1>
        <p>Menu Database System</p>
      </div>
    </div>
  </header>

  <main>
    <div class="layout">
      <section class="menu-panel">
        <h2 class="section-title">Add a New Menu Item</h2>

        <form method="post" action="update_result.php">
          <div>
            <label for="item">Item Name</label>
            <input type="text" id="item" name="item" required>
          </div>

          <div>
            <label for="size">Size</label>
            <input type="text" id="size" name="size" required>
          </div>

          <div>
            <label for="price">Price ($)</label>
            <input type="number" id="price" name="price" step="0.01" min="0" required>
          </div>

          <button class="checkout-btn" type="submit">Add Item</button>
        </form>
      </section>

      <aside class="checkout-panel">
        <h2 class="section-title">Page Links</h2>

        <p style="margin-bottom:12px;">
          <a href="index.php">Home</a>
        </p>

        <p style="margin-bottom:12px;">
          <a href="db_setup.php">Run Database Setup</a>
        </p>

        <p>
          <a href="http://localhost/phpmyadmin" target="_blank">Open phpMyAdmin</a>
        </p>
      </aside>
    </div>

    <section class="menu-panel" style="margin-top:24px;">
      <h2 class="section-title">Current Menu</h2>

      <table style="width:100%; border-collapse:collapse; background:white;">
        <tr style="background:#edf4e4; color:#355e2b;">
          <th style="padding:12px; border:1px solid #dbe7cc; text-align:left;">ID</th>
          <th style="padding:12px; border:1px solid #dbe7cc; text-align:left;">Item</th>
          <th style="padding:12px; border:1px solid #dbe7cc; text-align:left;">Size</th>
          <th style="padding:12px; border:1px solid #dbe7cc; text-align:left;">Price</th>
        </tr>

        <?php
          error_reporting(E_ALL);
          ini_set("display_errors", 1);

          $conn = new mysqli("localhost", "root", "", "evergreen");

          if ($conn->connect_error) {
              echo "<tr><td colspan='4' style='padding:12px;color:red;'>Connection failed. Please run db_setup.php first.</td></tr>";
          } else {
              $result = $conn->query("SELECT id, item, size, price FROM menu ORDER BY id");

              if ($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td style='padding:12px; border:1px solid #dbe7cc;'>" . htmlspecialchars($row["id"]) . "</td>";
                      echo "<td style='padding:12px; border:1px solid #dbe7cc;'>" . htmlspecialchars($row["item"]) . "</td>";
                      echo "<td style='padding:12px; border:1px solid #dbe7cc;'>" . htmlspecialchars($row["size"]) . "</td>";
                      echo "<td style='padding:12px; border:1px solid #dbe7cc;'>$" . number_format($row["price"], 2) . "</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='4' style='padding:12px;'>No menu items found.</td></tr>";
              }

              $conn->close();
          }
        ?>
      </table>
    </section>
  </main>

  <footer>
    <p><strong>Student:</strong> Saphal Giri</p>
    <p>&copy; Evergreen Café <?php echo date("Y"); ?></p>
  </footer>
</body>
</html>