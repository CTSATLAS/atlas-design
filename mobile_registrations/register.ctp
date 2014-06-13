<div class="idealsteps-container">
        <?php if(!empty($license_data)): ?>
<!-- <pre><?php var_dump($license_data) ?></pre>  -->
<?php endif ?>

    <div class="idealsteps-nav"></div>
    <?php echo $this->Form->create(array('type' => 'file', 'role' => "form"));?>

        <div class="idealsteps-wrap">
            <section class="idealsteps-step">
            <h1>Personal info</h1>
                <?php echo $this->element('forms/contacts/contact_info_mobile') ?>
               <?php echo $this->element('forms/address/address_info_mobile') ?>    

                <div class="form-group">
    <?php echo $this->element('forms/contacts/contact_email'); ?>
</div>

<div class="form-group">
    <?php echo $this->element('forms/contacts/phone'); ?>
</div>

            </section>
            <section class="idealsteps-step">
            <h1>Address</h1>
             <?php echo $this->element('forms/address/address_info_mobile') ?>   

            </section>
            <section class="idealsteps-step">
            <h1>Other</h1>
 

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

            </section>
        </div>

    <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>   
</div>