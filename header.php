<header>
  <style>
    header {
      height: 50px;
      background-color: #000000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      margin: 0;
    }

    .logo {
      margin-right: 10px;
      width: 75px;
      height: 50px;
      display: inline-block;
      vertical-align: middle;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-left: 10px;
      color: #ffffff;
      display: inline-block;
      vertical-align: middle;
    }

    .hamburger {
      color: #fff;
      cursor: pointer;
      font-size: 30px;
      margin-left: auto;
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar {
      position: fixed;
      top: 0;
      right: -250px;
      width: 140px;
      height: 100%;
      background-color: #f1f1f1;
      padding: 20px;
      transition: right 0.3s ease-in-out;
    }

    .sidebar a {
      display: block;
      margin-bottom: 10px;
      color: #000;
      text-decoration: none;
    }

    .close-button {
      text-align: right;
      margin-bottom: 10px;
      cursor: pointer;
    }
  </style>

  <div class="header-container">
    <img src="logo.png" alt="Logo" class="logo">
    <h1 class="title">7034</h1>
  </div>

  <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>

  <div class="sidebar">
    <div class="close-button" onclick="toggleSidebar()">X</div>
    <a href="index.php" style="font-size: 23px; margin-top: 55px; font-weight: 50; font-family: 'Roboto', sans-serif;">Home</a>
    <a href="about_us.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">About Us</a>
    <a href="our_robot.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">Our Robot</a>
    <a href="notebook.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">Notebook</a>
    <a href="outreach.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">Outreach</a>
    <a href="awards.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">Awards</a>
    <a href="contact.php" style="font-size: 23px; font-weight: 50; font-family: 'Roboto', sans-serif;">Contact us</a>
  </div>
</header>
