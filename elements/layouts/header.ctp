<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="row masthead">
                        <div class="span4">
                            <h1 class="brand">
                                <a href="/"><img src="/img/theme/okaloosa.png" alt=""></a>
                            </h1>
                        </div>
                        <div class="span8 hidden-phone hidden-tablet" id="login-or-register">
                            <div class="row search">
                                <div class="span8">
                                    <div>
                                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                                            <input type="text" placeholder="Search" name="s">
                                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                                        </form>
                                    </div>
                                </div>
                                <!--search form-->
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <div class="">
                                        <?php if ($this->Session->read('Auth.User')): ?>
                                            <?php
                                            $firstname = $this->Session->read('Auth.User.firstname');
                                            $lastname = $this->Session->read('Auth.User.lastname');
                                            ?>
                                            <div class="btn-group">
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
