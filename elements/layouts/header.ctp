<header class="p0">
    <div class="container-fluid">
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

        <div class="row-fluid">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="row-fluid masthead">
                        <div class="container">
                          <div class="span4">
                            <?php echo $this->element('core/themelogo'); ?>
                        </div>
                        <div class="span8" id="login-or-register">
                            <div class="row-fluid">                           
                                <div id="header-login" class="span12">
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
                                                ?> | 
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
                        
                    </div>                   
                       <?php echo $this->element('layouts/nav') ?>
                </div>
            </div>
        </div>
    </div>
</header>
