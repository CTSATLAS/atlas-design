<!-- homepage.ctp -->
<?php
    $middleContent = Cache::read('homepage_middle');

    if (!$middleContent) {
        $middleContent = $this->requestAction('/pages/homepage');
        Cache::write('homepage_middle', $middleContent);
    }
?>
<div class="homepage-element">
    <?php echo $middleContent['Page']['content'] ?>
</div>
<div>
<hr />
	<?php echo $this->element('helpers/latest_events'); ?>
</div>