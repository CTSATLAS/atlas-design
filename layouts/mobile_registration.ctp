<?php
/**
 * @author shawn sandy
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 * @since 02/06/2014
 */
?>
<!DOCTYPE html>
<html ng-app>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title_for_layout ; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width"> 
    <link rel="stylesheet" href="theme/fonts/open-sans/stylesheet.css"/>
    <?php echo $this->Html->script('theme/modernizer.min'); ?>
    <?php echo $this->Html->css('theme/fonts/fontawesome/fonts/css/font-awesome.min'); ?>
    <?php echo $this->Html->css('theme/fonts/open-sans/stylesheet'); ?>    
    <?php echo $this->Html->css('theme/v3/jquery.idealforms'); ?>  
 	<?php echo $this->Html->css('theme/bootstrap3/css/bootstrap.min'); ?>   
 	<?php echo $this->Html->css('theme/v3/stylesheet'); ?>
	<?php echo $this->Html->css('theme/v3/styles'); ?>

</head>
<body class="index">
<!--[if lt IE 8]>
<p class="chromeframe bg-danger">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> or <a
        href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your
    experience.
</p>
<![endif]-->
<header>
	<div class="container vtable">
            <div class="row table-cell">
                <div class="page-header-off">
                    <h1>
                        Virtual Job Fair Registration
                    </h1>
                    <p class=""></p>
                </div>

            </div>
        </div>
</header>
<section>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo $content_for_layout ; ?>
		</div>
	</div>
</div>
</section>

<footer>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
</div>	
</footer>

<div id="top-link">
    <a href="#page"><i class="fa fa-chevron-circle-up"></i></a>
</div>	

</div>

<!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<?php echo $this->Html->script('theme/v3/main') ?>
<?php echo $this->Html->script('theme/jquery.idealforms.min'); ?>
<!-- endinject-->


<script>

    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>
