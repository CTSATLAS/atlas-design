<?php
/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2010
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>
<?php echo $this->Html->scriptStart() ?>
        $(document).ready(function(){
                $('#UserSelfSignLoginForm').submit(function(){
                        $('.self-sign-kiosk-button').button("disable");
                        return true;
                });
        });
<?php echo $this->Html->scriptEnd() ?>
<div class="self-sign-wrapper">
    <h1><?php printf(__('Welcome to %s. Please sign in here.', true), Configure::read('Company.name')) ?></h1>
    <div id="errorMessage"></div>
    <?php echo $this->Session->flash(); ?>
    <?php
    echo $this->Session->flash('auth');
    echo $form->create('User', array('url' => '/kiosk/users/self_sign_login?btn=' . $show_buttons));
    if($login_method == 'ssn')
    {
            echo $form->input('lastname', array(
                        'label' => __('Last Name', true),
                        'value' => ($driver_card['last_name'] ? $driver_card['last_name'] : ''),
                        'before' => '<p class="left">',
                        'between' => '</p><p class="left">',
                        'after' => '</p><br class="clear"/>'
                ));

            if($ssn_length == 9)
            {
                    echo $form->input('ssn', array(
                                'label' => __($ssn_length . ' Digit SSN', true),
                                'type' => 'password',
                                'before' => '<p class="left">',
                                'between' => '</p><p class="left">',
                                'after' => '</p><br class="clear"/>',
                                'maxlength' => $ssn_length
                        ));
                }
                else

                {
                        echo $form->input('ssn', array(
                                'label' => __('Last ' . $ssn_length . ' Digits of SSN', true),
                                'type' => 'password',
                                'before' => '<p class="left">',
                                'between' => '</p><p class="left">',
                                'after' => '</p><br class="clear"/>',
                                'maxlength' => $ssn_length
                        ));
                }
        }
        else 
        {
                echo $form->input('username', array(
                        'label' => __('Username', true),
                        'before' => '<p class="left">',
                        'between' => '</p><p class="left">',
                        'after' => '</p><br class="clear"/>'
                ));

                echo $form->input('password', array(
                        'label' => __('Password', true),
                        'type' => 'password',
                        'before' => '<p class="left">',
                        'between' => '</p><p class="left">',
                        'after' => '</p><br class="clear"/>'
                ));
        }

        echo $form->hidden('User.login_type', array('value' => 'kiosk'));
            echo $form->end(array('label' => __('Login', true), 'class' => 'self-sign-kiosk-button'));


    if((isset($kiosk['Kiosk']) && isset($kiosk['Kiosk']['default_sign_in'])) && $show_buttons == true)
    {
        if($kiosk['Kiosk']['default_sign_in'] == 'id_card'){ ?>
                <p style="margin: 10px 0 10px 300px">
                                <a class="translate-button" href="/kiosk/users/id_card_login">
                                        I'd prefer to login with License or ID
                                </a>
                        </p>
    <?php
        }
    }
    ?>

