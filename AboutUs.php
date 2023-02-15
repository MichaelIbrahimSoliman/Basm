<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/AboutUs.css">
  <title>BM SQUAR | About Us</title>
  <link rel="icon" type="x-icon" href="/images/Logo.jpeg">
</head>
<body>
  <?php require "includes/header.php"; ?>
 

  <div class="about-tabs">
    <ul>
      <li> <a href="#about">Introduction</a></li>
      <li style="margin-left: 200px;"> <a href="#OURPORTFOLIO">OUR PORTFOLIO</a> </li>
      <li style="margin-left: 200px;"> <a href="#OURProjects">OUR Projects</a></li>
      <li style="margin-left: 200px;"> <a href="#servies">Servies</a></li>
    </ul>
  </div>

  <section class="about" id="about">
    <div class="container" style="background-color: white;">
      <h3 class="title">About Us</h3>
      <p class="sub-title">Who Us</p>
    </div>
    <p style="clear: both;"></p>

    <div class="content">
      <div class="image">
        <img src="./images/Logo.jpeg" />
       
      </div>
      <div class="text">
        <h3>We are BM S Q U R E <span>Gernal Contracting & Finishing</span></h3>
        <p>Some words put here to intdource yourslef</p>
      </div>
      <p style="clear: both;"></p>
    </div>
  </section>


  <section class="OURPORTFOLIO" id="OURPORTFOLIO">
    <div class="container" style="background-color: white;">
      <div class="section-header-container"></div>
      <h4 class="title">OUR PORTFOLIO</h4>
      <h2 class="sub-title">A NATIONAL FOOTPRINT</h2>
    </div>
    <div class="destination-info">
      <p>
        Orascom Development has a diverse portfolio of stunning destinations in popular tourist areas across Europe, the
        Middle East and North Africa, covering more than 100 million sq. m.

        We currently have 10 destinations enriching the lives of our residents and welcoming guests from around the
        world. These are:
        <span id="dots">...</span><span id="more">
          • Egypt – El Gouna, Makadi Heights, O West, Taba Heights and Byoum

          Across our real estate, hotel and town management businesses, we apply consumer insights and emerging buying
          behaviour trends to meet our customers’ diverse needs.
        </span>
      </p>
      <button onclick="myFunction()" id="myBtn">Read more</button>
    </div>


    <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
    </script>
  </section>

  <section class="OURProjects" id="OURProjects">
    <div class="container" style="background-color: white;">
      <h3 class="title">OUR Projects</h3>
      <p class="sub-title"> View Some Our Projects</p>
    </div>

    <p style="clear: both;"></p>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./images/work1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/work2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/work3.jpg" alt="Third slide">
        </div>
      </div>
    </div>
  </section>

  <section class="servies" id="servies" style="background-color: white;">
    <div class="container" style="background-color: white;" >
      <h2 class="title" style="color: black;">Servies</h2>
      <p class="sub-title" > What us provid </p>

      <div class="our-servies"  >
        <div >
          <div class="son">
            <h2>Web Desgin</h2>
            <p>It is a long establish fact that a reader will be distracted by the readable content of a page when</p>
          </div>
        </div>

        <div>
          <div class="son">
            <h2>Adverting</h2>
            <p>It is a long establish fact that a reader will be distracted by the readable content of a page when</p>
          </div>

        </div>

        <div>
          <div class="son">
            <h2>Apps Desgin</h2>
            <p>It is a long establish fact that a reader will be distracted by the readable content of a page when</p>
          </div>

        </div>
      </div>

    </div>
  </section>


  <?php require "includes/footer.php"; ?>

</body>
</html>