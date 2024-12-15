<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshowstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Add Review</title>
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
      <div class="contact-form-section">
        <div class="contact-form-header">
            <h1>Write your Review</h1>
        </div>
        <div class="contact-form-wrap">
            <div class="contact-form-content">
                <form action="addreview.php" method="POST" class="elements">
                    <div class="contact-form-input">
                        <label>Full Name</label>
                        <input type="text" name="fullname" required />
                        <br><br>
                        <label>E-mail Address</label>
                        <input type="email" name="email" required /><span> Your E-mail will be private.</span>
                        <br><br>
                        <label>Comment</label><br>
                        <textarea name="message" rows="4" cols="50" class="message"></textarea>
                        <br><br>
                        <input type="submit" name="send" value="Send" title="Send message" />
                        <input type="reset" value="Cancel" title="Reset the input" />
                    </div>

                </form>
                <?php
                include "connection/configuration.php";
                date_default_timezone_set("Asia/Kuwait");
                if (isset($_POST['send'])) {
                    $fname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $comment = $_POST['message'];
                    $date = date("Y:m:d:h:i");
                    $sql1 = "INSERT INTO review(name,email,review_content,review_date) values('{$fname}','{$email}','{$comment}','{$date}')";
                    if (mysqli_query($con, $sql1)) {
                        echo '<p class="success-message">Review Added</p>';
                    }
                }
                ?>
            </div>
        </div>
        <br>
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