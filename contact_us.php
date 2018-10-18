<?php include ('inc/header.php') ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top scrolling-navbar" >
<div class="container">
    <a href="https://adosmint.com" class="navbar-brand">
        <img src="images/Ados-e 3.png" alt="ADOS">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#adosResponsive" aria-controls="adosResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar" ></span>
        <span class="icon-bar middle-bar" ></span>
        <span class="icon-bar bottom-bar" ></span>
    </button>
    <div class="collapse navbar-collapse" id="adosResponsive">
        <ul class="navbar-nav smooth-scroll ml-auto">
            <li class="nav-item">
                <a href="https://adosmint.com" class="nav-link">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="https://adosmint.com/about.php" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="https://adosmint.com/order.php" class="nav-link">ORDER</a>
            </li>
            <!-- <li class="nav-item">
                <a href="https://adosmint.com/store.php" class="nav-link">STORE</a>
            </li> -->
            <li class="nav-item">
                <a href="https://adosmint.com/contact_us.php" class="nav-link">CONTACT</a>
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
    <h4 class="uppercase">Keep In Touch</h4>
           <p>
           At Adosmiint we care about our customers. <br>
           Get in touch with us today.
           </p>
           <hr>
           <p>
               <strong><i class="fa fa-envelope-o "></i></strong> :  support@adosmint.com
               <br>
               <strong><i class="fa fa-mobile" ></i></strong>  : +2348104383073
               <br>
               <strong><i class="fa fa-map-marker" ></i></strong>  : Omole Estate,Mayfair,Ile-Ife.
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
                        <h5 class="uppercase text-center mb-3">Send A Message</h5>
                        <hr class="underline mb-4">
                        <div>
                        <input type="text" class="textInput" name="username" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
                        <div id="name_error" class="val_error ">
                        <?php
                        if (isset($_SESSION['error']['username'])) {
                            echo $_SESSION['error']['username'];
                        }
                        ?>
                        </div>
                        </div>
                        <div>
                        <input type="text" class="textInput" name="phone" placeholder="Phone" value="<?php echo isset($_POST['name']) ? $phone : '' ?>">
                        <div id="phone_error" class="val_error">
                        <?php
                        if (isset($_SESSION['error']['phone'])) {
                            echo $_SESSION['error']['phone'];
                        }
                        ?>
                        </div>
                        </div>
                       <div>
                       <input type="text" class="textInput" name="email" placeholder="Email Address" value="<?php echo isset($_POST['name']) ? $email : '' ?>">
                       <div id="email_error" class="val_error">
                       <?php
                        if (isset($_SESSION['error']['email'])) {
                            echo $_SESSION['error']['email'];
                        }
                        ?>
                       </div>
                       </div>
                        <div>
                        <textarea name="message" rows="4" placeholder="Message" class="textInput"><?php echo isset($_POST['name']) ? $message : '' ?></textarea>
                        <div id="message_error" class="val_error">
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