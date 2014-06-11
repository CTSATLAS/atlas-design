
    <?php
    if(!isset($name)) $name = "Your name";
    if(!isset($label)) $label = "Your name";
    if(!isset($place_holder)) $place_holder = $label;
    echo $this->Form->input($name, array('label' => 'Full Name<span>*</span>', 'class' => 'form-control', 'placeholder' => 'Your full name')); 
    ?>  