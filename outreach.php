<!DOCTYPE html>
<html>
<head>
  <title>Outreach - Singularity Technology</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="header.png" type="image/png">
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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      /* width: 97%; --> */
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

    .grid-item1 {
      border: 1px solid #ccc; 
      padding: 20px;
      text-align: left;
      background-color: #04364A;
      height: 900px;
      display: flex;
      flex-direction: wrap;
      width: 97%;
    }
    
    .grid-item h3 {
      color: white;
      padding: 5px;
    }

    .grid-item1 h3 {
      color: white;
      padding: 5px;
    }

    .grid-item h1 {
      color: green;
      padding: 5px;
      padding-left: 20px;
    }

    .grid-item1 h1 {
      color: green;
      padding: 5px;
      padding-left: 20px;
    }

    .space{
      margin-bottom: 5px;
    }

    .space2{
      margin-bottom: 10px;
    }

    .grid-item p {
      color: white;
      padding: 5px;
      padding-left: 20px;
    }

    .grid-item1 p {
      color: white;
      padding: 5px;
      padding-left: 20px;
    }
    
    .grid-item img {
      max-height: 95%; /* Ensure images don't exceed container width */
      width: auto;
      margin-bottom: 10px; /* Space between image and text */
      padding: 5px;
      color: white;
    }

    .grid-item1 img {
      max-height: 20%; /* Ensure imSages don't exceed container width */
      width: auto;
      margin-bottom: 10px; /* Space between image and text */
      padding: 5px;
      color: white;
    }
    
    .imgRight{
      left: 200px;
    }

   

    @media only screen and (max-width: 600px) {
      .grid-container {
      }

      .grid-item {
        padding: 1px;
        width: 90%;
        margin: 0 auto;
        height: 200px;
      }

      .grid-item img {
        max-height: 15%; /* Ensure images don't exceed container width */
        width: auto;
      }

      .grid-item h1 {
      color: green;
      padding: 5px;
      font-size: 1em;
    }

    .grid-item p {
      color: white;
      padding: 5px;
      font-size: 0.5em;
    }

    }
    
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height:30vh">
    <h2 class="parallax-text">Outreach</h2>
  </div>

  <div class="grid-item1">

  <div>
    <h1>Hospital Toys Donation</h1>
    <p>Singularity Technology has partnered with local hospitals in CT and NYC to donate 240 3D printed toys. <br> <br> <b> 1) Only Make Believe: </b> <br> <br> Only Make Believe (OMB) interacts with children in hospitals, special education schools, and care facilities to explore their imagination and engage in critical thinking through interactive theater. OMB hires professional actors to foster social and emotional growth in children with terminal illnesses, medically fragile conditions and developmental disabilities. OMB partners with over 45 facilities in the New York metro area as well as 15 in and around Washington D.C. In all, more than 90,000 children have starred in over 5,000 shows. <br>
      <br> <u> We donated 80 3D articulate stars to OMB; </u> they are now used in all 45 facilities in their NY metro location to give to the children during each performance since they are the “stars of the show”. Entering into our <u> long-term partnership with OMB</u>, our next project is creating butterflies to give to the children during their performances on flowers and gardens. We are very proud of this partnership and the impact it has on children's learning, joy, and well being 
      <br>
        <img class="imgRight" src="outreachphotos/Hospital1.png" alt="Coming soon">
        <img class="imgRight" src="outreachphotos/Hospital2.png" alt="Coming soon">
      
      <br> <br> <b>2) Yale New Haven Children’s Hospital in Bridgeport, CT: </b> <br> <br>
      Yale New Haven Children’s Hospital (YNHCH) is a national leader in children's care. It offers children the most advanced medical care available, from care for acute surgical conditions to offering therapy and psychology services YNHCH's Bridgeport Hospital campus features an advanced newborn intensive care unit, pediatric intensive care unit that specializes in the care of infants through adolescents and a pediatric sleep center. The campus is designed to provide a child-friendly environment, as it is critical to facilitate emotional and social growth during the crisis of illness and hospitalization. 
      To help support this campus, we delivered 160 3D printed toys on Valentine's day this year along with 90 homemade Valentine's cards. In addition, toys were distributed to the specialists and play areas for ongoing interaction and use.
    </p>

        <img class="imgRight" src="outreachphotos/Hospital3.png" alt="Coming soon">
        <img class="imgRight" src="outreachphotos/Hospital4.png" alt="Coming soon">
  </div>
</div>


