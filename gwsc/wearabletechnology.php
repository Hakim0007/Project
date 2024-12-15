<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Wearable Technology</title>
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
                <li><a href="features.php" title="Features">FEATURES</a></li>
                <li><a href="contact.php" title="Contact">CONTACT</a></li>
                <li><a href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a></li>
                <li class="active"><a href="wearabletechnology.php" title="Wearable Technology">WEARABLE TECHNOLOGY</a></li>

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
    <h1>Wearable Technology Available on Our Sites</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/tent.jpg" />
                <div class="container">
                    <h2>Camping Tents</h2>
                    <p class="description">   
                    <ul>
                        <li>Tents are portable shelters made of fabric and supported by poles and guy lines.</li>
                        <li>Tents come in a variety of shapes and sizes, with different features to suit different needs and preferences.</li>
                        <li>Some common types of tents include:
                    <ul>
                        <li>Dome tents</li>
                        <li>Cabin tents</li>
                        <li>Backpacking tents</li>
                        <li>Tunnel tents</li>
                    </ul>
                </li>
                    </ul></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/kitchen.jpg" />
                <div class="container">
                    <h2>Camping Kitchen</h2>
                    <p class="description">We have included a camping kitchen on our camping site to provide campers 
                        with a convenient and functional space for cooking and preparing meals. The camping kitchen 
                        is equipped with a portable stove, cooking utensils, pots and pans, dishes, and a cleaning kit, 
                        allowing campers to prepare meals on site without having to bring their own equipment. Our camping 
                        kitchen is designed to be easy to use and clean, and is a great option for campers who want to enjoy 
                        delicious, home-cooked meals during their outdoor adventures.
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/cookware.jpg" />
                <div class="container">
                    <h2>Camping Cookware</h2>
                    <p class="description">We have included a wide range of camping cookware on our 
                        camping site to ensure that campers have access to high-quality and functional cooking tools. 
                        Our camping cookware includes lightweight and durable pots, pans, utensils, and other cooking tools
                         that are designed to be easy to pack and transport. We offer cookware sets in various materials and
                          configurations, allowing campers to choose the perfect set for their needs. Additionally,
                         our camping cookware is easy to clean and maintain, making outdoor cooking a breeze for campers of all skill levels.
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/cooler.jpg" />
                <div class="container">
                    <h2>Camping Coolers</h2>
                    <p class="description">We have made available camping coolers on our camping site to provide 
                        campers with a convenient and functional way to keep their food and drinks cold while enjoying
                         outdoor activities. Our camping coolers come in a range of sizes and styles, from small personal coolers to large 
                         coolers for group camping trips. They are designed to be durable and easy to transport, with features like handles
                          and wheels for easy mobility. Additionally, our camping coolers are well-insulated to keep food and 
                        drinks cold for extended periods of time, even in hot weather.
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/lights.jpeg" />
                <div class="container">
                    <h2>Camping Lights</h2>
                    <p class="description">We have added camping lights on our camping site to provide campers with a safe 
                        and well-lit environment during their stay. Our camping lights include a range of options, such as 
                        lanterns, flashlights, and headlamps, to accommodate various lighting needs. They are designed to be 
                        durable and long-lasting, with features like rechargeable batteries, multiple brightness settings, 
                        and weather-resistant materials. Our camping lights are also lightweight and easy to pack, making 
                        them a great addition to any camper's gear.
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/tools.jpg" />
                <div class="container">
                    <h2>Camping Tools</h2>
                    <p class="description">We have included a variety of camping tools on our camping site to help campers
                         make the most of their outdoor adventures. Our camping tools include a range of multi-tools, knives,
                          axes, and saws that are designed to be durable and functional. They are made from high-quality materials 
                          and are built to withstand the wear and tear of outdoor use. Our camping tools are also easy to transport,
                           with features like compact folding designs and sheaths for safe storage. With our camping tools, campers can feel 
                        confident and well-prepared for any outdoor situation.
                    </p>
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
                <a href="features.php" title="Features">FEATURES</a>|
                <a href="contact.php" title="Contact">CONTACT</a>|
                <a href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a>|
                <a class="here" href="wearabletechnology.php" title="Wearable Technology">WEARABLE TECHNOLOGY</a>

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