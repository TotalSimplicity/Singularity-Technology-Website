<!DOCTYPE html>
<html>
<head>
  <title>Singularity Technology</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }
    /* Styles for the parallax section */
    .parallax-section {
      height: 400px;
      background-image: url('stars.jpg');
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      z-index: -1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    
    .parallax-section h2 {
      color: #ffffff; /* Set the text color to white */
      font-size: 45px;
      font-family: 'Roboto', sans-serif;
      font-weight: bolder;
      margin-bottom: 2px; /* Adjust the spacing between the two lines of text */
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2>Singularity Technology</h2>
    <h2>FTC Robotics Team #7034</h2>
  </div>
  
  <div class="second-box">
    <h2>Another Box Title</h2>
    <p>Another paragraph area.</p>
  </div>
</body>
</html>
