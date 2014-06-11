<div class="form-group">
	<?php echo $this->element('forms/address/address', 
                array('value' => isset($license_data['street']) ? $license_data['street'] : '' )); ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/address/address_2') ?>
</div>
<div class="form-group">
	<?php echo $this->element('forms/address/city',
	array('value' => isset($license_data['city']) ? $license_data['city'] : '' )); ?>
</div>

<div class="form-group">
	<?php echo $this->element('forms/address/state'); ?>
</div>


<div class="form-group">	
	<?php echo $this->element('forms/address/zip'); ?>
</div>