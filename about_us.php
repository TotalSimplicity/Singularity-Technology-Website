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
      font-family: Arial, sans-serif; /* Change font family as needed */
    }
    
    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 5 columns */
      grid-gap: 20px; /* Adjust gap between grid items */
      padding: 90px;
      padding-top: 30px;
      background-color: black;
    }
    
    .grid-item {
      /*border: 1px solid #ccc; */
      padding: 20px;
      text-align: center;
      background-color: #04364A;
    }
    
    .grid-item h3 {
      color: white;
    }

    .grid-item p {
      color: white;
    }
    
    .grid-item img {
      max-width: 100%; /* Ensure images don't exceed container width */
      height: auto;
      margin-bottom: 10px; /* Space between image and text */
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height: 300px">
    <h2 class="parallax-text">About us</h2>
  </div>
  
  <div class="grid-container">
    <!-- Grid items -->
    <div class="grid-item">
      <img src="teamphotos/aarushi.jpg" alt="Image 1">
      <h3>Aarushi</h3>
      <p>Co-captain</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/anant.jpg" alt="Image 2">
      <h3>Anant</h3>
      <p>Co-captain</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/jack.jpg" alt="Image 2">
      <h3>Jack</h3>
      <p>Build</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/will.jpg" alt="Image 2">
      <h3>Will</h3>
      <p>CAD & Build</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/leo.jpg" alt="Image 2">
      <h3>Leo</h3>
      <p>Programming</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/anirudh.jpg" alt="Image 2">
      <h3>Anirudh</h3>
      <p>OOF</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/achintya.jpg" alt="Image 2">
      <h3>Achintya</h3>
      <p>OOF</p>
    </div>
    <div class="grid-item">
      <img src="teamphotos/enri.jpg" alt="Image 2">
      <h3>Henri</h3>
      <p>OOF</p>
    </div>
    <!-- Add more grid items as needed -->
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
