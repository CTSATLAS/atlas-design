<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= Configure::read('Company.name') ?>">
    <meta name="keywords" content="<?= Configure::read('Company.name') ?>">
    <meta name="author" content="<?= Configure::read('Company.name') ?>">

    <!-- stylesheets -->
    <?= $this->Html->css('application') ?>
    <?= $this->Html->css('fa5/fa-svg-with-js') ?>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <title>
        <?= $title_for_layout ?> &mdash; <?= Configure::read('Company.name') ?>
    </title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <?php if (isset($nearestLocation)): ?>
                <div class="col-xs-12 col-md-6 text-center text-md-left">
                    <h6>Your nearest CareerSource office</h6>

                    <?php
                    $addressString = "{$nearestLocation['address_1']}";
                    if (isset($nearestLocation['address_2']) && !empty($nearestLocation['address_2'])) {
                        $addressString .= ", {$nearestLocation['address_2']}";
                    }
                    $addressString .= ", {$nearestLocation['city']}";
                    $addressString .= ", {$nearestLocation['state']}";
                    $addressString .= ", {$nearestLocation['zip']}";
                    echo "<address>$addressString</address>";
                    ?>
                </div>

                <div class="col-md-6 text-right d-none d-md-block">
                    <?php else: ?>
                    <div class="col-md-6 offset-md-6 text-right d-none d-md-block">
                        <?php endif ?>

                        <script>
                          (function () {
                            var cx = '009192411036288067143:d3m2mhhgkme';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                          })();
                        </script>
                        <gcse:search></gcse:search>
                    </div>
                </div>

                <div class="row masthead">
                    <div class="col-md-4">
                        <a href="/">
                            <?= $this->Html->image('default_header_logo.png', array('class' => 'img-fluid logo')) ?>
                        </a>
                    </div>

                    <div class="col-md-8 text-right">
                        <div class="social-icons fa-2x">
                            <?php
                            $twitterAccount = Configure::read('Social.twitter');
                            $facebookAccount = Configure::read('Social.facebook');
                            $linkedInAccount = Configure::read('Social.linkedin');
                            ?>

                            <?php if (isset($twitterAccount) && !empty($twitterAccount)): ?>
                                <a href="https://twitter.com/<?= $twitterAccount ?>">
                                <span class="social-icon fa-layers fa-fw">
                                    <i class="social-icon-background fas fa-circle" data-fa-transform="grow-4"></i>
                                    <i class="social-icon-brand fab fa-twitter" data-fa-transform="shrink-6"></i>
                                </span>
                                </a>
                            <?php endif ?>

                            <?php if (isset($facebookAccount) && !empty($facebookAccount)): ?>
                                <a href="https://facebook.com/<?= $facebookAccount ?>">
                                <span class="social-icon fa-layers fa-fw">
                                    <i class="social-icon-background fas fa-circle" data-fa-transform="grow-4"></i>
                                    <i class="social-icon-brand fab fa-facebook-f" data-fa-transform="shrink-6"></i>
                                </span>
                                </a>
                            <?php endif ?>

                            <?php if (isset($linkedInAccount) && !empty($linkedInAccount)): ?>
                                <a href="https://linkedin.com/in/<?= $linkedInAccount ?>">
                                <span class="social-icon fa-layers fa-fw">
                                    <i class="social-icon-background fas fa-circle" data-fa-transform="grow-4"></i>
                                    <i class="social-icon-brand fab fa-linkedin-in" data-fa-transform="shrink-6"></i>
                                </span>
                                </a>
                            <?php endif ?>
                        </div>

                        <?php if ($this->Session->read('Auth.user')): ?>
                            <div class="text-right">
                                <ul class="nav nav-pills mr-3 float-right">
                                    <li class="nav-item dropdown">
                                        Logged in as: <a href="#" class="d-inline-block nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Brandon Cordell</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item">Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <div class="text-right">
                                <ul class="nav mr-2 float-right">
                                    <li class="nav-item">
                                        <?= $this->Html->link(__('Login', true), array(
                                                'controller' => 'users',
                                                'action' => 'login',
                                                'kiosk' => false
                                        ), array('class' => 'nav-link')) ?>
                                    </li>

                                    <li class="nav-item">
                                        <?= $this->Html->link(__('Register', true), array(
                                            'controller' => 'users',
                                            'action' => 'registration',
                                            'kiosk' => false
                                        ), array('class' => 'nav-link')) ?>
                                    </li>
                                </ul>
                            </div>
                        <?php endif ?>
                    </div>
                </div>

                <nav class="navbar navbar-dark bg-success navbar-expand-lg">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapse"
                            aria-controls="collapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="collapse" class="collapse navbar-collapse">
                        <?= $this->Nav->bootstrapLinks('Top', true, 'nav sf-menu') ?>
                    </div>
                </nav>

                <?php if (!empty($this->params['pass']) && $this->params['pass'][0] == 'home'): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="our-services-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#our-services-carousel" data-slide-to="0"></li>
                                    <li data-target="#our-services-carousel" data-slide-to="1"></li>
                                    <li data-target="#our-services-carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item active flex justify-content-center align-items-center">
                                        <?= $this->Html->image('carousel/slide-1.jpg', array('style' => 'height: 550px; width: 1110px; object-fit: cover;')) ?>
                                    </div>

                                    <div class="carousel-item flex justify-content-center align-items-center">
                                        <?= $this->Html->image('carousel/slide-2.jpg', array('style' => 'height: 550px; width: 1110px; object-fit: cover;')) ?>
                                    </div>

                                    <div class="carousel-item flex justify-content-center align-items-center">
                                        <?= $this->Html->image('carousel/slide-3.jpg', array('style' => 'height: 550px; width: 1110px; object-fit: cover;')) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
    </header>

    <main class="container mt-4 mb-5">
        <?= $content_for_layout ?>
    </main>

    <footer>
        <div class="locations py-5">
            <?= $this->element('location_maps') ?>
        </div>

        <div class="container text-center">
            <div class="row py-4">
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <a href="https://careersourceflorida.com" target="_blank">
                        <?= $this->Html->image('career-source-florida-logo.png', array(
                            'alt' => 'CareerSource Florida Logo',
                            'class' => 'career-source-florida-logo',
                            'height' => 70,
                            'width' => 150
                        )) ?>
                    </a>

                    <p class="d-inline-block">
                        A proud partner of the
                        <a href="https://servicelocator.org" target="_blank">
                            <?= $this->Html->image('american-jobs-center-logo.png', array(
                                'alt' => 'American Job Center Logo',
                                'class' => 'american-job-center-logo'
                            )) ?>
                        </a>
                        network.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <p>
                        <?= Configure::read('Company.name') ?> is an equal opportunity employer/program. Auxiliary aids and
                        services are available upon request to individuals with disabilities.
                        All voice telephone numbers listed on this website may be reached by persons using TTY/TDD equipment
                        via the Florida Relay Service at 711.
                        Copyright © 2014 - <?= date('Y') ?> <?= Configure::read('Company.name') ?>.
                        All Rights Reserved. Developed & Hosted by Complete Technology Solutions
                    </p>

                    <p>
                        ATLAS is a trademark of Complete Technology Solutions Copyright © 2018 - Complete Technology
                        Solutions. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- javascripts -->
    <?= $this->Html->script('fa5/fontawesome-all.min') ?>
    <?= $this->Html->script('dist/application.min') ?>
</body>
</html>
