<?php include ('inc/header.php'); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top scrolling-navbar" >
<div class="container">
    <a href="home.php" class="navbar-brand">
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
<section class="first-order img-fluid">
    
</section>
<section>
    <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <?php
                    include_once "inc/errors.php";
                    ?>
        <div class=" feature boxed bg-secondary">
<form method="POST" action="handlers/orders.php" class="text-center">
<h4 class="uppercase mt48 mt-xs-0 ">ORDER THROUGH US TODAY</h4>
<p class="lead mb64 mb-xs-24">Share details about what you want to order</p>
<div class="overflow-hidden">
<hr>
<h6 class="uppercase">1. WHAT CATEGORY OF ITEM DO YOU WANT TO ORDER?</h6>
    <div class="row">
    <div class="col-md-3">
    <p class="mb16">Electronics</p>
    <div class="checkbox-option text-left">
        <div class="inner"></div>
        <input type="checkbox" value="electronics"  name="category[]">
    </div>
</div>
<div class="col-md-3">
    <p class="mb16">Bags & Shoes</p>
    <div class="checkbox-option text-left">
        <div class="inner"></div>
        <input type="checkbox" value="bags" name="category[]">
    </div>
</div>
<div class="col-md-3">
    <p class="mb16">Books</p>
    <div class="checkbox-option text-left">
        <div class="inner"></div>
        <input type="checkbox" value="books" name="category[]">
    </div>
</div>
<div class="col-md-3">
    <p class="mb16">Jersey</p>
    <div class="checkbox-option text-left">
        <div class="inner"></div>
        <input type="checkbox" value="jersey" name="category[]">
    </div>
</div>
    </div>
<hr>
</div>
<div class="overflow-hidden">
<h6 class="uppercase">2. SELECT IF INDIVIDUAL OR COMPANY</h6>
<div class="row">
<div class="col-md-6">
    <p>INDIVIDUAL</p>
    <div>
    <div class="radio-option">
    <div class="inner"></div>
    <input type="radio" id="individual" value="individual" name="rdn">
    </div>
    
    </div></div>
<div class="col-md-6">
    <p>COMPANY</p>
    <div class="radio-option">
        <div class="inner"></div>
        <input type="radio" value="company" name="rdn" >
    </div>
</div>
</div>
<hr>
</div>


<div class="overflow-hidden">
<h6 class="uppercase">3. YOUR DETAILS</h6>
<input type="text"  name="name " class="name" placeholder="Your Name*" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
<input type="text"  name="phone " class="phone" placeholder="Your Phone*" value="<?php echo isset($_POST['name']) ? $phone : '' ?>" >

<input type="text"  class="link" name="link" placeholder="Put Link of Item you want to order here*" value="<?php echo isset($_POST['name']) ? $link : '' ?>" >
<textarea name="message" id="individual"  data-require-pair="#individual" class="message"  rows="2" placeholder="Type Your Message" ><?php echo isset($_POST['name']) ? $message : '' ?></textarea>
</div>
<div class="overflow-hidden">
    <h6 class="uppercase">4. Lastly, how did you hear of us?</h6>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="select-option">
        <select name="referrer" >
            <option selected value="Default">Select An Option</option>
            <option value="">Google</option>
            <option value="">Our Website</option>
            <option value="">A Friend</option>
            <option value="">Other</option>
        </select>
</div>
<button type="submit" class="submit mb-3 but" name="submit">Submit Order</button>
<ul class="status list-unstyled alert-danger"></ul>
</div>
<div class="col-sm-3"></div>
</div>
    
</div>
</form>
        </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
<?php include ('inc/footer.php'); ?>