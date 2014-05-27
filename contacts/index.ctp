<!--contactus index-->
<?php if (isset($send) && $send == true) : ?>
    <div class="alert alert-error">
      Thank you. 
    </div>
<?php elseif (isset($send) && !$send) : ?>
    <div class="alert alert-error">
       Sorry Your email failed please see error below. 
    </div> 
<?php endif ?>


<?php echo $this->Form->create(array('role' => 'from')) ?>
<div class="form-group">

    <?php echo $this->Form->input('full_name', array('label' => 'Full name <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your full name')); ?> 
</div>
<div class="form-group">

    <?php echo $this->Form->input('email', array('label' => 'Email @ddress <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your email addres')); ?> 
</div>

<div class="form-group">

    <?php echo $this->Form->input('telephone', array('label' => 'Your telephone <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your phone / mobile number')); ?> 
</div>

<div class="form-group">

    <?php echo $this->Form->input('subject', array('label' => 'Subject <span>*</span>', 'class' => 'form-control', 'placeholder' => 'Subject')); ?> 
</div>

<div class="form-group">

    <?php echo $this->Form->textarea('message', array('rows' => '10', 'label' => 'Messasge', 'class' => 'form-control')); ?> 
</div>

<p>
    <?php echo $this->Form->button('Send Message', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?>   
    <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>   
</p>
<?php echo $this->Form->end(); ?>