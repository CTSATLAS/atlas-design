
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

<?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>
<pre><?php var_dump($this->data) ?></pre> 
<div class="form-group">
    <!--Form data-->
    <?php 
    // echo $this->element('forms/input', array(
    //     'name' => 'date',
    //     'label' => 'Date'        
    //     )); 
        ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/jobs/federal_id') ;?>
</div>
<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/contacts/company_name') ;?>
</div>
<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/address') ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/address_2') ;?>
</div>


<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/city') ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/state') ;?>
</div>


<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/address/zip'); ?>
</div>

<?php echo $this->element('forms/contact_elements') ?>

<div class="form-group">
    <!--Form data-->
    <?php $this->element('forms/contact/contact_email'); ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/website') ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/jobs/work_address') ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/jobs/job_title') ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/input', array(
        'name' => 'openings',
        'label' => 'Number of Openings'        
        )) ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/input', array(
        'name' => 'number_interviewees',
        'label' => 'Number of interviewes'        
        )) ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/input', array(
        'name' => 'experienced_length',
        'label' => 'Experience Length'        
        )) ;?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->element('forms/input', array(
        'name' => 'experienced_length',
        'label' => 'Experience Length Desired'        
        )) ;?>
</div>

<div class="form-group">
   <?php  
   // @TODO enable file upload
    // echo $this->element('forms/file_upload', array(
    //     'name' => 'job_desc',
    //     'label' => 'Upload Job Description'
    // )); 
    ?>
</div>

<div class="form-group">
    <!--Form data-->
    <?php ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/skills');
    
    ?>    
</div>
<div class="form-group">
<?php echo $this->element('forms/jobs/minimum_education'); ?>
    
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
    'name' => 'minimum_age',
    'label' => 'Minimum Age'
    )) ?>
</div>
<div class="form-group">
    <?php echo $this->element('forms/jobs/refferal_information') ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/hiring_process') ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/work_schelude') ?>
</div>
<div class="form-group">
<?php echo $this->element('forms/input_select_yes_no', 
array('name' => 'endosement_required', 
'label' => 'Endorsement Required')); ?>
  
</div>

<div class="form-group">
<?php echo $this->element('forms/input_select_yes_no', 
array('name' => 'computer_programs_required', 
'label' => 'Computer Programs Required')); ?>  
</div>


<div class="form-group">
<?php echo $this->element('forms/input_select_yes_no', 
array('name' => 'first_posting', 
'label' => 'First Time Posting Here')); ?>  
</div>


<div class="form-group">
<?php echo $this->element('forms/input_select_yes_no', 
array('name' => 'equal_opp_employer', 
'label' => 'Equal Opportunity Employer')); ?>  
</div>




<div class="alert alert-warning small">
   <?php echo $submit_messg ?>
</div>

<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>   
</p>

   