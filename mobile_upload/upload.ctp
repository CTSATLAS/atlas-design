<h3>Upload Documents</h3>
<?php if($success) : ?>
<h3 class="text-success">Thank you we have received your document. If you have other documents to submit, please repeat the steps below.</h3>
<?php endif ?>
<p class="text-primary">1. Click the Choose File button.</br> 2. Take a photo of your document. </br> 3. Click Upload Document to send the file.</p>
<?php echo $this->Form->create(array('type' => 'file')); ?>
    <div class="form-group">        
<!--   <input class="form-control" type="file" placeholder="Upload File" accept="image/*;capture=camera">-->
        <div class="form-group">
            <?php echo $this->Form->file('image_url', array('class' => 'form-control',
                'label' => "Please Enter Your Mobile Phone Number", 'accept' => 'image/*;capture=camera')); ?>
        </div>
    </div>
<?php echo $this->Form->button('Upload Document', array('class' => 'btn btn-primary btn-lg')) ?>
<?php echo $this->Form->end() ?>

