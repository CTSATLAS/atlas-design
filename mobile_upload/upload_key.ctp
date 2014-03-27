<?php if($key_data == 'success') : ?>
<h3>Verification Key:</h3>
<span id="vkey" class="btn btn-danger">
    <h1><?php echo $key ?></h1> 
</span>

<p class="text-primary">1. Write down the verification code (above). </br>2. Check your phone for our text message. </br>3. Click the link in the text message and wil be take to our mobile upload page.</p>

<?php else : ?>
<h3>Mobile Upload Access:</h3>

<p class="text-primary">1. Enter your mobile phone number and select your mobile provider. </br>2. Click "Text Me The Link" to receive your verification key and a text with upload link and instructions.</p>
<?php echo $this->Form->create() ?>
    <input type="hidden" name="" value="<?php echo $user_id ?>" readonly="readonly" />
    <div class="form-group">
        <?php echo $this->Form->input('mobile_number', array('class' => 'form-control',
        'label' => "Please Enter Your Mobile Phone Number")); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('field', array('type'=>'select','label' => "Select your Mobile Provider", 'options' => array('Verizon','tMobile','Metro PCS','Sprint','AT&T'), 'class' => 'form-control')); ?>
    </div>
<?php echo $this->Form->button('<bold>Text Me The Link</bold>', array('class' => 'btn btn-primary btn-lg')); ?>
<?php  echo $this->Form->end(); ?>
<?php endif; ?>