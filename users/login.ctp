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

	<?= $this->Form->create('User',
		array(
			'url' => $this->here,
			'inputDefaults' => array(
				'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
				'div' => array('class' => 'control-group input'),
				'label' => array('class' => 'control-label'),
				'between' => '<div class="controls">',
				'after' => '</div>',
				'error' => array(
					'attributes' => array(
						'wrap' => 'span',
						'class' => 'help-block'
					)
				)
			)
		))
	?>

	<fieldset>
		<legend>Login</legend>
		<?php
			echo $form->input('username', array(
				'label' =>__('Lastname', true)));

			if($ssn_length != 9) {
				echo $form->input('password', array(
					'label' => __('The last ' . $ssn_length . ' digits of your SSN', true),
					'maxlength' => $ssn_length
				));
			} else {
				echo $form->input('password', array(
					'label' => __('Social Security Number', true),
					'maxlength' => $ssn_length
				));
			}

			if(isset($this->params['pass'][0]) && $this->params['pass'][0] === 'program') {
				echo $form->hidden('User.program_id', array('value' => $this->params['pass'][1]));
			}

	    echo $this->Form->end(array(
			'between' => false,
			'after' => false,
	    	'label' => __('Login', true),
	    	'class' => 'btn btn-primary self-sign-kiosk-button',
	    	'data-loading-text' => 'Logging in...'
	    ));
?>
	  </fieldset>
</div>
