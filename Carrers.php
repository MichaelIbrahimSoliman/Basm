<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="script.js" defer="defer"></script>
    <link rel="stylesheet" href="css/Carrers.css">
    <link rel="icon" type="x-icon" href="/images/Logo.jpeg">
    <title>BM SQUARE</title>
</head>

<body>
    <section class="carrers" id="carrers" style="margin-bottom:50px;">
        <p style="clear:both"></p>
        <h3 class="title">Join Us</h3>
        <p class="sub-title">Get in Touch</p>
        <p style="clear:both"></p>
        <div class="container">
            <div class="text"><img class="d-block w-50" src="./images/Logo.jpeg"></div>
        </div>
        <div class="container" style=" background-color: #fff;">
            <form class="contant-form" action="https://formsubmit.co/Info@bm-square.com" method="Post" >
                   <label class="d-block mb-4">
                   <span class="form-label d-block">Your name</span>
                   <input type="text" name="" placeholder="Your Name Please" class="w-50">
                   </label>
                   <label class="d-block mb-4" style="margin-top:45px">
                   <span class="form-label d-block">Your Phone number</span>
                   <input type="text" name="" placeholder="Your Name Please" class="w-50">
                   </label>
                   <label class="d-block mb-4" style="margin-top:45px">
                    <span class="form-label d-block">Your Adress & City</span>
                    <input required name="name" type="text" class="form-control w-50" placeholder="Adress , City" class="w-50">
                   </label>
                    <label class="d-block mb-4" style="margin-top:45px">
                    <span class="form-label d-block">Email address</span>
                    <input required name="email" type="email" class="form-control w-50"placeholder="joe.bloggs@example.com">
                    </label>

                    <label class="d-block mb-4" style="margin-top:45px">
                    <span class="form-label d-block">Your CV</span>
                    <input required name="cv" type="file" class="form-control w-50">
                   </label>
                   <div class="mb-3" style="margin-top:50px"><button type="submit" class="btn btn-primary px-3 rounded-3">Apply</button></div>
            </form>
        </div>
    </section>
</body>

</html> <?php require "includes/footer.php"; ?>