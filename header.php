<title>The Header</title>

<link href="style.css" rel="stylesheet">
<header>
  <link href="style.css" rel="stylesheet">
  <style>
    
    header {
      height: 50px;
      background-color: #04364A;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      margin: 0;
      position: fixed; /* Add this line */
      top: 0; /* Add this line to fix the header at the top of the viewport */
      left: 0; /* Add this line to keep the header at the left edge of the viewport */
      right: 0; /* Add this line to keep the header at the right edge of the viewport */
      z-index: 200;
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
      right: -450px;
      width: 400px;
      height: 100%;
      background-color: #f1f1f1;
      padding: 20px;
      transition: right 0.3s ease-in-out;
      overflow: hidden;
    }


    .sidebar a {
      display: block;
      margin-bottom: 10px;
      color: #000;
      text-decoration: none;
      font-family: 'Walter Turncoat', cursive;
      font-size: 23px; 
      margin-top: 23px; 
      font-weight: 50; 
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
    <a href="index.php">Home</a>
    <a href="about_us.php">About Us</a>
    <a href="our_robot.php">Our Robot</a>
    <a href="notebook.php">Engineering Portfolio</a>
    <a href="outreach.php">Outreach</a>
    <a href="awards.php">Awards</a>
    <a href="contact.php">Contact us</a>
  </div>
</header>
