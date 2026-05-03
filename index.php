<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evergreen Café</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header>
    <div class="header-wrap">
      <img class="logo" src="logo.png" alt="Evergreen Café logo">
      <div>
        <h1>Evergreen Café</h1>
        <p>Student-Designed and Student-Run</p>
      </div>
    </div>
  </header>

  <main>
    <div class="layout">
      <section class="menu-panel">
        <h2 class="section-title">Welcome to Evergreen Café</h2>

        <div class="item-card" style="margin-bottom:18px;">
          <h4>Fresh Drinks Made Simple</h4>
          <p>
            Evergreen Café is a student-designed café ordering project. This final version uses PHP,
            XAMPP, and a MySQL/MariaDB database to connect the website to real stored menu data.
          </p>
          <p>
            Use the menu page to add a new drink, save it into the database, and view all current menu items.
          </p>
          <p style="margin-top:10px;">
            <a class="add-btn" style="display:inline-block;text-decoration:none;" href="menu.php">Open Menu System</a>
            <a class="clear-btn" style="display:inline-block;text-decoration:none;width:auto;margin-top:0;margin-left:8px;" href="db_setup.php">Run Database Setup</a>
          </p>
        </div>

        <div class="menu-group">
          <h3>Project Features</h3>
          <div class="menu-items">
            <div class="item-card">
              <h4>PHP Page</h4>
              <p>The homepage was converted from HTML into PHP and displays server-side information.</p>
            </div>
            <div class="item-card">
              <h4>Database Connection</h4>
              <p>The project connects to MariaDB using mysqli and creates an Evergreen database.</p>
            </div>
            <div class="item-card">
              <h4>Menu System</h4>
              <p>Menu items can be inserted with a PHP form and displayed from the database.</p>
            </div>
          </div>
        </div>

        <div class="menu-group">
          <h3>Student PHP Information</h3>
          <div class="item-card">
            <?php
              echo "<p><strong>Student:</strong> Saphal Giri</p>";
              echo "<p><strong>Rendered on:</strong> " . date("Y-m-d H:i:s") . "</p>";
              echo "<p><strong>PHP Version:</strong> " . PHP_VERSION . "</p>";
            ?>
          </div>
        </div>
      </section>

      <aside class="checkout-panel">
        <h2 class="section-title">Final Project Checklist</h2>
        <div class="cart-box">
          <h3>What to Show</h3>
          <ul style="padding-left:18px;line-height:1.8;">
            <li>XAMPP with Apache and MySQL running</li>
            <li>This index.php page</li>
            <li>db_setup.php creating database/table</li>
            <li>menu.php adding and listing menu items</li>
            <li>phpMyAdmin showing the menu table</li>
          </ul>
        </div>
      </aside>
    </div>
  </main>

  <footer>
    <p><strong>Café Hours:</strong> Monday - Friday: 7:30 AM - 5:00 PM | Saturday - Sunday: Closed</p>
    <p>&copy; Evergreen Café <?php echo date("Y"); ?></p>
  </footer>
</body>
</html>
