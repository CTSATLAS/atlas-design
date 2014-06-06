<?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/contacts/first_name'); ?>    
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/contacts/last_name'); ?>         
</div>

<div class="form-group">
    <!--Form data-->
 <?php echo $this->element('forms/contacts/date_of_birth'); ?>      
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/address') ?>      
</div>

<div class="form-group">
    <!--Form data-->
<?php echo $this->element('forms/address/city') ?>
   
</div>

<div class="form-group">
    <!--Form data-->
   <?php echo $this->element('forms/address/state'); ?>  
</div>

<div class="form-group">
    <!--Form data-->
<?php //echo $this->element('forms/address/address') ?>   
</div>

<div class="form-group">
    <!--Form data-->
    <?php $this->element('forms/contacts/phone') ?>  
</div>

<div class="form-group">
    <!--Form data-->
    <?php 
    $vet_options = array('Y' => 'Yes', 'N' => 'No');
    echo $this->Form->input('veteran', array(            
        'empty' => '',
        'label' => 'Are you a Veteran',
        'type' => 'select',
        'options' => $vet_options ));    ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php 
    //$vet_options = array('Y' => 'Yes', 'N' => 'No');
    echo $this->Form->input('unemployed', array(
        'empty' => '',
        'label' => 'Are you a Unemployed',
        'type' => 'select',
        'options' => $vet_options ));    
    ?>
</div>


<div class="form-group">
    <!--Form data-->
    <?php 
    //$vet_options = array('Y' => 'Yes', 'N' => 'No');
    echo $this->Form->input('disabilities', array(
        'empty' => '',
        'label' => 'Do you have ok disabilities',
        'type' => 'select',
        'options' => $vet_options )); ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/job_title'); ?>    
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/skills'); ?>    
</div>

<div class="form-group">
    <!--Form data-->

<?php //echo $this->Form->input('resume', array('type' => 'file', 'label' => 'Resume Upload'));?> 

</div>

<?php //echo $this->element('forms/jobs/career_events'); ?>

<div class="alert small">
    <?php echo $submit_messg ; ?>
</div>

<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')); ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')); ?>     
<?php echo $this->Form->end(); ?>  
</p>
   