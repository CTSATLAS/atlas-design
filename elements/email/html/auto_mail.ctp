<!--html email-->

<?php foreach ($messageData as $title => $value) : ?>
<p><b><?php echo $title ?></b><br />   <?php echo !empty($value) ? $value : ''; ?> </p>    
<?php endforeach; ?>