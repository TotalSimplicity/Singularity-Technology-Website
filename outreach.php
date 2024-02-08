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
      color: white;
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

  <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Ice Cream Social1.jpg" alt="Image 1">
  <img class = "imgRight" src="outreachphotos/Ice Cream Social2.jpg" alt="Image 1">

      <div>
        <h1>Ice Cream Social  (Pre-Season June 3rd)</h1>
        <p> The Wilton Library, where we are based out of, hosted an ice cream social for the town and we decided to set up a table where community members could buy a 3D printed toy or pair of earrings and interact with last year's robot. We enjoyed talking about robotics and FIRST with  younger kids who seemed interested. This event not only served as a fundraiser, but also helped us develop a connection with our local community. </p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="" alt="Coming Soon"> 
  <img class = "imgRight" src="" alt="Coming Soon"> 
      <div>
        <h1>Meet With Seven Acres Middle School Kids (May 5)</h1>
        <h1> COMING SOON!!</h1>
        <p></p>
      </div>
      
    </div>

  <div class=".grid-container">
  <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Pre-Season Library Programs1.JPG" alt="Image 1">
      <div>
        <h1> Pre-Season Library Programs (June 21, August 24) </h1>
        <p> Each year, while school is out, we conduct 2-3 STEM summer programs at the library focused on the <u>engineering design process</u>. This summer, we hosted a Rube Goldberg inspired program as well as a Rubber Band Powered Cars program. The focus was to make sure kids had fun while simultaneously gathering knowledge about real world applications for engineering.  </p>
      </div>
      <img class = "imgRight" src="outreachphotos/Pre-Season Library Programs2.JPG" alt="Image 1">

    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/DYHD1.jpg" alt="Image 1">
  <img class = "imgRight" src="" alt="IMAGE NOT IN DRIVE(Aarushi Fault)">

      <div>
        <h1>Destroy Your Hard Drive Fundraiser (December 9)</h1>
        <p>This event is our <u>biggest annual fundraiser:</u> Destroy Your Hard Drive. We charge $20 to destroy people’s hard drives while we put our robot on display and talk to community members about FIRST, FTC, and our ongoing season. We have a projector with a rotating slideshow of pictures in the back. This is an annual season highlight for us, and we are happy to have raised $1400
through the event this year.</p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="" alt="NO IMAGES IN DRIVE">
  <img class = "imgRight" src="" alt="NO IMAGES IN DRIVE">

      <div>
        <h1>Toy + Bake Sale at our Local Stop and Shop (Oct 22)</h1>
        <p>We decided to do another fundraiser but with more innovation than ever before. Rather than holding a regular bake sale with chocolate chip cookies and more, we incorporated 3D printed gadgets into our sale. There were many interested people who stopped by to check it out, those with and without kids. It is safe to say that it was well liked by the general community. </p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="" alt="Coming Soon"> 
  <img class = "imgRight" src="" alt="Coming Soon"> 
      <div>
        <h1>Girl Scouts (December 20)</h1>
        <h1> COMING SOON!!</h1>
        <p></p>
      </div>
      
    </div>

    <div class="grid-item">

      <div>
        <h1>Alumni Visit (January 13th)</h1>
        <p>The team was able to reach out to two alums, Edwin and Navod. They were back in town from college and we invited them in for our meetings where we presented our robot and got tips on how to succeed in this year’s challenge. It was exciting to learn about various post-high school opportunities in engineering from them. </p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="" alt="Blame Aarushi">
  <img class = "imgRight" src="" alt="Blame Aarushi">

      <div>
        <h1>Middlebrook Middle School Presentation (January 23)</h1>
        <p>Upholding a yearly tradition in Wilton, we presented and judged at our middle school’s science fair. In between student project judging and the awards ceremony, we presented to over 200 students, parents, and teachers about FTC and the various challenges we faced during the season. Kids also drove our bot!</p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="" alt="Coming Soon"> 
  <img class = "imgRight" src="" alt="Coming Soon"> 
      <div>
        <h1>Winter Carnival (Febuary 4)</h1>
        <h1> COMING SOON!!</h1>
        <p></p>
      </div>
      
    </div>

    <div class="grid-item">

      <div>
        <h1>Cider Mill (Febuary 14 and 15)</h1>
        <h1>COMING SOON</h1>
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
