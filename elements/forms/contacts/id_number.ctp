<!--Form data-->
    <?php 
    echo $this->element('forms/input', array(
        'name' => 'id_number',
        'label' => 'ID Number',
        'value' => isset($value) ? $value : ''         
        )) ;
    ?>