<!DOCTYPE html>
<html>
<head>
  <title>Outreach - Singularity Technology</title>
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
      grid-template-columns: repeat(3, 1fr); /* 5 columns */
      grid-gap: 5px; /* Adjust gap between grid items */
      padding: 90px;
      padding-top: 30px;
      background-color: black;
      width: 97%;
    }
    
    .grid-item {
      border: 1px solid #ccc; 
      padding: 20px;
      text-align: left;
      background-color: #04364A;
      height: 250px;
      display: flex;
      flex-direction: wrap;
      width: 97%;
    }
    
    .grid-item h3 {
      color: white;
      padding: 5px;
    }

    .grid-item h1 {
      color: green;
      padding: 5px;
    }

    .grid-item p {
      color: white;
      padding: 5px;
    }
    
    .grid-item img {
      max-width: 15%; /* Ensure images don't exceed container width */
      height: auto;
      margin-bottom: 10px; /* Space between image and text */
      padding: 20px;
    }
    
    .imgRight{
      left: 200px;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Outreach</h2>
  </div>

  <div class=".grid-container">
  <div class="grid-item">
  <img class = "imgRight" src="teamphotos/aarushi.jpg" alt="Image 1">
      <div>
        <h1> Pre-Season Library Programs (June 21, August 24) </h1>
        <p> Each year, while school is out, we conduct 2-3 STEM summer programs at the library focused on the engineering design process. This summer, we hosted a Rube Goldberg inspired program as well as a Rubber Band Powered Cars program. The focus was to make sure kids had fun while simultaneously gathering knowledge about real world applications for engineering.  </p>
      </div>
      <img class = "imgRight" src="teamphotos/aarushi.jpg" alt="Image 1">

    </div>

    <div class="grid-item">
  <img class = "imgRight" src="teamphotos/aarushi.jpg" alt="Image 1">
  <img class = "imgRight" src="teamphotos/aarushi.jpg" alt="Image 1">

      <div>
        <h1>Destroy Your Hard Drive Fundraiser (December 9)</h1>
        <p> This event is our biggest annual fundraiser: Destroy Your Hard Drive. We charge $20 to destroy people’s hard drives while we put our robot on display and talk to community members about FIRST, FTC, and our ongoing season. We have a projector with a rotating slideshow of pictures in the back. This is an annual season highlight for us, and we are happy to have raised $1400
through the event this year. </p>
      </div>
      
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
