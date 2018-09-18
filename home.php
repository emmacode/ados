<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Afolabi Moyinoluwa">
    <title>Order items from Amazon through Ados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <a href="#" class="nav-link nav-lin">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->

<section class="first">
    <div class="container">
        <h2 class="strong-900 text-white">Buy items online <br> @ 310/$</h2>
        <p>
        <ul class="text-15">
            <li>Visit Amazon.com</li>
            <li>select items your want to order</li>
            <li>Below desired item,share the item link to our contact</li>
            <li>Chat with our Representative</li>
        </ul>
        </p>
    </div>
</section>
    <section>
        <div class="container-fluid text-center">
            <h2>order in just 4 steps</h2>
            <div class="row text-center">
                <!-- Row 1 first column -->
                <div class="col-sm-6">
                    <strong>
                                STEP 1
                            </strong>
                    <div class="thumbnail">
                        
                        <img class="thumbnail-img" src="images/step 1.jpg" alt="Step 1" width="200" height="200">
                        <p class="thumbnail-p">
                            Search for your desired item
                        </p>
                    </div>
                </div>
                <!-- Row 1 second column-->
                <div class="col-sm-6">
                    <strong>
                                STEP 2
                            </strong>
                    <div class="thumbnail">
                        
                        <img class="thumbnail-img" src="images/step 2.jpg" alt="Step 1" width="200" height="200">
                        <p class="thumbnail-p">
                            Choose your desired specs for your item
                        </p>
                    </div>
                </div>
            </div>
            <br>
                <!-- Row 2-->
                <div class="row text-center">
                <div class="col-sm-6">
                    <strong>
                                STEP 3
                            </strong>
                    <div class="thumbnail">
                        
                        <img class="thumbnail-img" src="images/step 3.jpg" alt="Step 1" width="200" height="200">
                        <p class="thumbnail-p">
                            Click the share button
                        </p>
                    </div>
                </div>
                <!-- Row 2 second column -->
                <div class="col-sm-6">
                    <strong>
                                STEP 4
                            </strong>
                    <div class="thumbnail">
                        
                        <img class="thumbnail-img" src="images/step 4.jpg" alt="Step 1" width="200" height="200">
                        <p class="thumbnail-p">
                            Share to our whatsapp contact
                        </p>
                    </div>
                </div>
                </div>
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