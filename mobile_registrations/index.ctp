<h1>Scan ID Card</h1>

<?php echo $this->Form->create(null, array(
    'url' => array('action' => 'register')
)); ?>
<div class="form-group">
<?php echo $this->Form->input('id_card', array('autofocus' => '', 'type' => 'text', 'class' => '.no-border')); ?>	
</div>



<?php echo $this->Form->end(); ?>