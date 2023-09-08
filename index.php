<!DOCTYPE html>
<html>
<head>
  <title>Singularity Technology</title>
  <link rel="icon" href="headerlogof.ico" type="image/x-icon">

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
    .slideshow-container {
    max-width: 100%;
    position: relative;
    margin: auto;
    }

    .mySlides {
    display: none;
    }
    img {
    width: 100%;
    height: auto;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2>Singularity Technology</h2>
    <h2>FTC Robotics Team #7034</h2>
  </div>
  
  <div class="slideshow-container">
  <div class="mySlides">
    <img src="indexslideshow/1.jpg" alt="Image 1">
  </div>

  <div class="mySlides">
    <img src="indexslideshow/2.jpg" alt="Image 2">
  </div>

  <div class="mySlides">
    <img src="indexslideshow/3.jpg" alt="Image 3">
  </div>
</div>
<script>
  let slideIndex = 0;

  function showSlides() {
    const slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 3 seconds (adjust as needed)
  }

  // Start the slideshow when the page loads
  showSlides();
</script>
</body>
</html>
