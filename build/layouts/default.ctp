<?php
/**
 * @author shawn sandy
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $title_for_layout; ?> &mdash;
        <?php __('Tampa Bay Workforce Alliance') ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
    <!-- Bootstrap -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="css/stylesheet" href="css/style.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="default">
<div class="page">
    <!--Site Header-->
    <header class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img src="images/logo_03.png" alt="Logo"/></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="color orange pull-right">Facebook Twitter LinkedIN</div>
                    </div>
                    <div class="row">
                        <ul class="list-inline pull-right">
                            <li>Employers</li>
                            <li>Job Seekers</li>
                            <li>News</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <!--Page Content-->
   <?php echo $content_for_layout; ?>
   <!--Site Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <img class="logo" src="images/cs-logo-small_13.png" alt=""/>
                        A proud partner <img height="29" class="ajobs" src="images/ajobs.png" alt="American Jobs Center"/>of the Network.
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex fugit ipsa laborum nulla,
                        perspiciatis quaerat quidem velit veritatis voluptas. <br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consectetur ea necessitatibus ut
                        veniam voluptates.</p>
                </div>
            </div>
            <nav>
                <ul class="list-inline">
                    <li>Employers</li>
                    <li>Job Seekers</li>
                    <li>News</li>
                    <li>Contact Us</li>
                    <li>Partners & Resources</li>
                    <li>Location</li>
                    <li>Legal Notices</li>
                    <li>About Us</li>
                </ul>
            </nav>
        </div>
    </footer>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>