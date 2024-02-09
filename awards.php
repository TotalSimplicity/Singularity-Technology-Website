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
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 2%;
      padding: 1%;
      background-color: black;
    }
    
    .grid-item {
      border: 1px solid #ccc;
      padding: 1%;
      text-align: left;
      background-color: #04364A;
      min-height: 175px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .grid-item h2{
      text-align: left;
    }
    
    .grid-item h3 {
      color: white;
      padding: 1%;
    }

    .grid-item h3 span {
      font-size: 1.4vw;
      color: #ccc; /* Adjust color for the year */
    }

    .grid-item ul {
      color: white;
      padding: 1%;
      margin-top: 1%;
      padding-left: 5%;
    }

    .grid-item p {
      color: white;
      padding: 5%;
    }
    
    .parallax-section {
      height: 30vh; /* Adjusted from 30vh to 10vh */
    }

    .parallax-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 2em;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height:30vh">
    <h2 class="parallax-text">Awards</h2>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <h3>CT FTC Wolcott Qualifier<span> (2023)</span></h3>
      <ul>
        <li>Motivate Award</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>CT FTC Windsor Qualifier<span> (2023)</span></h3>
      <ul>
        <li>Inspire Award</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>States<span> (2023)</span></h3>
      <h3> Upcoming on February 17th </h3>
    </div>
  </div>

  <!-- Additional grid items -->
  <div class="grid-container">
    <div class="grid-item">
      <h3>CT Wolcott Qualifier<span> (2022)</span></h3>
      <ul>
        <li>Inspire Award 3rd Place</li>
        <li>Think Award</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>CT Windsor Qualifier<span> (2022)</span></h3>
      <ul>
        <li>Control Award sponsored by Arm, Inc.d</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Connecticut State Championship<span> (2022)</span></h3>
      <ul>
        <li>Finalist Alliance - Captain</li>
      </ul>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <h3>CT Gearhead Grinder<span> (2021)</span></h3>
      <ul>
        <li>Connect Award</li>
        <li>Inspire Award 3rd Place</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>CT EWS Qualifying Event<span> (2021)</span></h3>
      <ul>
        <li>Control Award sponsored by Arm, Inc.d</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Connecticut State Championship<span> (2021)</span></h3>
      <ul>
        <li>Design Award</li>
        <li>Motivate Award 3rd Place</li>
      </ul>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <h3>CT FTC League Meet #7 REMOTE<span> (2020)</span></h3>
      <ul>
        <li>No Awards Earned</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>CT FTC League Tournament REMOTE<span> (2020)</span></h3>
      <ul>
        <li>No Awards Earned</li>
      </ul>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-item">
      <h3>Gearhead Grinder Qualifier<span> (2019)</span></h3>
      <ul>
        <li>Collins Aerospace Innovate Award</li>
        <li>Inspire Award 2nd Place</li>
        <li>Winning Alliance - Captain</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Where's Wolcott<span> (2019)</span></h3>
      <ul>
        <li>Finalist Alliance - 1st Team Selected</li>
        <li>Inspire Award</li>
        <li>Promote Award</li>
      </ul>
    </div>

    <div class="grid-item">
      <h3>Connecticut State Championship<span> (2019)</span></h3>
      <ul>
        <li>Finalist Alliance - 1st Team Selected</li>
        <li>Inspire Award</li>
        <li>Promote Award 2nd Place</li>
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
        element.style.transform = `translateY(${scrollY * 0.5}px)`;
      });
    });
  </script>
</body>
</html>
