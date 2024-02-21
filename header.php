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

        .sidebar {
            display: flex;
            align-items: center; /* Align items to center vertically */
            align-self: center;
        }

        .sidebar a.current-page {
            font-weight: bold; /* Apply underline to current page link */
        }

        .sidebar a {
            margin-left: 30px;
            margin-right: 24px;
            color: #fff;
            text-decoration: none;
            font-family: 'Finlandica', sans-serif;
            font-size: 22px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="header-container">
        <img src="logo.png" alt="Logo" class="logo">
        <h1 class="title">7034</h1>
        <div class="buttons">
            
        </div>
    </div>
    <div class="sidebar">
        <a href="index.php" <?php echo isActivePage("index.php") ? 'class="current-page"' : ''; ?>>Home</a>
        <a href="about_us.php" <?php echo isActivePage("about_us.php") ? 'class="current-page"' : ''; ?>>About the Team</a>
        <a href="our_robot.php" <?php echo isActivePage("our_robot.php") ? 'class="current-page"' : ''; ?>>The Robot</a>
        <a href="outreach.php" <?php echo isActivePage("outreach.php") ? 'class="current-page"' : ''; ?>>Outreach</a>
        <a href="awards.php" <?php echo isActivePage("awards.php") ? 'class="current-page"' : ''; ?>>Awards</a>
    </div>
</header>

<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('open');
    }
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
