 <?php echo $this->element('forms/input', array(
        'name' => 'address',
        'label' => 'Street Address',
        'value' => isset($value) ? $value : ''      
        )) ;?>