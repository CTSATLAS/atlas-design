<?php
/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>

<?php echo $this->Html->script('theme/users/child_registration', array('inline' => false)) ?>
<?php echo $this->Html->script('jquery.autotab-1.1b', array('inline' => false)) ?>
<?php echo $this->Html->scriptStart(array('inline' => false)) ?>
$(document).ready(function() {
	$('#UserSsn1, #UserSsn2, #UserSsn3').autotab_magic().autotab_filter('numeric');
	$('#UserSsn1Confirm, #UserSsn2Confirm, #UserSsn3Confirm').autotab_magic().autotab_filter('numeric');
});
<?php echo $this->Html->scriptEnd() ?>


<p>
    <?php __('We currently do not have a record for your child.') ?>
	<br />	 
    <?php __('Please register your child\'s information using the following form.') ?>
	<br />	
    <?php __('If you have already created a login, please') ?>
	<?php $options = array('controller' => 'users', 'action' => 'login')?>
	<?php if(isset($this->params['pass'][2]) && $this->params['pass']['2'] === 'program') :?>
		<?php array_push($options, $this->params['pass'][2], $this->params['pass'][3]); ?>
	<?php endif ?>
    <?php echo $html->link(__('click here', true), $options); ?>
    <?php __('to return to the login page and try your login information again.') ?>
</p>
<br />
<div class="required"><label></label> <?php __('indicates required fields.') ?></div>
<br />
  <div id="ChildRegistrationForm">
	<?php echo $this->Form->create('User', array('url' => '/users/registration/child')); ?>
	<fieldset>
		<legend>Register</legend>
	    <?= $this->element('users/child_registration_form', array('login_method' => Configure::read('Login.method'))) ?>
	</fieldset>
</div>
