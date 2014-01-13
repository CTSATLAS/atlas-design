<?php echo $this->Html->script('jquery.resizable-text', array('inline' => false)) ?>
<?php echo $this->Html->css('jquery.resizable-text', 'stylesheet', array('inline' => false)) ?>
<script type="text/javascript">
	$(function() {
		$('#content').resizableText();
	});
</script>

<?php if (isset($page['Page']['header_content'])): ?>
	<div class="row">
		<div class="span12">
			<?= $page['Page']['header_content'] ?>
		</div>
	</div>
<?php endif ?>

<div class="row">
	<?php $i = 1; ?>
	<div class="thumbnails_4">
	<?php foreach ($subpages as $subpage): ?>
		<?php if ($i % 5 === 0): ?>
			</div>
			<div class="thumbnails_4">
		<?php endif ?>
			<div class="span3">
				<div class="thumbnail thumbnail_4">
					<figure class="img-rounded">
						<a href="/pages/<?= $subpage['Page']['slug'] ?>" class="lead">
							<img src="/img/public/pages/<?= $subpage['Page']['image_url'] ?>" alt="">
						</a>
					</figure>
					<p class="lead p2">
						<a href="/pages/<?= $subpage['Page']['slug'] ?>" class="lead"><?= $subpage['Page']['title'] ?></a>
					</p>
				</div>
			</div>
		<?php $i++ ?>
	<?php endforeach; ?>
	</div>
</div>

<?php if (isset($page['Page']['footer_content'])): ?>
	<div class="row">
		<div class="span12">
			<?= $page['Page']['footer_content'] ?>
		</div>
	</div>
<?php endif ?>
