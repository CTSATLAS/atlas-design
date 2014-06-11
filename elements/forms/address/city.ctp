<!--Form data-->
    <?php echo $this->element('forms/input', array(
        'name' => 'city',
        'label' => 'City',
        'value' => isset($value) ? $value : ''         
        )) ;?>
