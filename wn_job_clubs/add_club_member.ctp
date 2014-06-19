<!-- Add club members here --><?php if (isset($send) && $send == true) : ?>
    <div class="alert alert-sucess">
        Thank you <?php echo $messageData['Full Name']; ?> for your feedback. 
    </div>
<?php elseif (isset($send) && !$send) : ?>
    <div class="alert alert-error">
        Sorry please see error below. 
        <?php echo $messageData['Full Name']; ?>       
    </div> 
<?php endif ?>

<?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>
		<?php if(!empty($this->data)): ?>
<pre><?php var_dump($this->data) ?></pre> 
<?php endif ?>
<?php echo $this->element('forms/contacts/contact_info'); ?>
<?php echo $this->element('forms/address/address_info'); ?>

<div class="form-group">
	<?php echo $this->element('forms/input', array('name' => "occupation", "label" => "Occupation")) ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/input_textarea', array('name' => 'employment_interest', 'label' => 'Employment Interest')) ?>
</div>


<div class="alert alert-warning small">
   <?php echo $submit_messg ?>
</div>

<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>   
</p>