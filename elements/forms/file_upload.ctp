<?php

if (!isset($name))
    $name = 'upload';
if (!isset($label))
    $label = "Select file to upload";
echo $this->Form->input($name, array('type' => 'file', 'label' => $label));
?>