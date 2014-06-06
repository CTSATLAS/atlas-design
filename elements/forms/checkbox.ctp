<!-- checkbox.ctp -->
<?php 

if (!isset($name))
    $name = "name";
if (!isset($label))
    $label = "Input Name";
if (!isset($place_holder))
    $place_holder = $label;
if(!isset($options)) $options = array('Y' => 'Yes', 'N' => "No");
$required = !isset($required) ? $required = '<span>*</required>' : '';
echo $this->Form->label($label);
echo $this->Form->checkbox($name);
 
 ?> 
