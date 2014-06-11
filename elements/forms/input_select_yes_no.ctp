<!--Form data-->
    <?php 
    
    if(!isset($options))
    $options = array('Y' => 'Yes', 'N' => 'No');
    if(!isset($name))
        $name = 'selections';
    if(!isset($label))
        $label = 'Please Select one';
    if(!isset($place_holder))
        $place_holder = 'Please select';
    if(!isset($type))
        $type = 'select';
    echo $this->Form->input($name, array(            
        'empty' => $place_holder,
        'label' => $label,
        'type' => $type,
        'options' => $options ));  
    
    ?>