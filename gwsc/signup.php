<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/captchascript.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Sign Up</title>
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

            </ul>
        </div>
    </nav>
    <div class="form2">
        <form action="signup.php" method="post">
            <h3>Sign Up Here</h3>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="e-mail">Email</label>
            <input type="text" name="email">
            <br>
            <div class="g-recaptcha" data-sitekey="6Lcty88kAAAAAGXiIXksVTQSadRH8lznLMz6GY-r"></div>
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" id="signup" name="signup" value="Sign Up" />
            <br>
            <a href="loginorsignup.php">Login</a>
        </form>
        <?php
        include "connection/configuration.php";
        if (isset($_POST['signup'])) {
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT uname from users WHERE uname='{$uname}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo '<h4 class="danger-alert">User Already Exists.</h4>';
            } else {
                $sql1 = "INSERT INTO users(uname,email,password) values('{$uname}','{$email}','{$password}')";
                if (mysqli_query($con, $sql1)) {
                    echo '<h4 class="success-alert">Account Created.</h4>';
                }
            }
        }
        ?>
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