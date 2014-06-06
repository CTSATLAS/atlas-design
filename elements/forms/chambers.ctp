<!--Form data-->
    <?php 
    if(!isset($chamber_list))
    $chamber_list = array('Y' => 'Yes', 'N' => 'No');
    echo $this->Form->input('vetran', array(            
        'empty' => 'Please select',
        'label' => 'What chamber or business are you from',
        'type' => 'select',
        'options' => $chamber_list ));  
    
    ?>