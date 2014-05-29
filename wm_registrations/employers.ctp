<?php echo $this->Form->create('User', array('type' => 'file', 'role' => "form"));?>
<div class="form-group">
    <!--Form data-->
 
    <?php echo $this->Form->input('company_name', array('label' => 'Company Name<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your company name')); ?>    
</div>

<div class="form-group">
    <!--Form data-->
   <?php echo $this->Form->input('company_logo', array('type' => 'file','label' => 'Company Logo')); ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->Form->input('primary_contact', array('label' => 'Primary Contact <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Primary Contact Name')); ?> 
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->Form->input('secondary_contact', array('label' => 'Secondary Contact <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Secondary Contact Name')); ?> 
</div>

<div class="form-group">
<?php echo $this->Form->input('address', array('label' => 'Mailing Address<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your mailing address')); ?> 
</div>

<div class="form-group">
<?php echo $this->Form->input('city', array('label' => 'City <span>*</span>', 'class' => 'form-control', 'placeholder' => 'City')); ?> 
</div>

<div class="form-group">
<?php echo $this->Form->input('state', array('label' => 'State <span>*</span>', 'class' => 'form-control', 'placeholder' => 'State')); ?> 
</div>

<div class="form-group">
<?php echo $this->Form->input('zip', array('label' => 'Zip<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your zip code')); ?> 
</div>
<div class="form-group">
    <!--Form data-->
    <?php ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php ?>
</div> 
<div class="alert small">
    Please review your info and hit the submit button to send the form. Thank You
</div>

<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>  
</p>
   