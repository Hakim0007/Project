<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Reviews</title>
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
                <li class="active"><a href="reviews.php" title="Reviews">REVIEWS</a></li>
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
    $ctry = "SELECT rev_id FROM review";
    $rs = mysqli_query($con, $ctry);
    $nor = mysqli_num_rows($rs);
    ?>
    <h1>Reviews</h1>

    <div class="reviews-header-section">
        <div class="total-reviews">
            <h2>Total Reviews: <?php echo $nor; ?></h2>
        </div>
        <div class="add-review-section">
            <div class="add-review-btn">
                <?php
                if (isset($_SESSION["cust"])) { ?>
                    <a href="addreview.php">Add Review</a>
                <?php } else { ?>
                    <a href="#" onclick="alert('Please Login to add review!')">Add Review</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <br>
    <?php
    include "connection/configuration.php";
    $sql = "SELECT * from review";
    $result = mysqli_query($con, $sql) or die("Query failed");

    ?>

    <div class="reviews-section">
        <div class="reviews-wrap">
            <div class="reviews-images">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <div class="review">
                            <div class="image-section">
                                <h3><?php echo $row['name']; ?></h3>
                                <a href=""><img src="images/user.png" width="70" height="70" /></a>
                                <p><?php echo $row['review_content']; ?></p>
                                <span><?php echo $row['review_date']; ?></span>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h5>No Reviews Yet.</h5>";
                }
                ?>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="footer-wrap">
            <div class="you-are-here">
                <a href="index.php" title="Home">HOME</a>|
                <a href="information.php" title="Information">INFORMATION</a>|
                <a href="pitch.php" title="Pitch">PITCH</a>|
                <a class="here" href="reviews.php" title="Reviews">REVIEWS</a>|
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