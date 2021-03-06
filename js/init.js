/*
	Catalyst by Pixelarity
	pixelarity.com @pixelarity
	License: pixelarity.com/license
*/

(function($) {

	skel.init({
		reset: 'full',
		breakpoints: {
			global:		{ range: '*', href: '/css/style.css?v=3', containers: 1200, grid: { gutters: ['3em', 0] } },
			wide:		{ range: '-1680', href: '/css/style-wide.css', containers: 1080 },
			normal:		{ range: '-1280', href: '/css/style-normal.css', containers: 960, grid: { gutters: ['2em', 0] }, viewport: { scalable: false } },
			narrow:		{ range: '-980', href: '/css/style-narrow.css', containers: '90%!', grid: { zoom: 2 } },
			mobile:		{ range: '-736', href: '/css/style-mobile.css', containers: '100%!' },
			mobilep:	{ range: '-480', href: '/css/style-mobilep.css', grid: { zoom: 3 } }
		},
		plugins: {
			layers: {

				// Config.
					config: {
						transformTest: function() { return skel.vars.isMobile; }
					},
				
				// Navigation Panel.
					navPanel: {
						animation: 'pushX',
						breakpoints: 'narrow',
						clickToHide: true,
						height: '100%',
						hidden: true,
						html: '<div data-action="navList" data-args="nav"></div>',
						orientation: 'vertical',
						position: 'top-left',
						side: 'left',
						width: 250
					},

				// Navigation Button.
					navButton: {
						breakpoints: 'narrow',
						height: '4em',
						html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
						position: 'top-left',
						side: 'top',
						width: '6em'
					}

			}
		}
	});

	$(function() {
		
		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');
			
			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 500);
			});

		// Forms (IE<10).
			var $form = $('form');
			if ($form.length > 0) {
				
				$form.find('.form-button-submit')
					.on('click', function() {
						$(this).parents('form').submit();
						return false;
					});
		
				if (skel.vars.IEVersion < 10) {
					$.fn.n33_formerize=function(){var _fakes=new Array(),_form = $(this);_form.find('input[type=text],textarea').each(function() { var e = $(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = $(this); var x = $($('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = $(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = $(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { $(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); $(this).find('select').val($('option:first').val()); $(this).find('input,textarea').each(function() { var e = $(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
					$form.n33_formerize();
				}

			}
		
		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: 'right'
			});
			
		// Banner.
			var $banner = $('#banner');
			
			if ($banner.length > 0) {
				addParallaxBanner($window, $banner);
			}
		
	});

})(jQuery);

function addParallaxBanner($window, $banner) {
	if (skel.vars.browser != 'ie' && !skel.vars.isMobile) {
		var originalPosition = $banner.css('background-position');
		
		skel.change(function() {
			if (skel.isActive('narrow')) {
				$window.off('scroll.px');
				$window.off('resize.px');
				$banner.css('background-position', originalPosition);
			
			} else {
				updateParallaxBanner($window, $banner);
		
				$window.on('scroll.px', function() {
					updateParallaxBanner($window, $banner);
				});
		
				$window.on('resize.px',function() {
					updateParallaxBanner($window, $banner);
				});
				
			}
		});
	}
}

function updateParallaxBanner($window, $banner) {
	width_to_height = $window.innerWidth() / $window.innerHeight();
	
	pattern_pos = "center";
	city_pos = 'center bottom ' + (parseInt($window.scrollTop()) * 0.6) + 'px';
	if (width_to_height > 1.78) {
		city_size = "100%";
		city_pos = 'center calc(100% - ' + ((parseInt($window.scrollTop()) * 0.6) - (250 * (width_to_height - 1.78)) - 5) + 'px)'
	} else {
		city_size = "auto 35.2%";
	}
	bg_pos = 'center ' + (parseInt($window.scrollTop()) * -0.5) + 'px'
	$banner.css('background-position', pattern_pos + ", " + city_pos + ", " + bg_pos);
	$banner.css('background-size', "auto, "+city_size+", cover");
}