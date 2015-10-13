<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="row masthead">
                        <div class="span4">
                            <h1 class="brand">
                                <a href="/"><img src="/img/theme/hernando.png" alt=""></a>
                            </h1>
                        </div>
                        <div class="span8 hidden-phone hidden-tablet" id="login-or-register">
                            <div class="row">
                            <div class="row search">
                                <div class="span8 hidden-phone hidden-tablet">
                                    <div class="social-icn pull-right">
                            <ul>

                                <li> <a href="//www.twitter.com/CareersourcePH" target="_blank"><span class="icon-twitter"></span> </a></li>
                                <li><a href="//www.facebook.com/CareersourcePH" target="_blank"><span class="icon-facebook"></span> </a></li>
                                 <!-- <li><a href="//www.linkedin.com/company/careersource-tampa-bay" target="_blank"><span class="icon-linkedin"></span> </a></li>
                                 <li><a href="//www.youtube.com/careersourcetampabay"><span class="icon-youtube"></span> </a></li>

                                 <li><a href="//careersourcetampabay.blogspot.com" target="_blank"><span class="icon-blogger3"></span></a></li> -->

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
                                    <!-- Place this tag where you want the Live Helper Status to render. -->
                                    <div class="row-fluid" style="padding-right: 20px;">
                                      <div id="lhc_status_container" ></div>

                                      <!-- Place this tag after the Live Helper status tag. -->
                                      <script type="text/javascript">
                                      var LHCChatOptions = {};
                                      LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
                                      (function() {
                                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                      var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
                                      var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
                                      po.src = '//careersourcepascohernando.com/livechat/index.php/chat/getstatus/(click)/internal/(position)/original/(ma)/br/(hide_offline)/true/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
                                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                      })();
                                      </script>
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
