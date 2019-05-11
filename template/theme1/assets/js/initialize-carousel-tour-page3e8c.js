// ##################################
// INICTIALIZE CAROUSEL DETAILS PAGE
// #################################

$(function() {
	var $carousel = $('#carousel'),
		$pager = $('#pager');

	function getCenterThumb() {
		var $visible = $pager.triggerHandler( 'currentVisible' ),
			center = Math.floor($visible.length / 2);

		return center;
	}

	$carousel.carouFredSel({
		responsive: true,
		items: {
			visible: 1,
			width: 1200,
			height: (380/910*100) + '%'
		},
		scroll: {
			fx: 'crossfade',
			onBefore: function( data ) {
				var src = data.items.visible.first().attr( 'src' );
				src = src.split( '/large/' ).join( '/small/' );

				$pager.trigger( 'slideTo', [ 'img[src="'+ src +'"]', -getCenterThumb() ] );
				$pager.find( 'img' ).removeClass( 'selected' );
			},
			onAfter: function() {
				$pager.find( 'img' ).eq( getCenterThumb() ).addClass( 'selected' );
			}
		},
		prev: {
			button: "#prev_btn2",
			key: "left"
		},
		next: {
			button: "#next_btn2",
			key: "right"
		},
		pagination: "#pager"
	});
	$pager.carouFredSel({

		auto: false,
		height: 22,
		items: {

		},
		onCreate: function() {
			var center = getCenterThumb();
			$pager.trigger( 'slideTo', [ 20, { duration: 0 } ] );
			$pager.find( 'img' ).eq( center ).addClass( 'selected' );
		}
	});
	$pager.find( 'img' ).click(function() {
		var src = $(this).attr( 'src' );
		src = src.split( '/small/' ).join( '/large/' );
		$carousel.trigger( 'slideTo', [ 'img[src="'+ src +'"]' ] );
	});

	var mhcontainer = $('#overlay_side_bar').height() + parseInt($('#overlay_side_bar').css('marginTop')) + 200;
	$('#tab_content').css('minHeight', mhcontainer);
});








