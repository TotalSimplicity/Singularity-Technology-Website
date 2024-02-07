<!DOCTYPE html>
<html>
<head>
  <title>Singularity Technology</title>
  
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="header.png" type="image/png">

  <style>
    
    .slideshow-container {
    max-width: 76%;
    position: relative;
    margin: auto;
    display: flex;
    overflow: hidden;
    opacity: 0; /* Initial opacity set to 0 */
    transition: opacity 0.5s ease; /* Smooth transition for opacity */
    }

    .fade-in {
        opacity: 1; /* Set opacity to 1 when the fade-in class is applied */
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

  <div class="parallax-section" style="height: 950px">
    <h2 class="parallax-text">Singularity Technology</h2>
    <h2 class="parallax-text">FTC Robotics Team #7034</h2>
    <div class="down-arrow"></div>
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
    <div class="mySlides">
      <img src="indexslideshow/henry.png" alt="Image 3" style="height: 75vh">
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
      <img src="portraitindexabout.jpg" style="height: 400px">
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
    const slideshowContainer = document.querySelector('.slideshow-container');

    window.addEventListener('scroll', () => {
        const parallaxSectionHeight = document.querySelector('.parallax-section').offsetHeight;
        const scrollTop = window.scrollY;
        const triggerPoint = parallaxSectionHeight / 2; // Adjust this value as needed

        // Calculate opacity based on scroll position
        const opacity = Math.min(1, scrollTop / triggerPoint);

        slideshowContainer.style.opacity = opacity.toFixed(2); // Limit opacity to 2 decimal places for smoother transitions
    });
    const aboutSection = document.querySelector('.parallax-section');

window.addEventListener('scroll', () => {
    const aboutSectionTop = aboutSection.offsetTop;
    const windowHeight = window.innerHeight;
    const scrollTop = window.scrollY;
    const triggerPoint = aboutSectionTop - windowHeight + (windowHeight / 3); // Adjust this value as needed

    // Calculate opacity based on scroll position
    const opacity = Math.min(1, (scrollTop - triggerPoint) / (windowHeight / 3));

    aboutSection.style.opacity = opacity.toFixed(2); // Limit opacity to 2 decimal places for smoother transitions
});
window.addEventListener('scroll', () => {
      const arrow = document.querySelector('.down-arrow');
      const parallaxSectionHeight = document.querySelector('.parallax-section').offsetHeight;
      const scrollTop = window.scrollY;
      const triggerPoint = parallaxSectionHeight / 4; // Adjust this value as needed

      // Calculate opacity based on scroll position
      const opacity = Math.max(0, 1 - scrollTop / triggerPoint);

      arrow.style.opacity = opacity.toFixed(2); // Limit opacity to 2 decimal places for smoother transitions
    });
  </script>
</body>
</html>
