<?php include ('inc/header.php') ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top scrolling-navbar" >
<div class="container">
    <a href="home.php" class="navbar-brand">
        <img src="images/Ados-e 3.png" alt="ADOS">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adosResponsive" aria-controls="adosResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="adosResponsive">
        <ul class="navbar-nav smooth-scroll ml-auto">
            <li class="nav-item">
                <a href="home.php" class="nav-link">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="about.php" class="nav-link">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a href="order.php" class="nav-link">ORDER</a>
            </li>
            <li class="nav-item">
                <a href="contact_us.php" class="nav-link">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->

<div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
<ul class="carousel-indicators">
<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
<li data-target="#carouselHome" data-slide-to="1"></li>
<li data-target="#carouselHome" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="images/laptop.jpg" class="img-fluid" alt="image">
<div class="carousel-caption">
<h4 class="text-white mb40 mb-xs-16 large animated bounceInUp">Order online for 310/$.</h4>
</div>
</div>
<div class="carousel-item">
<img src="images/iphone.jpg" class="img-fluid" alt="image">
<div class="carousel-caption">
<h3 class="text-white animated bounceInUp">Quality and Suitable products from Reliable Suppliers</h3>
<h5 class="uppercase mb16 animated bounceIn" style="color:#ccc;">So that only best Quality products are on offer</h5>
</div>
</div>
<div class="carousel-item">
<img src="images/electronics.jpg" class="img-fluid" alt="image">
</div>
</div>
</div>
<!--container-->
    <div class="container">
    <section>
    <h2 class="h2 text-center mb-5">Order Process</h2>
        <!-- first row -->
       <div class="row">
           <div class="col-md-6">
               <img src="images/process1.png" alt="image" class="img-fluid z-depth-1-half">
           </div>
           <div class="col-md-6">
               <h3 class="text-center mt-4 wow animated bounceIn">Step 1</h3>
               <p class="text-center animated  bounceIn">Browse www.amazon.com</p>
           </div>
       </div>
       <hr class="my-5">
       <!-- second row -->
       <div class="row mt-5">
           <div class="col-md-6 animated bounceInUp">
               <h3 class="text-center">Step 2</h3>
               <p class="text-center">Search for your desired item</p>
               <p></p>
           </div>
           <div class="col-md-6">
               <img src="images/process2.png" alt="image" class="img-fluid z-depth-1-half">
           </div>
       </div>
       <hr class="my-5">
       <!-- third row -->
       <div class="row mt-5">
           <div class="col-md-6">
               <img src="images/process3.png" alt="image" class="img-fluid z-depth-1-half">
           </div>
           <div class="col-md-6 animated fadeIn">
               <h3 class="text-center">Step 3</h3>
               <p class="text-center">Copy the address link in the <strong>RED CIRCLED BOX</strong> of the product from the URL </p>
           </div>
       </div>
       <hr class="my-5">
       <!-- fourth row -->
       <div class="row mt-5">
           <div class="col-md-6">
               <h3 class="text-center animated fadeIn">Step 4</h3>
               <p class="text-center">Paste <strong>COPIED LINK</strong> in the <strong> RED CYCLED BOX</strong> in ORDER page</p>
           </div>
           <div class="col-md-6">
               <img src="images/process4.png" alt="image" class="img-fluid z-depth-1-half">
           </div>
       </div>
    </section>
    
    </div>
   <?php include ('inc/footer.php'); ?>