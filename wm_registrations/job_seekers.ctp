<?php echo $this->Form->create('User', array('type' => 'file', 'role' => "form"));?>

<div class="form-group">
    <!--Form data-->
    <?php ?>
</div>
<div class="form-group">
    <!--Form data-->
    <?php ?>
</div>


<p>
   <?php echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-success btn-large')) ?> 
 <?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-default btn-large')) ?>     
<?php echo $this->Form->end() ?>  
</p>
   