<div class="col-sm-3 d-flex flex-column flex-shrink-0 p-3 sidebar">
  <a href="main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
    <span class="fs-4">My Portfolio</span>
  </a>
  <hr>

  <!-- Navigation as buttons -->
  <div class="d-grid gap-2">
    <a href="main.php" class="btn <?php echo basename($_SERVER['PHP_SELF'])=='main.php' ? 'btn-primary' : 'btn-outline-secondary'; ?>">Home</a>
    <a href="education.php" class="btn <?php echo basename($_SERVER['PHP_SELF'])=='education.php' ? 'btn-primary' : 'btn-outline-secondary'; ?>">Education</a>
    <a href="about.php" class="btn <?php echo basename($_SERVER['PHP_SELF'])=='about.php' ? 'btn-primary' : 'btn-outline-secondary'; ?>">About Me</a>
  </div>

  <hr>
  <div class="mt-auto small" id="currentDate"></div>
  <div class="mt-3">
    <button id="themeToggle" class="btn btn-outline-secondary w-100">Toggle Theme</button>
  </div>
</div>
