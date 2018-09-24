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
        <img src="images/Ados-e 4.png" alt="ADOS">
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
       <div class="col-md-6  content">
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
                <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
            <div class="feature boxed bg-secondary">
                <form method="POST" action="" class="text-center form-email">
                    <h4 class="uppercase mt48 mt-xs-0">Order through Us Today</h4>
                    <p class="lead mb64 mb-xs-24">Share details about what you want to order.</p>
                    <div class="overflow-hidden">
                        <hr>
                        <h6 class="uppercase">
                           1. What category of item do you want to order?
                        </h6>
                        <div class="col-sm-4">
                            <p class="mb16">
                                Electronics & Accesories
                            </p>
                            <div class="checkbox-option text-left">
                                <div class="inner"></div>
                                <input type="checkbox" name="electronics" value="electronics">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="mb16">
                                Bags & Shoes
                            </p>
                            <div class="checkbox-option text-left">
                                <div class="inner"></div>
                                <input type="checkbox" name="bags" value="bags">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="mb16">
                                Books
                            </p>
                            <div class="checkbox-option text-left">
                                <div class="inner"></div>
                            <input type="checkbox" name="books" value="books">
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="overflow-hidden">
                        <h6 class="uppercase">
                            2. Select if Individual or Company
                        </h6>
                        <div class="col-sm-6">
                            <p>Individual</p>
                            <div class="radio-option">
                                <div class="inner"></div>
                                <input type="radio" name="individual" value="individual">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p>Company</p>
                            <div class="radio-option">
                                <div class="inner"></div>
                                <input type="radio" name="company" value="company">
                            </div>
                        </div>
                        <hr>
                    </div>
    <div class="overflow-hidden">
            <h6 class="uppercase">Your Details</h6>
        <input type="text" name="name" class="col-md-6" placeholder="Your Name*">
        <input type="text" name="phone" class="col-md-6" placeholder="Your Current Phone Number*">
        <input type="text" name="email" placeholder="Your Current Email Address*">
        <input type="text" name="link" placeholder="Put Link of Item You want to order Here*">
        <textarea name="message" rows="2" placeholder="Type Your Message*"></textarea>
                    </div>
                    <div class="overflow-hidden">
                        <div class="col-md-6">
                            <h6 class="uppercase">Lastly, how did you hear about us?</h6>
                            <div class="select-option">
                            <select name="referrer">
                                <option selected value="Default">Select An Option</option>
                                <option value="website">Our Website</option>
                                <option value="friend">Friend</option>
                            </select>
                            </div>
                            <button type="submit">Submit Your Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
    </section>
    <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="images/Ados-e 3.png" alt="ADOS" width="250">
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
   <script src="js/hello.js" ></script>
</body>
</html>



