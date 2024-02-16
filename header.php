<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Header</title>
  <link href="style.css" rel="stylesheet">
  <style>
    header {
      background-color: #04364A;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      margin: 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 200;
    }

    .logo {
      margin-right: 5px;
      width: 50px;
      height: 35px;
    }

    .title {
      font-size: 20px;
      font-weight: bold;
      margin-left: 5px;
      color: #ffffff;
    }

    .hamburger {
      color: #fff;
      cursor: pointer;
      font-size: 24px;
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
  padding: 30px 30px; /* Adjusted padding to provide more space at the top */
  margin-top: 40px;
  transition: right 0.3s ease-in-out;
  overflow: hidden;
}

.sidebar a {
  display: block;
  margin-bottom: 10px;
  color: #000;
  text-decoration: none;
  font-family: 'Walter Turncoat', cursive;
  font-size: 18px;
  font-weight: 50;
}


    .close-button {
      text-align: right;
      margin-bottom: 10px;
      cursor: pointer;
    }

    /* Add media query for smaller screens */
    @media screen and (max-width: 600px) {
      .logo {
        width: 40px;
        height: 28px;
      }

      .title {
        font-size: 16px;
      }

      .hamburger {
        font-size: 20px;
      }

      .sidebar {
        width: 80%;
        right: -120%;
        
      }

      .sidebar a {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
<header>
  <div class="header-container">
    <img src="logo.png" alt="Logo" class="logo">
    <h1 class="title">7034</h1>
  </div>
  <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>
</header>
<div class="sidebar">
  <div class="close-button" onclick="toggleSidebar()">X</div>
  <a href="index.php">Home</a>
  <a href="about_us.php">About the Team</a>
  <a href="our_robot.php">Our Robot</a>
  <a href="notebook.php">Engineering Portfolio</a>
  <a href="outreach.php">Outreach</a>
  <a href="awards.php">Awards</a>
  <a href="contact.php">Contact us</a>
</div>

<script>
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('open');
  }
</script>
</body>
</html>

