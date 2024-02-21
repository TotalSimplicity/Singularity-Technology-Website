<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Header</title>
    <style>
        header {
            height: 50px;
            background-color: #04364A;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            margin: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
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

        .header-buttons {
            display: flex;
            align-items: center;
        }

        .header-buttons a.current-page {
            font-weight: bold;
        }

        .header-buttons a {
            margin-left: 30px;
            margin-right: 24px;
            color: #fff;
            text-decoration: none;
            font-family: 'Finlandica', sans-serif;
            font-size: 22px;
        }

        .header-buttons a:hover {
            text-decoration: underline;
        }
        .buttons {
          display: none;
        }
        .hamburger {
          font-size: 30px;
          color: white;
        }

        /* Media query for mobile devices */
        @media only screen and (max-width: 600px) {
            .header-buttons {
                display: none;
            }
            .buttons{
              display: flex;
              align-items: center;
              justify-content: flex-end;
            }

            .sidebar {
                width: 150px;
                height: 100%;
                background-color: #04364A;
                position: fixed;
                top: 0;
                right: -150px; /* Position off-screen initially */
                transition: right 0.3s ease; /* Transition property for smooth animation */
                z-index: 1000;
            }

            .sidebar.active {
                right: 0; /* Slide in from the right when active */
            }

            .sidebar a {
                display: block;
                padding: 20px;
                color: #fff;
                text-decoration: none;
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
    <div class="buttons">
            <!-- Hamburger icon for mobile -->
            <div class="hamburger" onclick="toggleSidebar()">
                &#9776;
            </div>
        </div>
    <div class="header-buttons">
        <a href="index.php" <?php echo isActivePage("index.php") ? 'class="current-page"' : ''; ?>>Home</a>
        <a href="about_us.php" <?php echo isActivePage("about_us.php") ? 'class="current-page"' : ''; ?>>About the Team</a>
        <a href="our_robot.php" <?php echo isActivePage("our_robot.php") ? 'class="current-page"' : ''; ?>>The Robot</a>
        <a href="outreach.php" <?php echo isActivePage("outreach.php") ? 'class="current-page"' : ''; ?>>Outreach</a>
        <a href="awards.php" <?php echo isActivePage("awards.php") ? 'class="current-page"' : ''; ?>>Awards</a>
    </div>
</header>

<!-- Sidebar for mobile -->
<div class="sidebar" id="sidebar">
    <a href="index.php" <?php echo isActivePage("index.php") ? 'class="current-page"' : ''; ?>>Home</a>
    <a href="about_us.php" <?php echo isActivePage("about_us.php") ? 'class="current-page"' : ''; ?>>About the Team</a>
    <a href="our_robot.php" <?php echo isActivePage("our_robot.php") ? 'class="current-page"' : ''; ?>>The Robot</a>
    <a href="outreach.php" <?php echo isActivePage("outreach.php") ? 'class="current-page"' : ''; ?>>Outreach</a>
    <a href="awards.php" <?php echo isActivePage("awards.php") ? 'class="current-page"' : ''; ?>>Awards</a>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
    document.addEventListener('click', function(event) {
        var sidebar = document.getElementById('sidebar');
        var buttons = document.querySelector('.buttons');
        var isClickInsideSidebar = sidebar.contains(event.target);
        var isClickInsideButtons = buttons.contains(event.target);
        
        if (!isClickInsideSidebar && !isClickInsideButtons) {
            sidebar.classList.remove('active');
        }
    });
</script>

<?php
// Function to check if the given page is the active page
function isActivePage($page) {
    // Get the current page URL
    $currentPage = basename($_SERVER['PHP_SELF']);
    // Check if the given page matches the current page
    return ($currentPage === $page);
}
?>
</body>
</html>
