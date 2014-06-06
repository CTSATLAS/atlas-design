<?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>
<pre><?php var_dump($this->data) ?></pre> 
<div class="form-group">
    <!--Form data-->
    <?php 
    echo $this->element('forms/input_select', array(
      'name' => 'chamber',
        'label' => "What chamber are you from"
    ));
    ?>
</div>
<h3>JOB ORDER FORM</h3>
<div class="alert alert-info" >
    Please complete the job order in as much detail as possible to assure we can match the best possible candidates. Fields noted with an asterisk are required.
</div>


<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'federal_id', 
        'label' => 'Federal ID')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'employer', 
        'label' => 'Employer / Company name')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'business_type', 
        'label' => 'Type of Business')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'business_type', 
        'label' => 'Type of Business')); 
    ?>
</div>
<div class="form-group">
    <!--Form data-->
    <?php 
    echo $this->element('forms/input_select', array(
      'name' => 'fed_contractor',
        'label' => "Federal Contractor"
    ));
    ?>
</div>

<div class="form-group">
<?php echo $this->element('forms/address/address') ?>
    
</div>

<div class="form-group">
<?php echo $this->element('forms/address/city'); ?>
    
</div>

<div class="form-group">
    <?php echo $this->element('forms/state_select') ?>
</div>

<div class="form-group">
<?php echo $this->element('forms/contacts/zip'); ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'job_site', 
        'label' => 'Your Job Site Location (if diffrent from above)',
        'place_holder' => 'Your Jobsite Location')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/contacts/phone'); ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/contact/fax'); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/email');     
    ?>
</div>


<div class="form-group">
    <?php echo $this->element('forms/contact/contact_person'); ?>   
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'leasing_company', 
        'label' => 'Employee Leasing Company')); 
    ?>
</div>
<h3>Position:</h3>
<div class="alert alert-danger">
     Note - commission only jobs are not accepted.
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/job_title') ?>
</div>


<div class="form-group">
    <!--Form data-->
    <?php 
    echo $this->element('forms/input_select', array(
      'name' => 'education_level',
      'label' => "Education Level"
    ));
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'job_experience', 
        'label' => 'Amout of Experience')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/skills'); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input_textarea', array(
        'name' => 'certification_documents', 
        'label' => 'Licences, Certifications, Colleg Degrees, Permits')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input_select', array(
        'name' => 'postion_status', 
        'label' => 'Position: Temporary / Permanent')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/input', array(
        'name' => 'postion_length', 
        'label' => 'How Long The Position Will Last')); 
    ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/job_description'); ?>
</div>

<div class="form-group">

 <?php echo $this->element('forms/jobs/pay_rate') ?>
    
</div>

<div class="form-group">
<?php echo $this->element('forms/jobs/pay_rate_annual') ?>
   
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/benefits') ;
     ?>
</div>


<div class="form-group">
<?php echo $this->element('forms/input_select_yes_no', 
array('name' => 'work_benfits', 
'label' => 'Do Your Offer Benefits')); ?>  
</div>


<div class="form-group">
    <?php echo $this->element('forms/jobs/background_checks') ;
     ?>
</div>

<div class="from-group">
    <?php echo $this->element('forms/input_textarea', array('label' => 'Special Instructions or Requests', 'name' => "special_instructions")); ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/jobs/refferal_information'); ?>
</div>

<div class="form-group">
    
</div>

<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>  
</p>
   