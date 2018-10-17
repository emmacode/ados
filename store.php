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
                <a href="index.php" class="nav-link">HOME</a>
            </li>
            <li class="nav-item" >
                <a href="about.php" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="order.php" class="nav-link">ORDER</a>
            </li>
            <li class="nav-item">
                <a href="store.php" class="nav-link">STORE</a>
            </li>
            <li class="nav-item">
                <a href="contact_us.php" class="nav-link">CONTACT</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /.navbar -->
<section class="store">
    <div class="container">
       <div class="text-center middle">
           COMING SOON!
           <div id="demo"></div>
       </div>
    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script>
//store javascript
// Set the date we're counting down to
var countDownDate = new Date("nov 15, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000)
</script>
</body>
</html>