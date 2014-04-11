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
    <?php __('We currently do not have a record for you.') ?>
	<br />	 
    <?php __('Please register your information using the following form.') ?>
	<br />	
    <?php __('If you have already created a login, please') ?>

	<?php echo $this->Html->link('click here', '/users/login/' . $type . '/' . $program_id); ?>
    
    <?php __('to return to the login page and try your login information again.') ?>
</p>
<br />
<div class="required"><label></label> <?php __('indicates required fields.') ?></div>
<br />
  <div id="ChildRegistrationForm">
	<?php echo $this->Form->create('User', array('url' => '/users/registration/child')); ?>
	<fieldset>
		<legend>Register</legend>
	    <?php
	    echo $this->Form->hidden('role_id', array('value' => '1'));
	    echo $this->Form->input('firstname', array(
			'label' => __('Child\'s First Name', true),
			'between' => '<br />',
			'after' => '<br />'));
	    echo $this->Form->input('lastname', array(
			'label' => __('Child\'s Last Name', true),
			'between' => '<br />',
			'after' => '<br />'));
	    echo $this->Form->input('middle_initial', array(
			'label' => __('Child\'s Middle Initial', true),
			'between' => '<br />',
			'after' => '<br />'));
		echo $this->Form->input('surname', array(
			'label' => __('Child\'s Surname', true),
			'type' => 'select',
			'empty' => 'None',
			'options' => array('Jr' => 'Jr', 'Sr' => 'Sr', 'III' => 'III'),
			'between' => '<br />',
			'after' => '<br />'));
		echo $this->Form->input('gender', array(
			'label' => __('Child\'s Gender', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => array('Male' => 'Male', 'Female' => 'Female'),
			'between' => '<br />',
			'after' => '<br />'));
		if(Configure::read('Registration.ssn') == 'full') {
		    echo $this->Form->input('ssn', array(
				'label' => __('Child\'s Social Security Number', true),
				'maxlength' => 9,
				'type' => 'password',
				'between' => '<br />'));
		    echo $this->Form->input('ssn_confirm', array(
				'label' => __('Please confirm child\'s Social Security Number', true),
				'maxlength' => 9,
				'type' => 'password',
				'between' => '<br />',
				'after' => '<br />'));
		}
		elseif(Configure::read('Registration.ssn') == 'last4') {
			echo '<div class="input required">';
				echo $this->Form->label(__('Child\'s Social Security Number', true));
				echo '<br />';	
				echo $this->Form->input('ssn_1', array(
					'type' => 'password',
					'div' => false,
					'maxlength' => 3, 
					'label' => false));
				echo $this->Form->input('ssn_2', array(
					'type' => 'password',
					'maxlength' => 2,
					'label' => false,
					'div' => false));
				echo $this->Form->input('ssn_3', array(
					'type' => 'password',
					'maxLength' => 4,
					'label' => false,
					'div' => false));
				echo "<br class='clear' />";	
				echo $this->Form->error('ssn');
			echo '</div>';
			echo '<div class="input required">';
				echo $this->Form->label(__('Please confirm child\'s Social Security Number', true));
				echo '<br />';			
				echo $this->Form->input('ssn_1_confirm', array(
					'type' => 'text',
					'maxlength' => 3,
					'label' => false,
					'div' => false));
				echo $this->Form->input('ssn_2_confirm', array(
					'type' => 'text',
					'maxlength' => 2,
					'label' => false,
					'div' => false));
				echo $this->Form->input('ssn_3_confirm', array(
					'type' => 'text',
					'maxlength' => 4,
					'label' => false,
					'div' => false,
					'after' => '<br />'));
				echo $this->Form->error('ssn_confirm');
			echo '</div>';					
		}	
	    echo $this->Form->input('dob', array(
			'label' => __('Child\'s Birth Date <span class="small gray">(mm/dd/yyyy)</span>', true),
			'type' => 'text',
			'maxlength' => 10,
			'between' => '<br />',
			'after' => '<br />'));
		
		echo $this->Form->input('address_1', array(
			'label' => __('Child\'s Address', true),
			'between' => '<br />',
			'after' => '<span><strong>&nbspNo P.O. Box Addresses accepted.<strong></span><br />'));
		echo $this->Form->input('city', array(
			'label' => __('Child\'s City', true),
			'between' => '<br />',
			'after' => '<br />'));
	
		echo $this->Form->input('county', array(
			'label' => __('Child\'s County', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => Configure::read('Company.counties'), 
			'between' => '<br />',
			'after' => '<br />'));;
			
		echo $this->Form->input('state', array(
			'type' => 'text',
			'readonly' => 'readonly',
			'label' => __('Child\'s State', true),
			'value' => Configure::read('Company.state'),
			'between' => '<br />',
			'after' => '<br />'));			
			
	    echo $this->Form->input('zip', array(
			'label' => __('Child\'s Zip Code', true),
			'between' => '<br />',
			'after' => '<br />'));

	    echo $this->Form->input('phone', array(
			'label' => __('Parent\'s Phone', true),
			'between' => '<br />',
			'after' => '<br />'));
	
		echo $this->Form->input('email', array(
			'label' => __('Parent\'s Email', true),
			'between' => '<br />',
			'after' => '<br />'));
		echo $this->Form->input('email_confirm', array(
			'label' => __('Confirm Parent\'s Email', true),
			'between' => '<br />',
			'after' => '<br /><p class="small">' . $html->link('Click here to get a free email address if you do not have one.', 
			'https://www.google.com/accounts/NewAccount?service=mail&continue=
			http://mail.google.com/mail/e-11-149ff52bbc80936376c01275ce56c7-f2297e1257c13b74d3ba16b09f1177fc98da2414&type=2',
			array('target' => '_blank')) . '</p>'));	
		echo $this->Form->input('language', array(
			'label' => __('Child\'s Primary Spoken Language', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => array('English' => 'English', 'Spanish' => 'Spanish', 'Other' => 'Other'), 
			'between' => '<br />',
			'after' => '<br />'));
		echo $this->Form->input('ethnicity', array(
			'label' => __('Child\'s Ethnicity', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => array(
				'Hispanic or Latino' => 'Hispanic or Latino',
				'Not Hispanic or Latino' => 'Not Hispanic or Latino'), 
				'between' => '<br />',
				'after' => '<br />'));

		echo $this->Form->input('race', array(
			'label' => __('Child\'s Race', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => array(
				'American Indian or Alaksa Native' => 'American Indian or Alaksa Native',
				'Asian' => 'Asian',
				'Black or African American' => 'Black or African American',
				'Hawaiian or Other Pacific Islander' => 'Hawaiian or Other Pacific Islander',
				'White' => 'White'),
				'between' => '<br />',
				'after' => '<br />'));
		echo $this->Form->input('disability', array(
			'label' => __('Do you have a substantial disability', true),
			'type' => 'select',
			'empty' => 'Please Select',
			'options' => array('1' => 'Yes', '0' => 'No'), 
			'between' => '<br />',
			'after' => '<br />'));				
	    echo $this->Form->hidden('registration', array('value' => 'child_website'));
	    ?>    
	<br />
	<?php echo $this->Form->end(array('label' => __('Submit', true))); ?>
	</fieldset>
</div>
