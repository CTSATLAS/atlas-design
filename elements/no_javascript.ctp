<!-- A really dirty way of keeping people from accessing the site when
	their javascript is turned off -->
<noscript>
	<style>
	.noscript {
		position:fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		background-color:#FFF;
		z-index: 9999;
		text-align: center;
	}
	.noscript p {
		margin-left:auto;
		margin-right:auto;
		color:#34a424;
		text-align:center;
		font-size:12pt;
		font-family:Verdana;
		width:200px;
	}
	</style>
	<div class="noscript">
		<img src="/img/theme/tampa-bay.png" />
		<p>
			Sorry but you have javascript disabled, to use <?= Configure::read('Company.name') ?>'s
			website you will have to activate javascript
		</p>

		<p style="width:400px">
			Please activate javascript in your browser 
		</p>
	</div>
</noscript>