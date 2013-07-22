<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Suncoast Workforce</title>
<link rel="stylesheet" type="text/css" href="/css/theme/master.css" />
<link rel="stylesheet" type="text/css" href="/css/theme/navCss.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/theme/jquery-canvasSwap.js" type="text/javascript"></script>
<script type="text/javascript" src="//use.typekit.net/odv1cfo.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>
	$(document).ready(function(){
		$('#clickOpenCS')
        .hover(function() {
            $('.contentBoxCSOpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxCSOpen').stop().animate({ height: 0 }, 'fast');
        });

		$('#clickOpenE')
        .hover(function() {
            $('.contentBoxEOpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxEOpen').stop().animate({ height: 0 }, 'fast');
        });

		$('#clickOpenR')
        .hover(function() {
            $('.contentBoxROpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxROpen').stop().animate({ height: 0 }, 'fast');
        });
	});

</script>
<script>
	$(document).ready(function(){
		$('.jobSeeker')
		.hover(function(){
			$('.growA').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growA').stop().animate({opacity:.65}, 'fast');
		});

		$('.employer')
		.hover(function(){
			$('.growB').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growB').stop().animate({opacity:.65}, 'fast');
		});

		$('.resources')
		.hover(function(){
			$('.growC').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growC').stop().animate({opacity:.65}, 'fast');
		});
	});
</script>
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <?= $this->element('layouts/header') ?>

            <?php if ($this->here === '/'): ?>
                <div class="homeContent">
                    <?= $content_for_layout ?>
                </div>
            <?php else: ?>
                <?= $this->element('layouts/banner_container') ?>
                <div class="contentArea">
                    <div class="dynamicContent">
                        <?= $content_for_layout ?>
                    </div>
                </div>
            <?php endif ?>

            <?= $this->element('layouts/footer') ?>
        </div>
    </div>
</body>
</html>