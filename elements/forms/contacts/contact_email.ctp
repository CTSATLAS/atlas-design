<!-- contact_email.ctp -->

<?php $val = isset($value) ? $value : ''  ;
echo $this->element('forms/input', array(
        'name' => 'contact_email',
        'label' => 'Contact Email',
        'value' => $val       
        ));
    ?>