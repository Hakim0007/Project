<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Local Attraction</title>
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
                <li class="active"><a href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a></li>
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
    <h1>Local Attraction</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/zoo2.jpg" />
                <div class="container">
                    <h2>Kuwait Zoo</h2>
                    <p class="description">Kuwait Zoo, also known as the Kuwait Zoological Park, is a popular attraction located in Omariya, Kuwait.
                        The zoo is home to a variety of animals from all over the world, including lions, tigers, elephants, zebras, giraffes, and many more.
                        Visitors can enjoy observing these animals in their natural habitats, as well as participate in various activities and events held at the zoo.
                        The park also features a botanical garden, a lake, and several restaurants and cafes for visitors to relax and enjoy their time.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/meuseum.JPG" />
                <div class="container">
                    <h2>Al-Qurain Martyrs Museum</h2>
                    <p class="description">The Al-Qurain Martyrs Museum is a museum located in Kuwait City, Kuwait, that commemorates the Kuwaiti resistance against the
                        Iraqi invasion of Kuwait in 1990. The museum is named after the Al-Qurain region,
                        where a group of Kuwaiti resistance fighters took refuge during the occupation and were eventually captured and executed by the Iraqi army.
                        The Al-Qurain Martyrs Museum serves as a reminder
                        of the sacrifices made by Kuwaiti citizens during the invasion and occupation, and as a symbol of Kuwaiti resistance and national pride.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/culture.jpg" />
                <div class="container">
                    <h2>Sheikh Abdullah Al Salem Cultural Centre</h2>
                    <p class="description">Sheikh Abdullah Al Salem Cultural Centre is a state-of-the-art museum complex located in Kuwait City, Kuwait.
                        The centre features several museums and galleries, each focused on a different topic such as science, technology, space, Arabic Islamic science, natural history,
                        and fine arts. The complex also houses a theater, a library, and several other amenities for visitors.
                        The centre aims to promote cultural and scientific awareness, and it has won several international awards for its innovative design and educational programs.</p>
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
                <a class="here" href="localattraction.php" title="Local Attraction">LOCAL ATTRACTIONS</a>|
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