<?php 
 if(filter_has_var(INPUT_POST,'submit')){
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
 }
?>
<?php include ('inc/header.php'); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top scrolling-navbar" >
<div class="container">
    <a href="home.php" class="navbar-brand">
        <img src="images/Ados-e 3.png" alt="ADOS">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adosResponsive">
        <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="adosResponsive">
        <ul class="navbar-nav  ml-auto">
            <li class="nav-item" href="#">
                <a href="home.php" class="nav-link">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="about.php" class="nav-link">ABOUT US</a>
            </li>
           <li class="nav-item">
               <a href="order.php" class="nav-link">ORDER</a>
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
<section class="page-title page-title-4 bg-secondaryc">
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
       <div class="col-md-4 col-lg-6 image">
           <div class="background-image-holder">
               <img src="images/office.jpeg" alt="office" class=" img-fluid" >
           </div>
       </div>
       <div class="col-md-8 col-lg-6  content">
           <h4 class="uppercase">Get In Touch</h4>
           <p>
           At Ados our customer voice speaks. At Ados our customer voice speaks. At Ados our customer voice speaks. At Ados our customer voice speaks. At Ados our customer voice speaks. At Ados our customer voice speaks 
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
            <div class="row fadeIn">
                <div class="col-md-3"></div>
                <div class=" col-md-6">
                    <form class="form-group" onsubmit="return Validate()" name="vform" action="">
                        <h6 class="uppercase text-center">Send A Message</h6>
                        <div>
                        <input type="text" class="textInput" name="username" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
                        <div id="name_error" class="val_error alert-danger"></div>
                        </div>
                        <div>
                        <input type="text" class="textInput" name="phone" placeholder="Phone" value="<?php echo isset($_POST['name']) ? $phone : '' ?>">
                        <div id="phone_error" class="val_error alert-danger"></div>
                        </div>
                       <div>
                       <input type="text" class="textInput" name="email" placeholder="Email Address" value="<?php echo isset($_POST['name']) ? $email : '' ?>">
                       <div id="email_error" class="val_error alert-danger"></div>
                       </div>
                        <div>
                        <textarea name="message" rows="4" placeholder="Message" class="textInput"><?php echo isset($_POST['name']) ? $message : '' ?></textarea>
                        <div id="message_error" class="val_error alert-danger"></div>
                        </div>
                        <div>
                        <button name="submit" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
   <?php include ('inc/footer.php'); ?>



