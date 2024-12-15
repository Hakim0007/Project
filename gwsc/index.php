<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/slideshowjs.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>GWSC</title>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title"><a href="index.php"><img src="images/logo.png" height="60" width="60" /></a></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li class="active"><a href="index.php" title="Home">HOME</a></li>
                <li><a href="information.php" title="Information">INFORMATION</a></li>
                <li><a href="pitch.php" title="Pitch">PITCH</a></li>
                <li><a href="reviews.php" title="Reviews">REVIEWS</a></li>
                <li><a href="features.php" title="Features">FEATURES</a></li>
                <li><a href="contact.php" title="Contact">CONTACT</a></li>
                <li><a href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a></li>
                <li><a href="wearabletechnology.php" title="Wearable Technology">WEARABLE TECHNOLOGY</a></li>
                <?php
                include "connection/configuration.php";
                session_start();
                if (!isset($_SESSION["cust"])) { ?>
                    <div class="login-section">
                        <li><a class="login-btn" href="loginorsignup.php" title="Login">Login/Signup</a></li>
                    </div>
                <?php } else { ?>
                    <div class="login-section">
                        <li><a class="login-btn" href="logout.php" title="Logout">Logout</a></li>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <form action="search_page.php?search_term">
        <div class="search-bar-section">
            <p class="search-bar-section-text">Search for the best camping and swimming sites!</p>
            <div class="search">
                <input type="text" name="search_term" placeholder="Search...">
                <button type="submit" title="Search for sites"><img src="images/magnifier.png" /></button>
            </div>
        </div>
    </form>
    <div class="slidershow middle">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <img src="images/slideshowimg4.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slideshowimg2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slideshowimg3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slideshowimg1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slideshowimg5.jpg" alt="">
            </div>
        </div>

        <div class="navigation">
            <label for="r1" class="bar2"></label>
            <label for="r2" class="bar2"></label>
            <label for="r3" class="bar2"></label>
            <label for="r4" class="bar2"></label>
            <label for="r5" class="bar2"></label>
        </div>
    </div>
    <?php
    include "connection/configuration.php";
    $sql = "SELECT * from sites limit 6";
    $result = mysqli_query($con, $sql) or die("Query failed");

    ?>
    <div class="gallery-section">
        <div class="gallery-section-header">
            <h1>Availabale Sites</h1>
        </div>
        <div class="gallery-wrap">

            <div class="gallery-images">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="gallery">
                            <div class="image-section">
                                <img src="images/<?php echo $row['site_image']; ?>" width="200" height="200" />
                            </div>
                            <div class="caption" title="<?php echo $row['site_name']; ?>">
                                <h3><?php echo $row['site_name']; ?></h3>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h5>No Site Available yet.</h5>";
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="gallery-section-header">
            <h1>Pitch Types Available</h1>
        </div>
        <div class="gallery-wrap">
            <div class="gallery-images">
                <div class="gallery">
                    <div class="image-section">
                        <a href="tentpitches.php" title="Tent Pitches"><img src="images/tent-pitch.jpg" width="200" height="200" title="Tent Pitches" /></a>
                        <h3>Tent Pitches</h3>
                    </div>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="touringpitches.php" title="Touring Carvan Pitches"><img src="images/touringcarvanpitches.jpg" width="200" height="200" title="Touring Carvan Pitches" /></a>
                        <h3>Touring Carvan Pitches</h3>
                    </div>

                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="motorhomepitches.php" title="Motorhome Pitches"><img src="images/motorhomepitch.jpg" width="200" height="200" title="Motorhome Pitches" /></a>
                        <h3>Motorhome Pitches</h3>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mapouter">
            <h1>Location Map</h1>
            <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kuwait&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            </div>
        </div>
        <div class="footer">
            <div class="footer-wrap">
                <div class="you-are-here">
                    <a class="here" href="index.php" title="Home">HOME</a>|
                    <a href="information.php" title="Information">INFORMATION</a>|
                    <a href="pitch.php" title="Pitch">PITCH</a>|
                    <a href="reviews.php" title="Reviews">REVIEWS</a>|
                    <a href="features.php" title="Features">FEATURES</a>|
                    <a href="contact.php" title="Contact">CONTACT</a>|
                    <a href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a>|
                    <a href="wearabletechnology.php" title="Wearable Technology">WEARABLE TECHNOLOGY</a>
                </div>
                <p class="footer-content">Copyright <span>&copy;</span> 2023 Global Wild Swimming and Camping. All Rights Reserved </p>
                <div class="social-media-links">
                    <a href="#" class="media-link" title="Facebook"><img src="images/facebook.png" /></a>
                    <a href="#" class="media-link" title="Instagram"><img src="images/instagram.png" /></a>
                    <a href="#" class="media-link" title="Twitter"><img src="images/twitter.png" /></a>
                    <a href="rssfeed.php" target="_blank" class="media-link" title="RSS Feed"><img src="images/rssfeed.png" /></a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>