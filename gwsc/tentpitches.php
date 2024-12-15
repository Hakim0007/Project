<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/slideshowjs.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Tent Pitches</title>
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
                <li><a href="index.php" title="Home">HOME</a></li>
                <li><a href="information.php" title="Information">INFORMATION</a></li>
                <li class="active"><a href="pitch.php" title="Pitch">PITCH</a></li>
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
 
    <?php
    include "connection/configuration.php";
    $sql = "SELECT * from sites where pitch_type LIKE '%tent%'";
    $result = mysqli_query($con, $sql) or die("Query failed");
    ?>
    <div class="gallery-section">
        <div class="gallery-section-header">
            <h1>Tent Pitches</h1>
            <h4>Please <a href="contact.php">Contact</a> us to book your favourite site.</h4>

        </div>
        <div class="gallery-wrap">
            <div class="gallery-wrap">
                <div class="gallery-images">
                    <div class="gallery-active">
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
            <div class="gallery-images">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="gallery">
                            <div class="image-section">
                                <img src="images/<?php echo $row['site_image']; ?>" width="200" height="200" />
                            </div>
                            <div class="" title="<?php echo $row['site_name']; ?>">
                            </div>
                            <h3><?php echo $row['site_name']; ?></h3>
                            <?php if ($row['availability'] != 'Available') { ?>
                                <h5 class="not-available"><?php echo $row['availability']; ?></h5>
                            <?php } else { ?>
                                <h5 class="available"><?php echo $row['availability']; ?></h5>
                            <?php } ?>
                            <a title="View Location on Map" target="_blank" href="https://www.google.com/maps?ll=29.358855,47.828667&z=10&t=m&hl=en-US&gl=US&mapclient=embed&q=kuwait,+camp"><img src="images/location.png" /></a>

                        </div>
                <?php }
                } else {
                    echo "<h2>No Site Available.</h2>";
                }
                ?>
            </div>
        </div>
        <hr>

        <hr>
        <div class="mapouter">
            <h1>Location Map</h1>
            <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=kuwait&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
            </div>
        </div>
        <div class="footer">
            <div class="footer-wrap">
                <div class="you-are-here">
                    <a href="index.php" title="Home">HOME</a>|
                    <a href="information.php" title="Information">INFORMATION</a>|
                    <a class="here" href="pitch.php" title="Pitch">PITCH</a>|
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>