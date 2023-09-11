<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Singularity Technology</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="headerlogof.ico" type="image/x-icon">
    
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
    }
      /* Style for the form container */
    .container {
      width: 300px; /* Adjust the width as needed */
      margin: 0 auto;
      text-align: left;
    }

    /* Style for form labels */
    label {
      display: block;
      margin-bottom: 10px; /* Add some space between labels and inputs */
      color: #dedede;
    }

    /* Style for form inputs */
    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px; /* Add space between input elements */
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Style for the submit button */
    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    /* Add some spacing above the submit button */
    input[type="submit"] {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section">
    <h2 class="parallax-text">Contact Us</h2>
  </div>
  
  </div>
  
  <h3 style="text-align: center; font-family: 'Advent Pro', sans-serif; color: #dedede;">Email us at singultech@gmail.com or visit us at the Wilton Library Website</h3>
  <h3 style="text-align: center; font-family: 'Advent Pro', sans-serif; color: #dedede;">Or you can use the form below to contact us directly:</h3>

  <div class="container">
    <form action="message-send.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="fname" name="name" placeholder="Your name...">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Your email...">


      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
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
