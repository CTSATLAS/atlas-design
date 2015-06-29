<!-- homepage.ctp -->
<?php
    $middleContent = Cache::read('homepage_middle');

    if (!$middleContent) {
        $middleContent = $this->requestAction('/pages/homepage');
        Cache::write('homepage_middle', $middleContent);
    }
?>
<div class="homepage-element">
<div class="youtube">
	<iframe width="860" height="484" src="https://www.youtube.com/embed/Auz3izHJbZg" frameborder="0" allowfullscreen></iframe>
</div>
    <?php echo $middleContent['Page']['content'] ?>
</div>