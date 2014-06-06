<!-- pay_rate.ctp -->
 <b>Pay Rate</b>
    <?php echo $this->element('forms/input', array(
        'name' => 'min_pay', 
        'label' => 'Minimum Pay')); 
    ?>
    <?php echo $this->element('forms/input', array(
        'name' => 'max_pay', 
        'label' => 'Maximum Pay')); 
    ?>