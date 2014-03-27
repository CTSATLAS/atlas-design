<h3>Upload Documents</h3>
<?php if($success) : ?>
<p class="text-success">Thank you would like to upload another document</p>
<?php endif ?>
<p class="text-primary">1. Hit the Choose File button.</br> 2. Snap a photo or select one from your gallery. </br> 3. Hit upload to send the file.</p>
<?php echo $this->Form->create(array('type' => 'file')); ?>
    <div class="form-group">        
<!--   <input class="form-control" type="file" placeholder="Upload File" accept="image/*;capture=camera">-->
        <div class="form-group">
            <?php echo $this->Form->file('image_url', array('class' => 'form-control',
                'label' => "Please Enter Your Mobile Phone Number", 'accept' => 'image/*;capture=camera')); ?>
        </div>
    </div>
<?php echo $this->Form->button('Upload Photo', array('class' => 'btn btn-primary btn-lg')) ?>
<?php echo $this->Form->end() ?>

