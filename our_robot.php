<!DOCTYPE html>
<html>
<head>
  <title>Our Robot - Singularity Technology</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="header.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }
    .henry img{
      width: 100%;
    }
    .robotCad{
      width: 100%;
      height: auto;
      text-align: center;
    }
    .robotCad h1{
      color: white;
    }
    
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height:30vh">
    <h2 class="parallax-text">Our Robot</h2>
  </div>
  <div class="robotCad">
    <h1>23-24 Cad</h2>
    <iframe src="https://gmail1868594.autodesk360.com/g/shares/SH512d4QTec90decfa6ecbaacc751a06cd78" width="60%" height="750" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"  frameborder="0"></iframe>
  </div>
  <?php include('footer.php'); ?>
</body>
<script>
    const parallaxTextElements = document.querySelectorAll('.parallax-text');

    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;

      // Apply the parallax effect to each parallax-text element
      parallaxTextElements.forEach((element, index) => {
        element.style.transform = `translateY(${scrollY * 0.65}px)`; // Adjust the multiplier to control the movement
      });
    });
</script>
</html>
