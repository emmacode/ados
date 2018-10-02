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
                <a href="contact_us.php" class="nav-link">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->

<div class="main-container">
<section class="first-contact">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2 class="uppercase mb0 text-white">Contact Us</h2>
    </div>
    </div>
    </div>
</section>
</div>
<div class="container">
<section>
    <div class="row">
    <div class="col-md-6">
    <img src="images/office.jpeg" class="img-fluid z-depth-1-half" alt="An office image">
    </div>
    <div class="col-md-6 mt-5">
    <h4 class="uppercase">Get In Touch</h4>
           <p>
           At Ados we care about our customers.At Ados we care about our customers.At Ados we care about our customers.At Ados we care about our customers.At Ados we care about our customers.
           </p>
           <hr>
           <p>
               <strong><i class="fa fa-envelope "></i></strong> :  hello@ados.com
               <br>
               <strong><i class="fa fa-phone" aria-hidden="true"></i></strong>  : +2349060242202
               <br>
           </p>
    </div>
    </div>
</section>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><h2 class="text-center">Do you have a complain or question?</h2></div>
            <div class="col-md-3"></div>
        </div>
    </div>
   <section>
        <div class="container">
            <div class="row ">
                <div class="col-md-3"></div>
                <div class=" col-md-6">
                <?php
                if (!empty($_SESSION['error'])) {
                    foreach($_SESSION['error'] as $error) {
                        ?>
                        <div class="alert-danger" style="padding: 12px;"><?= $error ?></div>
                        <?php
                    }
                    unset($_SESSION['error']);
                    
                }
                if (!empty($_SESSION['success'])) {
                    ?>
                    <div class="alert-success" style="padding: 12px;"><?= $_SESSION['success']; ?></div>
                    <?php
                    unset($_SESSION['success']);
                }
                ?>
                    <form class="form-group" onsubmit="return Validate()" name="vform" action="/handlers/contact.php" method="post">
                        <h6 class="uppercase text-center">Send A Message</h6>
                        <div>
                        <input type="text" class="textInput" name="username" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
                        <div id="name_error" class="val_error alert-danger">
                        <?php
                        if (isset($_SESSION['error']['username'])) {
                            echo $_SESSION['error']['username'];
                        }
                        ?>
                        </div>
                        </div>
                        <div>
                        <input type="text" class="textInput" name="phone" placeholder="Phone" value="<?php echo isset($_POST['name']) ? $phone : '' ?>">
                        <div id="phone_error" class="val_error alert-danger">
                        <?php
                        if (isset($_SESSION['error']['phone'])) {
                            echo $_SESSION['error']['phone'];
                        }
                        ?>
                        </div>
                        </div>
                       <div>
                       <input type="text" class="textInput" name="email" placeholder="Email Address" value="<?php echo isset($_POST['name']) ? $email : '' ?>">
                       <div id="email_error" class="val_error alert-danger">
                       <?php
                        if (isset($_SESSION['error']['email'])) {
                            echo $_SESSION['error']['email'];
                        }
                        ?>
                       </div>
                       </div>
                        <div>
                        <textarea name="message" rows="4" placeholder="Message" class="textInput"><?php echo isset($_POST['name']) ? $message : '' ?></textarea>
                        <div id="message_error" class="val_error alert-danger">
                        <?php
                        if (isset($_SESSION['error']['message'])) {
                            echo $_SESSION['error']['message'];
                        }
                        ?>
                        </div>
                        </div>
                        <div>
                        <button name="submit" type="submit" class="but">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
   <?php include ('inc/footer.php'); ?>



