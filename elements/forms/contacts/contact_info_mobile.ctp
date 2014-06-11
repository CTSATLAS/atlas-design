
<div class="form-group">

    <!--Form data-->
    <?php
    // $first_name = (isset($license_data) ? $license_data['name'] : ''))
     echo $this->element('forms/contacts/first_name',
    array('value' => isset($license_data['first_name']) ? $license_data['first_name'] : '' ) ) ?>
</div>


<div class="form-group">
	<?php echo $this->element('forms/contacts/last_name',
	array('value' => isset($license_data['last_name']) ? $license_data['last_name'] : '' ) ) ?>
</div>


<div class="form-group">
	<?php
        $birth_day = isset($license_data['birth_day']) ? $license_data['birth_day'] : 'dd';
        $birth_month = isset($license_data['birth_month']) ? $license_data['birth_month'] : 'mm' ;
        $birth_year = isset($license_data['birth_year']) ? $license_data['birth_year'] : 'yyyy' ;
     
        echo $this->element('forms/contacts/date_of_birth',
        array('value' => "{$birth_month} - {$birth_day} - {$birth_year}" )); ?>
</div>

<div class="form-group" >
    <?php 
    echo $this->element('forms/contacts/id_number', array(
        'value' => isset($license_data['id_number']) ? $license_data['id_number'] : 'yyyy'
    ))
    ?>
</div>
