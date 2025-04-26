<?php include('config.php'); include('lang/'.($_SESSION['lang']??'en').'.php'); ?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']??'en' ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Wano - <?= $lang['home'] ?></title>
</head>
<body>
  <header><div class="container"><h1>Wano</h1>
    <div class="language-switch">
      <a href="?lang=en">EN</a> | <a href="?lang=ar">ع</a>
    </div>
    <nav><ul>
      <li><a href="index.php"><?= $lang['home'] ?></a></li>
      <li><a href="products.php"><?= $lang['products'] ?></a></li>
      <?php if(isset($_SESSION['user'])): ?>
        <li><a href="dashboard.php"><?= $lang['dashboard'] ?></a></li>
        <li><a href="logout.php"><?= $lang['logout'] ?></a></li>
      <?php else: ?>
        <li><a href="login.php"><?= $lang['login'] ?></a></li>
        <li><a href="register.php"><?= $lang['register'] ?></a></li>
      <?php endif; ?>
      <li><a href="cart.php"><?= $lang['cart'] ?></a></li>
    </ul></nav></div></header>
  <main class="container">
    <h2><?= $lang['featured_products'] ?></h2>
    <div class="product-list">
      <?php
      $res = $conn->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 8");
      while($row = $res->fetch_assoc()): ?>
        <div class="product">
          <a href="product.php?id=<?= $row['id'] ?>">
            <img src="assets/img/<?= $row['image'] ?>" alt="">
            <h3><?= $row['name'] ?></h3>
            <p>$<?= $row['price'] ?></p>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </main>
  <footer><p>&copy; 2025 Wano</p></footer>
</body>
</html>
