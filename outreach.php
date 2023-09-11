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
    }

    .container {
      display: flex;
      justify-content: space-between;
      padding: 75px;
      padding-left: 350px;
      padding-right: 350px;
    }

    .column {
      width: auto; /* Make the boxes less wide */
      height: auto;
      background-color: white;
      padding: 20px;
      margin: 50px; /* Reduce the margin to bring the boxes closer */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Outreach</h2>
  </div>

  <div class="container">
    <div class="column">
      <h3>Our Outreach Initiatives</h3>
      <p>Our team prioritizes outreach and aims to connect with all aspects of our community. We have a junior team, TAP, where we give middle schoolers an exposure to how robotics works. TAP, which stands for Test and Prototype, works to build their own non-competition robot and program it to help prepare them for joining the Main Team and creating a successful competition robot.</p>
      <img src="henry.png" alt="henrypng">
    </div>

    <div class="column">
      <h3>Fundraising Event - Destroy Your Hard Drive (DYHD)</h3>
      <p>For fundraising, we host our Destroy Your Hard Drive (DYHD) event annually every Fall. We get together and ask people in our area to bring in old devices for just a minimum of twenty dollars per device. They watch us destroy their hard drives and make sure their data is wiped forever, while also funding the team.</p>
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
