<?php echo $this->element('forms/input', array(
        'name' => 'zip_code',
        'label' => 'Zip Code',
        'value' => isset($value) ? $value : ''         
        )) ;?>