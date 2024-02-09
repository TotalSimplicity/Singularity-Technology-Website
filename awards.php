<!DOCTYPE html>
<html>
<head>
  <title>Awards - Singularity Technology</title>
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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px; /* Adjust gap between grid items */
      padding: 30px;
      padding-top: 90px; /* Move grid down below the header */
      background-color: black;
    }
    
    .grid-item {
      border: 1px solid #ccc; 
      padding: 20px;
      text-align: left;
      background-color: #04364A;
      min-height: 175px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    
    .grid-item h3 {
      color: white;
      padding: 5px;
    }

    .grid-item h3 span {
      font-size: 14px;
      color: #ccc; /* Adjust color for the year */
    }

    .grid-item h1 {
      color: green;
      padding: 5px;
    }

    .grid-item ul {
      color: white;
      padding: 5px;
      margin-top: 5px; /* Add margin between the header and the bullet points */
    }

    .grid-item p {
      color: white;
      padding: 5px;
    }
    
    .grid-item img {
      max-width: 100%; /* Ensure images don't exceed container width */
      height: auto;
      margin-bottom: 10px; /* Space between image and text */
    }

    .imgRight{
      left: 200px;
    }

    .parallax-section {
      height: 30vh; /* Adjust the height of the parallax section */
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Awards</h2>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <h3>Gearhead Grinder Qualifier <span>(2023)</span></h3>
      <ul>
        <li>Collins Aerospace Innovate Award</li>
        <li>Inspire Award 2nd Place</li>
        <li>Winning Alliance - Captain</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Gearhead Grinder Qualifier <span>(2023)</span></h3>
      <ul>
        <li>Collins Aerospace Innovate Award</li>
        <li>Inspire Award 2nd Place</li>
        <li>Winning Alliance - Captain</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Gearhead Grinder Qualifier <span>(2023)</span></h3>
      <ul>
        <li>Collins Aerospace Innovate Award</li>
        <li>Inspire Award 2nd Place</li>
        <li>Winning Alliance - Captain</li>
      </ul>
    </div>
  </div>

  <?php include('footer.php'); ?>

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
</body>
</html>
