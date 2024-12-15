<?php
include "connection/configuration.php";
session_start();
if (isset($_SESSION["locked"])) {
    $difference = time() - $_SESSION["locked"];
    if ($difference > 15) {
        unset($_SESSION["locked"]);
        $sql1 = "UPDATE login_security set attempts='0' where id ='1'";
        mysqli_query($con, $sql1);   
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/background_styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="scripts/script.js" defer></script>
    <link rel="shortcut icon" href="images/titlebarlogo.png" />
    <title>Login</title>
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
    <div class="form">
        <form action="" method="post">
            <h3>Login Here</h3>
            <?php
            if (isset($_POST['login'])) {
                $uname = $_POST['username'];
                $s_pass = $_POST['password'];
                $sql = "SELECT * FROM users WHERE (uname='$uname' AND password='$s_pass')";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION["cust"] = $row['uname'];
                        $_SESSION['cust_name'] = $row['name'];
                        $sql1 = "UPDATE login_security set attempts='0' where id ='1'";
                        mysqli_query($con, $sql1);   
                        header("Location:index.php");
                    }
                } else {
                    $sql_attempts = "SELECT attempts FROM login_security where id ='1'";
                    $result_sql_atmpts = mysqli_query($con, $sql_attempts);
                    if (mysqli_num_rows($result_sql_atmpts) > 0) {
                        $row_m = mysqli_fetch_assoc($result_sql_atmpts);
                        $current_value = $row_m['attempts'];
                      } else {
                        $current_value = 0;
                      }
                    $new_value = $current_value + 1;
                    $sql1 = "UPDATE login_security set attempts='$new_value' where id ='1'";
                    mysqli_query($con, $sql1);    
                  //  $_SESSION["login_atempts"] += 1;
                    echo '<h4 class="danger-alert">Username or password is not matched</h4>';
                }
            }
            ?>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <?php
                    $sql_attempts = "SELECT attempts FROM login_security where id ='1'";
                    $result_sql_atmpts = mysqli_query($con, $sql_attempts);
                    if (mysqli_num_rows($result_sql_atmpts) > 0) {
                        $row_m = mysqli_fetch_assoc($result_sql_atmpts);
                        $current_value = $row_m['attempts'];
                      } else {
                        $current_value = 0;
                      }
            
            if ($current_value >= 3) {
                $_SESSION["locked"] = time();
                echo '<p class="danger-alert">Please wait for 10 minutes</p';
            } else { ?>
            <input type="submit" name="login" value="Log In" />
            <?php  } ?>
            <br>
            <p>OR</p>
            <a href="signup.php">Create a New Account!</a>
        </form>
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
            <p class="footer-content">Copyright <span>&copy;</span> 2023 Global Wild Swimming and Camping. All Rights
                Reserved </p>
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