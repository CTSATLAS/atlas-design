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
	echo $this->Form->input('middle_initial', array(
		'label' => __('Middle Initial', true),
		'maxlength' => '50',
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('surname', array(
		'label' => __('Surname', true),
		'type' => 'select',
		'empty' => 'None',
		'options' => array('Jr' => 'Jr', 'Sr' => 'Sr', 'III' => 'III'),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('gender', array(
		'label' => __('Gender', true),
		'type' => 'select',
		'empty' => 'Select Gender',
		'options' => array('male' => 'Male', 'female' => 'Female'),
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

	echo $this->Form->input('dob', array(
		'label' => __('Birth Date <span class="small gray">(mm/dd/yyyy)</span>', true),
		'type' => 'text',
		'maxlength' => 10,
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('address_1', array(
		'label' => __('Address', true),
		'before' => '<br />',
		'after' => '<strong>&nbspNo P.O. Box Addresses accepted.<strong></span><br />'
	));
	echo $this->Form->input('city', array(
		'label' => __('City', true),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('county', array(
		'label' => __('County', true),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('state', array(
		'label' => __('State', true),
		'type' => 'select',
		'empty' => 'Select State',
		'options' => $states,
		'before' => '<br />',
		'after' => '<br />'
	));
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

	echo $this->Form->input('language', array(
		'label' => __('Primary Spoken Language', true),
		'type' => 'select',
		'empty' => 'Please Select',
		'options' => array('English' => 'English', 'Spanish' => 'Spanish', 'Other' => 'Other'),
		'before' => '<br />',
		'after' => '<br />'
	));
	echo $this->Form->input('ethnicity', array(
		'label' => __('Ethnicity', true),
		'type' => 'select',
		'empty' => 'Please Select',
		'options' => array(
		'Hispanic or Latino' => 'Hispanic or Latino',
		'Not Hispanic or Latino' => 'Not Hispanic or Latino',
		'Other' => 'Other',
		'I do not wish to answer' => 'I do not wish to answer'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('race', array(
		'label' => __('Race', true),
		'type' => 'select',
		'empty' => 'Please Select',
		'options' => array(
		'American Indian or Alaksa Native' => 'American Indian or Alaksa Native',
		'Asian' => 'Asian',
		'Black or African American' => 'Black or African American',
		'Hawaiian or Other Pacific Islander' => 'Hawaiian or Other Pacific Islander',
		'White' => 'White',
		'Other' => 'Other',
		'I do not wish to answer' => 'I do not wish to answer'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('veteran', array(
		'label' => __('Are you a US veteran', true),
		'type' => 'select',
		'empty' => 'Please Select',
		'options' => array('1' => 'Yes', '0' => 'No'),
		'before' => '<br />',
		'after' => '<br />'
	));

	echo $this->Form->input('disability', array(
		'label' => __('Do you have a substantial disability that makes it diffcult for you to work', true),
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
