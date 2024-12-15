<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Features</title>
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
                <li><a href="pitch.php" title="Pitch">PITCH</a></li>
                <li><a href="reviews.php" title="Reviews">REVIEWS</a></li>
                <li class="active"><a href="features.php" title="Features">FEATURES</a></li>
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
    <h1>Features Available on Our Sites</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/park.jpg" />
                <div class="container">
                    <h2>Amusement Park</h2>
                    <p class="description">The park usually contains a combination of rides, attractions, games, food vendors, and souvenir shops.
                        The rides range from gentle, slow-paced attractions like carousels, Ferris wheels, and train rides to more intense, high-speed
                        rides like roller coasters, water slides, and freefall rides..</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/carparking.jpg" />
                <div class="container">
                    <h2>Car Parking</h2>
                    <p class="description">
                    <ul>
                        <li>Adequate Space</li>
                        <li>24/7 Security</li>
                        <li>Easy Access</li>
                        <li>Clear Signage</li>
                        <li>Shade to protect vehicles</li>
                        <li>Good Surface</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/showers.jpg" />
                <div class="container">
                    <h2>Showers</h2>
                    <p class="description">We know that after a long day of hiking and exploring, nothing feels better than a hot shower. That's why we're thrilled to
                        offer clean, comfortable shower facilities to all of our camping guests. Our showers are meticulously maintained and regularly sanitized, ensuring
                        that you can enjoy a refreshing and hygienic experience. With plenty of
                        hot water and ample space to get cleaned up, you'll be feeling fresh and rejuvenated in no time. So come on in, lather up, and rinse off - our showers are waiting for you!.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card2">
                <img src="images/wifi.JPG">
                <div class="container">
                    <h2>Internet Access</h2>
                    <p class="description">We understand the importance of staying connected, even when you're enjoying the great outdoors. That's why we're pleased
                        to offer complimentary Wi-Fi access to all of our guests. Whether you need to check your email,
                        catch up on work, or simply stream your favorite movie, our reliable and fast internet service has got you covered. So sit back, relax, and stay connected with us!.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card2">
                <img src="images/watertower.jpg" />
                <div class="container">
                    <h2>Kuwait Water Towers</h2>
                    <p class="description">Did you know that our camping site is located near one of Kuwait's most iconic landmarks?
                        The Kuwait water towers, also known as the Kuwait Towers, are a group of three distinctive structures that have become a symbol
                        of the country's architectural heritage. These towers stand tall and proud, offering a stunning backdrop for your camping adventure.
                        Whether you're taking a leisurely stroll around the park or simply gazing up at the towers from your tent, you'll be awed
                        by their impressive size and unique design. So come experience the beauty and grandeur of the Kuwait water towers - they're just a stone's throw away from our camping site!</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card2">
                <img src="images/rules2.JPG" />
                <div class="container">
                    <h2>Rules & Regulations</h2>
                    <p class="description">
                    <ol>
                        <li>Reservations must be made in advance.</li>
                        <li>Payment must be made at the time of reservation.</li>
                        <li>Reservations are non-refundable.</li>
                        <li>A minimum of 24 hours notice is required for any changes or cancellations.</li>
                        <li>Campsites are available on a first-come, first-served basis.</li>
                        <li>No loud music or noise after 10:00 pm.</li>
                        <li>Children under 14 years of age must be accompanied by an adult.</li>
                        <li>No cutting or damaging trees or other vegetation.</li>
                        <li>No alcohol consumption is allowed outside of designated areas.</li>
                        <li>Fires must be extinguished before leaving the site or going to bed.</li>
                        <li>Any damage caused to the property will result in a charge for repairs.</li>
                        <li>Repeated violation of rules may result in a ban from the site.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
        <div class="footer-wrap">
            <div class="you-are-here">
                <a href="index.php" title="Home">HOME</a>|
                <a href="information.php" title="Information">INFORMATION</a>|
                <a href="pitch.php" title="Pitch">PITCH</a>|
                <a href="reviews.php" title="Reviews">REVIEWS</a>|
                <a class="here" href="features.php" title="Features">FEATURES</a>|
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