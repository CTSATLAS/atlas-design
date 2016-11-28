/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'atlas-icons\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-google-plus3': '&#xea8d;',
		'icon-vimeo': '&#xe600;',
		'icon-twitter': '&#xe601;',
		'icon-facebook': '&#xe602;',
		'icon-linkedin': '&#xe603;',
		'icon-evernote': '&#xe604;',
		'icon-blogger': '&#xe605;',
		'icon-youtube': '&#x78;',
		'icon-blogger3': '&#xe607;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
