<!DOCTYPE html>
<html>
<head>
  <title>Singularity Technology</title>
  
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="headerlogof.ico" type="image/x-icon">

  <style>
    
    .slideshow-container {
      max-width: 75%;
      position: relative;
      margin: auto;
      display: flex;
      overflow: hidden;
    }

    .mySlides {
      flex: 0 0 100%;
    }

    .mySlides img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Singularity Test Technology</h2>
    <h2 class="parallax-text">FTC Robotics Team #7034</h2>
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
  
  <div style="height: 475px" class="parallax-section"> 
    <div class="content">
      <div>
        <sh>About</sh>
        <p>We, Singularity Technology (#7034), are a robotics team located in Wilton, CT that competes in FTC competitions. 
          Based out of the Wilton library, we are open to kids grades 9-12 from all places. Our goal is to do the best we can and achieve things by working together. 
          We partner up with local businesses, schools, and the people around us to help better our community.</p>
      </div>
      <img src="portraitindexabout.jpg">
    </div>
  </div>
  <?php include('footer.php'); ?>
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
      setTimeout(showSlides, 3000);
    }

    showSlides();
    const parallaxTextElements = document.querySelectorAll('.parallax-text');

    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;

      // Apply the parallax effect to each parallax-text element
      parallaxTextElements.forEach((element, index) => {
        element.style.transform = `translateY(${scrollY * 0.65}px)`; // Adjust the multiplier to control the movement
      });
    });
  </script>
</body>
</html>
