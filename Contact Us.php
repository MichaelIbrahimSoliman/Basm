<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'] . '<br>';
  $mail = $_POST['email'] . '<br>';
  $cell = $_POST['cellphone'] . '<br>';
  $address = $_POST['Address(Optional)'] . '<br>';
  $serviestype = $_POST['serviestype'] . '<br>';
  $description = $_POST['description'] . '<br>';
  $userError = '';
  $description = '';
  if (strlen($user) < 3) {
    $formErrors[] = 'User must  be larger than 3 characters';
  }
  if (strlen($description) < 10) {
    $formErrors[] = 'User must  be larger than 10 characters';
  }
  // $formErrors =array();
  /*
   if(strlen($user)<3)
   {
     $formErrors[] ='User must  be larger than 3 characters';
   }

   if(strlen($description)<10)
   {
     $formErrors[] ='User must  be larger than 10 characters';
   }
   if(strlen($cell) == 14)
   {
     $formErrors[] ='User must  be larger than 10 characters';
   }
 */
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/CaontactUs.css">
  <title>BM SQUARE | Caontact Us</title>
  <link rel="icon" type="x-icon" href="/images/Logo.jpeg">
</head>

<body> <?php require "includes/header.php"; ?> <section class="contact" id="contact" style="margin-bottom:500px">
    <h3 class="title">contact Us</h3>
    <p class="sub-title">Get in Touch</p>
    <div class="container">
      <div class="text">
        <h2>Get in Touch</h2>
        <p>It is a long established fact that a reader will be distracted by readable It is a long established fact that a reader will be distracted by readable It is a long established fact that a reader will be distracted by readable It is a long established fact that a reader will be distracted by readable It is a long established fact that a reader will be distracted by readable</p>
        <div class="item">
          <div class="icon"></div>
          <div class="description">
            <p><strong>Name</strong></p><small>BM SQUARE</small>
          </div>
        </div>
        <p style="clear:both"></p>
        <div class="item">
          <div class="icon"></div>
          <div class="description">
            <p><strong>Adress</strong></p><small>Syntax</small>
          </div>
        </div>
        <p style="clear:both"></p>
        <div class="item">
          <div class="icon"></div>
          <div class="description">
            <p><strong>Phone</strong></p><small>+20 01273152060</small>
            <p><strong>Phone</strong></p><small>+20 01282022069</small>
          </div>
        </div>
        <p style="clear:both"></p>
      </div>
    </div>
    <div class="form-parent">
      <form class="contant-form" action="https://formsubmit.co/Info@bm-square.com" method="POST"><input class="form-control" type="text" name="name" placeholder="Your Name Please" class="w-100" require> <input class="form-control" type="email" name="email" placeholder="Your Email Please" class="w-100" require> <input class="form-control" type="text" name="cellphone" placeholder="Your Number Please" class="w-100" require> <input type="text" name="address" placeholder="Address(Optional)" class="w-100"><label for="cars">Choose Type of the servies:</label><select name="serviestype" id="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Other</option>
        </select><br><br><textarea type="text" name="message" placeholder="Please, any servies not found in Choose put It's name or  It's description here..." class="w-100">
        </textarea><button type="submit">Submit</button>
    </div>
  </section> <?php require "includes/footer.php"; ?> </body>

</html>