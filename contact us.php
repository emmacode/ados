<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Afolabi Moyinoluwa">
    <title>Order items from Amazon through Ados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" >
<div class="container">
    <a href="home.php" class="navbar-brand">
        <img src="images/ados e.png" alt="ADOS">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adosResponsive">
        <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="adosResponsive">
        <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item" href="#">
                <a href="home.php" class="nav-link">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="about.php" class="nav-link">ABOUT US</a>
            </li>
           
            <li class="nav-item">
                <a href="contact us.php" class="nav-link">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->

<div class="main-container">
<section class="page-title page-title-4 bg-secondary">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h3 class="uppercase mb0">Contact Us</h3>
    </div>
    </div>
    </div>
</section>
</div>

   <section class="image-square left">
       <div class="col-md-6 image">
           <div class="background-image-holder">
               <img src="images/office.jpeg" alt="office" class="background-image" width="700" height="640">
           </div>
       </div>
       <div class="col-md-6 col-md-offset-1 content">
           <h4 class="uppercase">Get In Touch</h4>
           <p>
           At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
           </p>
           <hr>
           <p>
               <strong>Email:</strong> hello@ados.com
               <br>
               <strong>Phone:</strong> +2349060242202
               <br>
           </p>
       </div>
   </section>
   <section>
    <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
    <div class=" col-md-6">
        <form class="form-group" action="<?php echo ['PHP_SELF'] ?>">
        <h6 class="uppercase text-center">Send A Message</h6>
        <input type="text" class="" name="name" placeholder="Your Name">
        <input type="text" class="" name="phone" placeholder="Phone">
        <input type="text" class="" name="email" placeholder="Email Address">
        <textarea name="message" rows="4" placeholder="Message"></textarea>
        <button name="submit" type="submit">Send Message</button>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    </div>
   </section>
    <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="images/Ados e.png" alt="ADOS" width="250">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h5><small> TWITTER</small></h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h5><small> INSTAGRAM</small></h5>
                        <hr>
                    </div>
                </div>
            </div>    
    </footer>
    <script src="js/jquery.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/ados.js" ></script>
</body>
</html>



