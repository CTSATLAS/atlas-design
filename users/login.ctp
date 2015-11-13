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
        <?php printf(__("Welcome to the %s Online Services System. To begin, please log in with
                         your last name and your full social security
                         number.", true), Configure::read('Company.name')) ?>
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
		*PRIVACY ACT STATEMENT: Pursuant to 42 U.S.C. 1320b-7(a)(1) (Social Security Act)
		and 7 C.F.R. 273.6, disclosure of your social security number is mandatory. Social
		security numbers will be used by the Agency for program administration including verification
		purposes, distinguishing one individual from another, and for tracking and reporting purposes.
	</p>
</div>
