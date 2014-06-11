<!-- contact_email.ctp -->

<?php $val = isset($license_data['first_name']) ? $license_data['first_name'] : ''  ;
echo $this->element('forms/input', array(
        'name' => 'contact_email',
        'label' => 'Contact Email',
        'value' => $val       
        ));
    ?>