<!DOCTYPE html>
<html lang="en" data-bs-theme="light"> <!-- start in light mode -->
<?php
  $T = "Portfolio | Home";
  $H1 = "Welcome to My Portfolio";
?>
<head>
  <title><?php echo $T; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'menu.php'; ?>
      <div class="col-sm-9 p-4">
        <h1><?php echo $H1; ?></h1>
        <p>This is the homepage of my portfolio website.</p>
        <img src="your-image.jpg" class="img-fluid rounded shadow" alt="Portfolio Image">
      </div>
    </div>
  </div>

  <script>
    const html = document.documentElement;
    const btn = document.getElementById("themeToggle");

    btn.addEventListener("click", () => {
      if (html.getAttribute("data-bs-theme") === "light") {
        html.setAttribute("data-bs-theme", "dark");
        btn.textContent = "Switch to Light";
      } else {
        html.setAttribute("data-bs-theme", "light");
        btn.textContent = "Switch to Dark";
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
