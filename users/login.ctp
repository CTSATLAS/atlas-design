<?php

/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2010
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>
<?php echo $this->Html->script('theme/users/login', array('inline' => 'false')) ?>
<div id="UserLoginForm">
	<p>
        <?php printf(__("Welcome to the %s Online Services System. To begin, please log in with your last name and your full social security number. 
ATLAS will never distribute your Social Security Number to any 3rd party companies. Your Social Security Number will never be exposed to other users on the system. Administrators will never ask you for your Social Security Number. Do not disclose your account information to anyone else.", true), Configure::read('Company.name')) ?>
	</p>
	<?php $settings = Cache::read('settings'); ?>
	<?php if(isset($settings['Users']['LoginAdditionalText'])) : ?>
		<?php $text = json_decode($settings['Users']['LoginAdditionalText'], true); ?>
	<?php endif ?>
	<?php if(isset($text[0]['value'])) : ?>
		<p><?= $text[0]['value'] ?></p>
	<?php endif ?>
	<?php if(isset($instructions)) : ?>
		<p><?php echo __($instructions) ?></p>
	<?php endif ?>

	<?= $this->element('users/login_form', array('login_method' => Configure::read('Login.method'))) ?>

	<p>
        *PRIVACY ACT STATEMENT: Pursuant to Federal Law (42 USC 405 (c)(2)(C)(v) and ) disclosure of your social security number is mandatory. Social Security numbers will be used by CareerSource Capital Region for the purpose of determining eligibility for receipt of initial or on-going services. In addition, it will be used to measure program performance relative to individual customer involvement. (Privacy Act of 1974) Chapter 119, F.S. includes Section 119.071(5)2.
	</p>
</div>
