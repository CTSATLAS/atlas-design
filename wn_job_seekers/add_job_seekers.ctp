<?php if (isset($send) && $send == true) : ?>
    <div class="alert alert-sucess">
        Thank you <?php echo $messageData['Full Name']; ?> for your feedback. 
    </div>
<?php elseif (isset($send) && !$send) : ?>
    <div class="alert alert-error">
        Sorry please see error below. 
        <?php echo $messageData['Full Name']; ?>       
    </div> 
<?php endif ?>

<!-- 
		<?php if(!empty($this->data)): ?>
	<pre><?php var_dump($this->data) ?></pre> 
	<?php endif ?>	 -->
<?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>

<div class="form-group">
	<?php echo $this->element('forms/contacts/contact_info') ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/address/address_info'); ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/jobs/veteran') ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/input_select_yes_no', array('name' => 'unemployed', 'label' => "Are You Unemployed")) ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/input_select_yes_no', array('name' => 'benefits', 'label' => "Are You receiving unemployment benefits")) ?>
</div>



<div class="form-group">
	<?php echo $this->element('forms/input_select_yes_no', array('name' => 'disabilities', 'label' => "Do you have and disabilities")) ?>
</div>


<div class="form-group">
	<?php echo $this->element('forms/jobs/job_title') ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/jobs/skills') ?>
</div>

<div class="form-group">
	<?php //echo $this->element('forms/file_upload', array('name' => 'resume', 'label' => 'Upload your resume')) ?>
</div>

<?php echo $submit_messg ?>
<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>   
</p>