<div class="grid-item">

  <img class="imgRight" src="outreachphotos/CiderMill1.png" alt="Coming soon"> 
      <div>
        <h1>Cider Mill Elementary School Presentation (February 14 & 15, 2024)</h1>
        <p>Each year, we present to approximately 100 fifth grade students at our local elementary school and talk to them about our challenge and the design process. We tailored our presentation to their current computer science unit by focusing on the obstacles we faced while programming the robot software. We aim to inspire them and help them discover the various STEM opportunities in the real world. </p>
      </div>
      
    </div>
  </div>

  <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Staff1.png" alt="Coming soon">


      <div>
        <h1>WLA Staff Presentations (February 7th)</h1>
        <p> We wanted to establish a more involved relationship with the staff members at the Wilton Library Association. As we were based out of the library, we were well known by all, but there were many people who were curious to know more about our season and the robot we’d built. We were able to present to over thirty staff members and shared our love of Robotics with them. 
 </p>
      </div>
      <img class = "imgRight" src="outreachphotos/Staff2.png" alt="Coming soon">
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/ASML1.png" alt="Coming soon">
      <div>
        <h1>ASML Presentation (February 2nd and 5th)</h1>
        <p> We wanted to place a great focus on presenting to the adults in our community and receiving feedback from professionals in the field. We were able to contact 5 ASML engineers who were able to spend time with us during some of our meetings. They gave us valuable insight into what their careers look like as well as offered tips to deal with static. 
 </p>
      </div>
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Winter Carnival1.JPEG" alt="Coming Soon"> 
      <div>
        <h1>Winter Carnival (Febuary 4)</h1>
        <p>We decided to participate in the town’s local winter traditions by holding a Hot Chocolate Fundraiser where we connected with over seventy-five kids and parents. We had our robot set up next to the table. We raised money for the team, but more importantly, we inspired countless children to pursue a future in STEM.   </p>
      </div>
      <img class = "imgRight" src="outreachphotos/Winter Carnival2.JPEG" alt="Coming Soon"> 
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/MB1.png" alt="Coming soon">
  <img class = "imgRight" src="outreachphotos/MB2.png" alt="Coming soon">

      <div>
        <h1>Middlebrook Middle School Presentation (January 23)</h1>
        <p>Upholding a yearly tradition in Wilton, we presented and judged at our middle school’s science fair. In between student project judging and the awards ceremony, we presented to over 200 students, parents, and teachers about FTC and the various challenges we faced during the season. Kids also drove our bot!</p>
      </div>
    </div>

    <div class="grid-item">
<div>
  <h1>Alumni Visit (January 13th)</h1>
  <p>The team was able to reach out to two alums, Edwin and Navod. They were back in town from college and we invited them in for our meetings where we presented our robot and got tips on how to succeed in this year’s challenge. It was exciting to learn about various post-high school opportunities in engineering from them. </p>
</div>
</div>

<div class="grid-item">
  <img class = "imgRight" src="outreachphotos/GirlScouts1.png" alt="Coming soon"> 
      <div>
        <h1>Girl Scouts (December 20)</h1>
        <p> To promote women in STEM, we ran an event for over 20 girls from our local Girl Scout Troop. The scouts created simple hoverboards from CDs and Balloons, and we also got to show them our robot.  </p>
      </div>
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/DYHD1.jpg" alt="Coming soon">
  <img class = "imgRight" src="outreachphotos/DYHD2.png" alt="Coming soon">

      <div>
        <h1>Destroy Your Hard Drive Fundraiser (December 9)</h1>
        <p>This event is our <u>biggest annual fundraiser:</u> Destroy Your Hard Drive. We charge $20 to destroy people’s hard drives while we put our robot on display and talk to community members about FIRST, FTC, and our ongoing season. We have a projector with a rotating slideshow of pictures in the back. This is an annual season highlight for us, and we are happy to have raised $1400
through the event this year.</p>
      </div>
      
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/BakeSale1.png" alt="Coming soon">
  <img class = "imgRight" src="outreachphotos/BakeSale2.png" alt="Coming soon">

      <div>
        <h1>Toy + Bake Sale at our Local Stop and Shop (Oct 22)</h1>
        <p>We decided to do another fundraiser but with more innovation than ever before. Rather than holding a regular bake sale with chocolate chip cookies and more, we incorporated 3D printed gadgets into our sale. There were many interested people who stopped by to check it out, those with and without kids. It is safe to say that it was well liked by the general community. </p>
      </div>
      
    </div>

    <div class=".grid-container">
  <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Pre-Season Library Programs1.JPG" alt="Coming soon">
      <div>
        <h1> Pre-Season Library Programs (June 21, August 24) </h1>
        <p> Each year, while school is out, we conduct 2-3 STEM summer programs at the library focused on the <u>engineering design process</u>. This summer, we hosted a Rube Goldberg inspired program as well as a Rubber Band Powered Cars program. The focus was to make sure kids had fun while simultaneously gathering knowledge about real world applications for engineering.  </p>
      </div>
      <img class = "imgRight" src="outreachphotos/Pre-Season Library Programs2.JPG" alt="Coming soon">
    </div>

    <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/SchoolVisit1.png" alt="Coming Soon"> 
      <div>
        <h1>Meet With Seven Acres Middle School Kids (May 5)</h1>
        <p> Our local Montessori school reached out and asked to hear more about our robot and robotics in general. We were able to present to them and answer various questions regarding the hardware and software of the robot. We had a small group of five kids come in.
</p>
      </div>
      
    </div>


  <div class="grid-item">
  <img class = "imgRight" src="outreachphotos/Ice Cream Social1.jpg" alt="Coming soon">
  <img class = "imgRight" src="outreachphotos/Ice Cream Social2.jpg" alt="Coming soon">

      <div>
        <h1>Ice Cream Social  (Pre-Season June 3rd)</h1>
        <p> The Wilton Library, where we are based out of, hosted an ice cream social for the town and we decided to set up a table where community members could buy a 3D printed toy or pair of earrings and interact with last year's robot. We enjoyed talking about robotics and FIRST with  younger kids who seemed interested. This event not only served as a fundraiser, but also helped us develop a connection with our local community. </p>
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
