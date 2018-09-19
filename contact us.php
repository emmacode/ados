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
    <a href="#" class="navbar-brand">
        <img src="images/ados e.png" alt="ADOS">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adosResponsive">
        <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="adosResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" href="#">
                <a href="home.php" class="nav-link nav-lin">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="about.php" class="nav-link nav-lin">ABOUT US</a>
            </li>
            <li class="nav-item" >
                <a href="#" class="nav-link nav-lin">LOCAL STORE</a>
            </li>
            <li class="nav-item">
                <a href="contact us.php" class="nav-link nav-lin">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->

<section class="first-contact">
<div class="container">
    </div>
</section>
    <section>
        <div class="container-fluid text-center">
            <h3>Our Contact Details</h3>
           <p class="mt-4">
               <p class="lead">
               <strong>  Phone Number : </strong>
               +234-810-438-3073
               <br>
               <strong> Email Address : </strong> hello@ados.com
               </p>
               <i style="font-size:24px" class="fa">&#xf082;</i>
 </p>
</div>
    </section>
    <section>
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-3"></div>
               <div class="col-sm-9 col-md-12 col-lg-6">
                  <h4 class="text-center">SEND US A MESSAGE</h4>
                  <div class="form-group mb-0">
                  <label class="control-label">Your name *</label>
                  <input name="name" type="text" class="form-control">
                  </div>
                  <div class="form-group mb-0">
                  <label class="control-label">Phone *</label>
                  <input name="phone" type="text" class="form-control">
                  </div>
                  <div class="form-group mb-0">
                  <label class="control-label">Email Address *</label>
                  <input name="email" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                  <label class="control-label">Type Your Message *</label>
                  <textarea class="form-control" name="message" rows="4"></textarea>
                  </div>
                  <div class="text-center mt-1 mb-4">
                        <button type="submit" class="btn btn-sm">
                            Send Message
                        </button>
                    </div>
                  </div>
               <div class="col-lg-3"></div>
           </div>
       </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <!-- First -->
                <div class="col-sm-4 col-md-4 col-lg-4  mt-5">
                    <div class="col">
                        <img src="images/Ados e.png" alt="ADOS" width="250">
                        <span class="clearfix"></span>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 mt-3">
                            <h5 class="heading mb-2" id="gold">SITE MAP</h5>
                            <ul class="list-unstyled li-link">
                                <li>
                                    <a href="home.php" title="Home">Home</a>
                                </li>
                                <li>
                                    <a href="about.php" title="About Us">About Us</a>
                                </li>
                                <li>
                                    <a href="#" title="Local Store">Local Store</a>
                                </li>
                                <li>
                                    <a href="contact us.php" title="Contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-3">
                            <h5 class="heading mb-2" id="gold">SERVICES</h5>
                            <ul class="list-unstyled li-link">
                                <li>
                                    <a href="#" title="Home">Home</a>
                                </li>
                                <li>
                                    <a href="#" title="About Us">About Us</a>
                                </li>
                                <li>
                                    <a href="#" title="Local Store">Local Store</a>
                                </li>
                                <li>
                                    <a href="#" title="Contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Second -->
                <div class="col-lg-4 col-sm-4 col-md-4 pt-5">
                    <div class="col mt-5 push">
                        <h5 class="heading mt-5 mb-4" id="gold">CONTACT US:</h5>
                        <p class="">+234-810-438-3073 | hello@ados.com</p>
                    </div>
                </div>
                <!-- Third -->
                <div class="col-sm-4 col-md-4 col-lg-4 mt-5">
                    <h5 class="heading text-uppercase mb-1" id="gold">Type Your Message</h5>
                    <form class="form-default" action="sendHello" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-0">
                                    <label class="control-label">Your name *</label>
                                    <input name="name" type="text" class="form-control">
                                    <span class="bar" ></span>
                                </div>
                            </div>

                            <div class="col-6">
                            <div class="form-group mb-0">
                            <label class="control-label"> Phone *
                            </label>
                            <input name="phone" type="text" class="form-control">
                            <span class="bar"></span>
                            </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group mb-0">
                                    <label class="control-label">Email address *</label>
                                    <input name="email" type="text" class="form-control">
                                    <span class="bar" ></span>
                                </div>
                            </div>
                        </div>


                        
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Type Your Message *</label>
                                    <textarea name="message" class="form-control" rows="4"></textarea>
                                    <span class="bar" ></span>
                                </div>
                            </div>
                        </div>
                    <div class="text-center mt-1 mb-4">
                        <button type="submit" class="btn btn-sm">
                            Send Message
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="js/ados.js" ></script>
</body>
</html>