<p>
    <?php printf(__("Welcome to the %s Online Services System.  Login is not required to visit our website and access the information contained on the site.  However, if you desire to access programs, forms and perform tasks (as you would during a visit to one of our Career Centers) you may do so by logging in.", true), Configure::read('Company.name')) ?>
</p>

<?php
    $login_method = Configure::read('Login.method');
    $settings = Cache::read('settings');
?>

<?php if(isset($settings['Users']['LoginAdditionalText'])) : ?>
    <?php $text = json_decode($settings['Users']['LoginAdditionalText'], true); ?>
<?php endif ?>

<?php if (isset($text[0]['value'])): ?>
    <p><?= $text[0]['value'] ?></p>
<?php endif ?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h3 class="mb-3">Login</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <?= $this->Form->create('User', array(
                'class' => 'form-horizontal',
                'url' => $this->here
        )) ?>
            <?= $this->Form->hidden('User.login_type', array('value' => $type)) ?>

            <?php if(isset($this->params['pass'][0]) && $this->params['pass'][0] == 'program' && isset($this->params['pass'][1])): ?>
                <?= $this->Form->hidden('User.program_id', array('value' => $this->params['pass'][1])) ?>
            <?php endif ?>

            <?php if ($login_method === 'ssn' && $ssn_length !== 9): ?>
                <div class="form-group">
                    <?= $this->Form->input('lastname', array(
                        'class' => 'form-control',
                        'label' => __('Lastname', true)
                    )) ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->input('ssn', array(
                        'class' => 'form-control',
                        'label' => __("Last $ssn_length SSN Digits", true),
                        'type' => 'password',
                        'maxlength' => $ssn_length
                    )) ?>
                </div>
            <?php elseif ($login_method === 'ssn'): ?>
                <div class="form-group">
                    <?= $this->Form->input('lastname', array(
                        'class' => 'form-control',
                        'label' => __('Lastname', true)
                    )) ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->input('ssn', array(
                        'class' => 'form-control',
                        'label' => __('9 Digit Social Security Number', true),
                        'maxlength' => $ssn_length,
                        'type' => 'password'
                    )) ?>
                </div>
            <?php else: ?>
                <div class="form-group">
                    <?= $this->Form->input('username', array(
                        'class' => 'form-control',
                        'label' =>__('Username', true),
                        'after' => '<br />'
                    )) ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->input('password', array(
                        'class' => 'form-control',
                        'label' => __('Password', true),
                        'before' => '<br />'
                    )) ?>
                </div>

                <?= $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forgot_password')) ?>
            <?php endif ?>

        <?= $this->Form->end(array('label' => 'Login', 'class' => 'login-submit btn btn-success mt-3')) ?>
    </div>
</div>
