<h3>Upload Documents</h3>
<?php if($success) : ?>
<p class="text-success">Thank you would like to upload another document</p>
<?php endif ?>
<p class="text-primary">1. Hit the Choose File button.</br> 2. Snap a photo or select one from your gallery. </br> 3. Hit upload to send the file.</p>
<form role="form" action="upload_save" method="post">
    <div class="form-group">        
        <input class="form-control" type="file" placeholder="Upload File" accept="image/*;capture=camera">
    </div>
    <button class="btn btn-primary btn-large">Upload</button>
</form>

