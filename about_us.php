<!DOCTYPE html>
<html>
<head>
  <title>About Us - Singularity Technology</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="headerlogof.ico" type="image/x-icon">
    
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }
    
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height: 300px">
    <h2 class="parallax-text">About us</h2>
  </div>
  
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
