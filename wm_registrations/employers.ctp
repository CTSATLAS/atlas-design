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

<?php echo $this->Form->create(array('type' => 'file', 'role' => "form")); ?>
<div class="form-group">
    <!--Form data-->

    <?php echo $this->Form->input('company_name', array('label' => 'Company Name<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your company name')); ?>    
</div>

<div class="form-group">
    <!--Form data-->
    <?php echo $this->Form->input('company_logo', array('type' => 'file', 'label' => 'Company Logo')); ?>
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
    <?php echo $this->Form->input('phone', array('label' => 'Phone<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Contact phone number')); ?> 
</div>

<div class="form-group">
    <?php echo $this->Form->input('fax', array('label' => 'Fax Number ', 'class' => 'form-control', 'placeholder' => 'Fax Number')); ?> 
</div>

<div class="form-group">
    <?php echo $this->Form->input('fein_number', array('label' => 'FEIN# ', 'class' => 'form-control', 'placeholder' => 'FEIN#')); ?> 
</div>

<div class="form-group">
    <?php echo $this->Form->input('naics', array('label' => 'NAICS ', 'class' => 'form-control', 'placeholder' => 'NAICS')); ?> 
</div>

<div class="form-group">
    <?php echo $this->Form->input('website', array('label' => 'Website URL', 'class' => 'form-control', 'placeholder' => 'Website URL')); ?> 
</div>

<div class="form-group">
    <?php echo $this->Form->input('email', array('label' => 'Em@il <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your email address')); ?> 
</div>

<div class="form-group">
    <!--Form data-->
    <?php
    echo $this->Form->input('company_type', array(
        'type' => 'select',
        'empty' => 'Please Select',
        'label' => 'Company Type',
        'options' => array(
            'employer' => 'Label 1',
            'school-community' => 'School / Community Service'
            )
    ));
    ?> 
</div>

<div class="alert small">
    Please review your info and hit the submit button to send the form. Thank You
</div>

<p>
    <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
    <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>  
</p>
