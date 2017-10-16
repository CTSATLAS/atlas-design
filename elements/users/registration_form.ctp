<?php 
	echo $this->Form->create('User', array('url' => '/users/registration/' . $type . '/' . $program_id));
?>
<fieldset>
<legend>Register</legend>
<?php
	echo $this->Form->hidden('role_id', array('value' => '1'));
	echo $this->Form->input('firstname', array(
		'label' => __('First Name', true),
		'after' => '<br />'
	));
	echo $this->Form->input('lastname', array(
		'label' => __('Last Name', true),
		'before' => '<br />',
		'after' => '<br />'
	));

	if($login_method == 'ssn')
	{
		if($ssn_length == 9)
		{
			echo $this->Form->input('ssn', array(
				'label' => 'Your Social Security Number',
				'type' => 'password',
				'maxlength' => $ssn_length,
				'before' => '<br />',
				'after' => '<br />'
			));
			echo $this->Form->input('ssn_confirm', array(
				'label' => 'Confirm your Social Security Number',
				'type' => 'password',
				'maxlength' => $ssn_length,
				'before' => '<br />',
				'after' => '<br />'
			));
		}
		else
		{
			echo $this->Form->input('ssn', array(
				'label' => 'The last ' . $ssn_length . ' digits of your Social Security Number',
				'type' => 'password',
				'maxlength' => $ssn_length,
				'before' => '<br />',
				'after' => '<br />'
			));
			echo $this->Form->input('ssn_confirm', array(
				'label' => 'Confirm the last ' . $ssn_length . ' digits of your Social Security Number',
				'type' => 'password',
				'maxlength' => $ssn_length,
				'before' => '<br />',
				'after' => '<br />'
			));
		}
	}
	else
	{
		echo $this->Form->input('username', array(
				'label' => 'Username',
				'before' => '<br />',
				'after' => '<br />'
		));
		echo $this->Form->input('password', array(
				'label' => 'Password',
				'type' => 'password',
				'before' => '<br />',
				'after' => '<br />'
		));
		echo $this->Form->input('password_confirm', array(
			'label' => 'Confirm your password',
			'type' => 'password',
			'before' => '<br />',
			'after' => '<br />'
		));
	}

	echo $this->Form->input('zip', array(
		'label' => __('Zip Code', true),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('phone', array(
		'label' => __('Phone', true),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('email', array(
		'label' => __('Email Address', true),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('veteran', array(
		'label' => __('Are you a veteran of the U.S. Armed Forces?', true),
		'type' => 'select',
    'options' => array('0' => 'No', '1' => 'Yes', '2' => 'I do not wish to answer'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('disability', array(
		'label' => __('Do you have a substantial disability?', true),
		'type' => 'select',
    'options' => array('0' => 'No', '1' => 'Yes', '2' => 'I do not wish to answer'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('migrant_seasonal_worker', array(
		'label' => __('Are you a Migrant Seasonal Farm Worker?', true),
		'type' => 'select',
		'empty' => 'Please Select',
		'options' => array('1' => 'Yes', '0' => 'No'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->hidden('registration', array('value' => 'website'));
?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'self-sign-kiosk-button btn btn-inverse')); ?>
