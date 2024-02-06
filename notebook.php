<!DOCTYPE html>
<html>
<head>
  <title>Portfolio - Singularity Technology</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="headerlogof.ico" type="image/x-icon">
    
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }
    .year-labels {
      display: flex;
      justify-content: space-around; /* Distribute labels evenly */
      margin-bottom: 20px; /* Adjust spacing */
    }
    .year-labels h1 {
      color: white;
      text-align: center;
      width: 50%; /* Each label takes half of the space */
    }
    .portfolios {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    .portfolios h1 {
      color: white;
      text-align: center;
      width: 100%;
    }
    .pdf-container {
      width: 100%;
      height: 800px;
    }
    .pdf-container object {
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Portfolio</h2>
  </div>

  <div class="year-labels">
    <h1>2023-2024</h1>
    <h1>2022-2023</h1>
  </div>

  <div class="portfolios"> 
    <div class="pdf-container">
      <object data="2324portfolio.pdf" type="application/pdf"></object>
    </div>
    <div class="pdf-container">
      <object data="2223portfolio.pdf" type="application/pdf"></object>
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
