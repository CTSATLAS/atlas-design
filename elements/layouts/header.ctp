<header class="p0">
    <div class="container">
        <?php if (isset($nearestLocation)): ?>
            <div class="row">
                <div class="span4">
                    <h6><strong>Your nearest CareerSource office</strong></h6>
                    <?php
                    $addressString = "{$nearestLocation['address_1']}";
                    if (isset($nearestLocation['address_2']) && !empty($nearestLocation['address_2'])) { $addressString .= ", {$nearestLocation['address_2']}"; }
                    $addressString .= ", {$nearestLocation['city']}";
                    $addressString .= ", {$nearestLocation['state']}";
                    $addressString .= ", {$nearestLocation['zip']}";
                    echo "<address>$addressString</address>";
                    ?>
                </div>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="row masthead">
                        <div class="span4">
                            <h1 class="brand">
                                <a href="/"><img src="/img/theme/okaloosa.png" alt=""></a>
                            </h1>
                        </div>
                        <div class="span8" id="login-or-register">
                            <div class="row">
                                <div class="row search">
<!--                                    <div class="span8 hidden-phone hidden-tablet">-->
<!--                                        <div>-->
<!--                                            <form id="search-form" action="search.php" method="GET"-->
<!--                                                  accept-charset="utf-8" class="navbar-form">-->
<!--                                                <input type="text" placeholder="Search" name="s">-->
<!--                                                <a href="#"-->
<!--                                                   onClick="document.getElementById('search-form').submit()"></a>-->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <!--search form-->
                                </div>
                            </div>


                        </div>
                    </div>
                    <?= $this->element('layouts/nav') ?>
                </div>
            </div>
        </div>
        <?php if (!empty($this->params['pass']) && $this->params['pass'][0] == 'home'): ?>
            <?= $this->element('layouts/middle_nav') ?>
        <?php endif; ?>
    </div>
</header>
