<!-- homepage.ctp -->
<?php
    $middleContent = Cache::read('homepage_middle');

    if (!$middleContent) {
        $middleContent = $this->requestAction('/pages/homepage');
        Cache::write('homepage_middle', $middleContent);
    }
?>
<div>
	<?php echo $this->element('helpers/latest_events'); ?>
	<hr />
</div>
<div class="homepage-element">
    <?php echo $middleContent['Page']['content'] ?>
</div>
