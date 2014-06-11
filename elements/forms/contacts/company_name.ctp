  <?php echo $this->element('forms/input', array(
        'name' => 'company_name',
        'label' => 'Company name',
        'value' => isset($value) ? $value : ''                 
        )) ;?>