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
    }
    .box {
      width: 400px;
      height: 200px;
      background-color: #ffffff;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      padding: 20px;
    }
    .second-box {
      margin-top: 20px;
      text-align: center;
      position: relative;
      z-index: 1;
    }
    .second-box h2 {
      font-size: 24px;
      font-weight: bold;
    }
    .second-box p {
      color: navy;
      text-indent: 30px;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <div class="box">
      <h2>Singularity Technology</h2>
      <p>[Some caption thing].</p>
    </div>
  </div>
  
  <div class="second-box">
    <h2>Another Box Title</h2>
    <p>Another paragraph area.</p>
  </div>
</body>
</html>
