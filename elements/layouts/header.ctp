<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                <div class="header-block clearfix">
                    <div class="row masthead">
                        <div class="span4">
                            <h1 class="brand">
                                <a href="/"><img src="/img/theme/Career-Source-CLM-logo.gif" alt=""></a>
                            </h1>
                        </div>
                        <div class="span8 hidden-phone hidden-tablet" id="login-or-register">
                            <div class="row">
                            <div class="row search">
                                <div class="span8 hidden-phone hidden-tablet">
                                    <div class="social-icn pull-right">
                            <ul>
                                <li> <a href="//twitter.com/CareerSourceCLM" target="_blank"><span class="icon-twitter"></span> </a></li>
                                <li><a href="//www.facebook.com/pages/Workforce-Connection-Citrus-Levy-and-Marion-Counties/87942865739" target="_blank"><span class="icon-facebook"></span> </a></li>
                                 <li><a href="//www.linkedin.com/company/careersource-citrus-levy-marion/" target="_blank"><span class="icon-linkedin"></span> </a></li>
                                 <li><a href="//plus.google.com/115597822348232168515" target="_blank"><span class="icon-google-plus3"></span> </a></li>
                                 <li><a href="//youtube.com/channel/UCbKvkHfcclHB8btHFhFPk8g" target="_blank"><span class="icon-youtube"></span> </a></li>
<!--                                 <li><a href="//www.youtube.com/careersourcetampabay"><span class="icon-youtube"></span> </a></li>-->

                            </ul>
                        </div>
                                </div>
                                <!--search form-->
                            </div>
                                <div id="header-login" class="span8">
                                    <div class="row-fluid">

                                        <?php if ($this->Session->read('Auth.User')): ?>
                                            <?php
                                            $firstname = $this->Session->read('Auth.User.firstname');
                                            $lastname = $this->Session->read('Auth.User.lastname');
                                            ?>

                                            <div class="btn-group" style="margin-right:15px">
                                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <?php printf(__('Logged in as: <strong>%s %s</strong>', true), ucwords($firstname), ucwords($lastname)) ?>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu pull-right">

                                                    <li>
                                                        <?=
                                                        $this->Html->link(__('My Dashboard', true), array(
                                                            'controller' => 'users',
                                                            'action' => 'dashboard',
                                                            'admin' => false,
                                                        ))
                                                        ?>
                                                    </li>
                                                    <li>
                                                        <?=
                                                        $this->Html->link(__('Edit Profile', true), array(
                                                            'controller' => 'users',
                                                            'action' => 'edit',
                                                            'kiosk' => false,
                                                            $this->Session->read('Auth.User.id')
                                                        ))
                                                        ?>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <?=
                                                        $this->Html->link(__('Logout', true), array(
                                                            'controller' => 'users',
                                                            'action' => 'logout',
                                                            'kiosk' => false,
                                                            'web'
                                                        ))
                                                        ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php else: ?>

                                            <div class="btn-group-1">
                                                <?=
                                                $this->Html->link(__('Login', true), array(
                                                    'controller' => 'users',
                                                    'action' => 'login',
                                                    'kiosk' => false
                                                        ), array(
                                                    'class' => 'btn-'
                                                ))
                                                ?>
                                                <?=
                                                $this->Html->link(__('Register', true), array(
                                                    'controller' => 'users',
                                                    'action' => 'registration',
                                                    'kiosk' => false
                                                        ), array(
                                                    'class' => 'btn-'
                                                ))
                                                ?>
                                            </div>
<?php endif ?>
                                    </div>
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
