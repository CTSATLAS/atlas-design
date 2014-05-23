<!--contactus index-->
<?php if($send == true) : ?>
<p class="text-info"> Thank you. </p>
<?php elseif(!$send) : ?>
 <p class="text-error"> Your email failed. </p>   
<?php endif ?>
    

<?php echo $this->Form->create(array('role' => 'from')) ?>
<div class="form-group">
   
    <?php echo $this->Form->input('full_name', array('label' => 'Full name', 'class' => 'form-control', 'placeholder' => 'Your full name')); ?> 
</div>
<div class="form-group">
    
    <?php echo $this->Form->input('email', array('label' => 'Email @ddress', 'class' => 'form-control', 'placeholder' => 'Your email addres')); ?> 
</div>

<div class="form-group">
    
    <?php echo $this->Form->input('telephone', array('label' => 'Your telephone', 'class' => 'form-control', 'placeholder' => 'Your phone / mobile number')); ?> 
</div>

<div class="form-group">
    
    <?php echo $this->Form->input('subject', array('label' => 'Subject', 'class' => 'form-control', 'placeholder' => 'Subject')); ?> 
</div>

<div class="form-group">
    
    <?php echo $this->Form->textarea('message', array('rows' => '10' ,'label' => 'Messasge', 'class' => 'form-control', 'placeholder' => 'Message')); ?> 
</div>

<p>
    <?php echo $this->Form->button('Send Message', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?>   
    <?php echo $this->Form->button('Clear', array('type' => 'reset','class' => 'btn btn-default btn-large')) ?>   
</p>
<?php echo $this->Form->end(); ?>