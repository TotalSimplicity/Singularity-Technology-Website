<!DOCTYPE html>
<html>
<head>
  <title>Equipment - Singularity Technology</title>
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
      grid-template-columns: repeat(1, 1fr); /* 5 columns */
      grid-gap: 20px; /* Adjust gap between grid items */
      padding: 35%;
      padding-top: 30px;
      background-color: black;
    }
    
    .grid-item {
      /*border: 1px solid #ccc; */
      padding: 20px;
      text-align: center;
      background-color: #04364A;
    }
    
    .grid-item h3 {
      color: white;
    }

    .grid-item p {
      color: white;
    }
    
    .grid-item img {
      max-width: 100%; /* Ensure images don't exceed container width */
      height: auto;
      margin-bottom: 10px; /* Space between image and text */
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="parallax-section" style="height: 300px">
    <h2 class="parallax-text">Equipment</h2>
  </div>
  
  <div class="grid-container">
    <!-- Grid items -->
    <div class="grid-item">
      <img id="img1" src="" alt="Image 1">
      <h3>Elegoo Printers</h3>
      <p>We have 2 Elegoo printers across the team.</p>
    </div>
    <div class="grid-item">
      <img id="img2" src="" alt="Image 2">
      <h3>Glowforge</h3>
      <p>Our local high school has a Glowforge Pro laser cutter that they allow us to use.</p>
    </div>
    
    <!-- Add more grid items as needed -->
  </div>

  <?php include('footer.php'); ?>
</body>
<script>
    const gridItems = [
        { folder: 'equipmentphotos/elegoo', currentIndex: 0, totimage: 2 },
        { folder: 'equipmentphotos/glowforge', currentIndex: 0, totimage: 1 }
        // Add more grid items with their respective photo folders and currentIndex as needed
    ];

    // Function to update image source for a specific grid item
    function updateImage(gridItemIndex) {
        const { folder, currentIndex } = gridItems[gridItemIndex];
        const imgElement = document.getElementById(`img${gridItemIndex + 1}`);
        imgElement.src = `${folder}/${currentIndex}.png`;
        gridItems[gridItemIndex].currentIndex = (currentIndex + 1) % gridItems[gridItemIndex].totimage; // Change '3' to the total number of photos in the folder
    }

    // Call updateImage for each grid item initially
    gridItems.forEach((item, index) => {
        updateImage(index);
    });

    // Call updateImage for each grid item every 3 seconds (3000 milliseconds)
    setInterval(() => {
        gridItems.forEach((item, index) => {
            updateImage(index);
        });
    }, 3000);
</script>
</html>
