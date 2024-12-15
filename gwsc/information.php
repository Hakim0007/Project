<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Information</title>
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
                <li class="active"><a href="information.php" title="Information">INFORMATION</a></li>
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
     <h1>Pages of Interest</h1>
    <div class="row">
        <div class="column2">
            <div class="card">
                <a href="pitch.php" title="Pitch types and availability"><img src="images/pitches.jpg" /></a>
                <div class="container">
                    <p class="description">Our facility offers a variety of pitch types to suit every player's needs. Whether you prefer Tent Pitches, Touring Carvan Pitches, or Motorhome Pitches,
                        we have you covered.With our top-of-the-line equipment and experienced staff, you can be sure you're getting the best possible experience. Contact us today to
                        learn more about our pitch types and availability</p>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <a href="features.php" title="Features"><img src="images/features.jpg" /></a>
                <div class="container">
                    <p class="description">
                        Our wild camping and swimming sites offer a unique and unforgettable outdoor experience.
                        With beautiful natural surroundings and plenty of space to explore, you'll feel truly immersed in nature. Our sites feature a variety of amenities,
                        including clean and well-maintained facilities, fire pits for cooking and warmth, and ample space for tents and hammocks. </p>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <a href="pitch.php" title="Locations"><img src="images/locations.jpg" /></a>
                <div class="container">
                    <p class="description">
                        Discover the beauty of our camping and swimming sites in Global Wild Swimming and Camping. Our sites offer stunning natural scenery, clean
                        and well-maintained facilities, and plenty of space to explore. Whether you're looking to relax by the water, hike through the woods,
                        or roast marshmallows over the fire, our sites provide the perfect backdrop for your outdoor adventure.
                    </p>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <a href="localattraction.php" title="Local attractions"><img src="images/attractions.jpg"></a>
                <div class="container">
                    <p class="description">Explore the best of Kuwait's local attractions with our guide to the must-see sites.
                        Visit the Kuwait Zoo to see a diverse range of animals from around the world, or pay tribute to Kuwait's heroic past at the
                        Al-Qurain Martyrs Museum. For a more cultural experience, check out the Sheikh Abdullah Al Salem Cultural Centre, which showcases Kuwait's art, history,
                        and scientific achievements. Book your visit today and discover the beauty and history of this unique destination..</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
        <div class="footer-wrap">
            <div class="you-are-here">
                <a href="index.php" title="Home">HOME</a>|
                <a class="here" href="information.php" title="Information">INFORMATION</a>|
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

            </div>
        </div>
    </div>
    </div>
</body>

</html>