<?php

if (!isset($name))
    $name = "input";
if (!isset($label))
    $label = "Input name";
if (!isset($place_holder))
    $place_holder = $label;
$required = !isset($required) ? $required = '<span>*</required>' : '';
echo $this->Form->input($name, array(
    'label' => $label . $required,
    'class' => 'form-control',
    'placeholder' => 'Enter '.$place_holder,
    'type' => 'textarea'));
?>  