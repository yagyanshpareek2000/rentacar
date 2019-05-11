//------------------------------
//Picker
//------------------------------
$(function() {
    jQuery( "#datepicker,#datepicker2,#datepicker3,#datepicker4,#datepicker5,#datepicker6,#datepicker7, #datepicker8, #datepicker9,#datepicker10,#datepicker11,#datepicker12,#datepicker13,#datepicker14,#datepicker15,#datepicker16" ).datepicker({
        dateFormat: "dd/mm/yy"
    });
});
$(function(){
    "use strict";
    $('#myTab').find('li').on('click', function(){
        load_tab($(this).attr('id').replace('#',''));
    });
});
//------------------------------
//CaroufredSell
//------------------------------
$(function(jQuery){
    $("#turAra").validate();
    // jQuery("#foo").carouFredSel({
    //     width: "100%",
    //     height: 440,
    //     items: {
    //         visible: 5,
    //         minimum: 1,
    //         start: 2
    //     },
    //     scroll: {
    //         items: 1,
    //         easing: "easeInOutQuad",
    //         duration: 500,
    //         pauseOnHover: true
    //     },
    //     auto: false,
    //     prev: {
    //         button: "#prev_btn",
    //         key: "left"
    //     },
    //     next: {
    //         button: "#next_btn",
    //         key: "right"
    //     },
    //     swipe: true
    // });


    //jQuery("#foo2").carouFredSel({
    //    width: "100%",
    //    height: 440,
    //    items: {
    //        visible: 5,
    //        minimum: 1,
    //        start: 2
    //    },
    //    scroll: {
    //        items: 1,
    //        easing: "easeInOutQuad",
    //        duration: 500,
    //        pauseOnHover: true
    //    },
    //    auto: false,
    //    prev: {
    //        button: "#prev_btn2",
    //        key: "left"
    //    },
    //    next: {
    //        button: "#next_btn2",
    //        key: "right"
    //    },
    //    swipe: true
    //});


});

//------------------------------
//Add rooms
//------------------------------
function addroom2(){
    jQuery('.room2').addClass('block');
    jQuery('.room2').removeClass('none');
    jQuery('.addroom1').removeClass('block');
    jQuery('.addroom1').addClass('none');

}
function removeroom2(){
    jQuery('.room2').addClass('none');
    jQuery('.room2').removeClass('block');

    jQuery('.addroom1').removeClass('none');
    jQuery('.addroom1').addClass('block');
}
function addroom3(){
    jQuery('.room3').addClass('block');
    jQuery('.room3').removeClass('none');

    jQuery('.addroom2').removeClass('block');
    jQuery('.addroom2').addClass('none');
}
function removeroom3(){
    jQuery('.room3').addClass('none');
    jQuery('.room3').removeClass('block');

    jQuery('.addroom2').removeClass('none');
    jQuery('.addroom2').addClass('block');
}
//------------------------------
//TABS CHANGE
//------------------------------
$(function(){

    function mySelectUpdate(){
        setTimeout(function (){
            jQuery('.selectStyle').trigger('update');
        }, 500);
    }
    mySelectUpdate();
    jQuery('.vacationstab').removeClass('none');

    jQuery( "#optionsRadios1" ).click(function() {
        jQuery('.hotelstab').removeClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios2" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').removeClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios3" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').removeClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios4" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').removeClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios5" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').removeClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios6" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').removeClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios7" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').removeClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios8" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').removeClass('none');
        jQuery('.hotelcartab').addClass('none');
        mySelectUpdate();
    });
    jQuery( "#optionsRadios9" ).click(function() {
        jQuery('.hotelstab').addClass('none');
        jQuery('.flightstab').addClass('none');
        jQuery('.vacationstab').addClass('none');
        jQuery('.carstab').addClass('none');
        jQuery('.cruisestab').addClass('none');
        jQuery('.flighthotelcartab').addClass('none');
        jQuery('.flighthoteltab').addClass('none');
        jQuery('.flightcartab').addClass('none');
        jQuery('.hotelcartab').removeClass('none');
        mySelectUpdate();
    });


    /***********SearchTabs******************/

    //
    //jQuery( "#vacationssearchtab" ).click(function() {
    //    jQuery('.hotelstab').addClass('none');
    //    jQuery('.flightstab').addClass('none');
    //    jQuery('.vacationstab').removeClass('none');
    //    jQuery('.carstab').addClass('none');
    //    jQuery('.cruisestab').addClass('none');
    //    jQuery('.flighthotelcartab').addClass('none');
    //    jQuery('.flighthoteltab').addClass('none');
    //    jQuery('.flightcartab').addClass('none');
    //    jQuery('.hotelcartab').addClass('none');
    //    mySelectUpdate();
    //});
    //
    //
    //jQuery( "#airssearchtab" ).click(function() {
    //    jQuery('.hotelstab').addClass('none');
    //    jQuery('.flightstab').removeClass('none');
    //    jQuery('.vacationstab').addClass('none');
    //    jQuery('.carstab').addClass('none');
    //    jQuery('.cruisestab').addClass('none');
    //    jQuery('.flighthotelcartab').addClass('none');
    //    jQuery('.flighthoteltab').addClass('none');
    //    jQuery('.flightcartab').addClass('none');
    //    jQuery('.hotelcartab').addClass('none');
    //    mySelectUpdate();
    //});
    //
    //
    //jQuery( "#hotelssearchtab" ).click(function() {
    //    jQuery('.hotelstab').removeClass('none');
    //    jQuery('.flightstab').addClass('none');
    //    jQuery('.vacationstab').addClass('none');
    //    jQuery('.carstab').addClass('none');
    //    jQuery('.cruisestab').addClass('none');
    //    jQuery('.flighthotelcartab').addClass('none');
    //    jQuery('.flighthoteltab').addClass('none');
    //    jQuery('.flightcartab').addClass('none');
    //    jQuery('.hotelcartab').addClass('none');
    //    mySelectUpdate();
    //});
    //
    //jQuery( "#carssearchtab" ).click(function() {
    //    jQuery('.hotelstab').addClass('none');
    //    jQuery('.flightstab').addClass('none');
    //    jQuery('.vacationstab').addClass('none');
    //    jQuery('.carstab').removeClass('none');
    //    jQuery('.cruisestab').addClass('none');
    //    jQuery('.flighthotelcartab').addClass('none');
    //    jQuery('.flighthoteltab').addClass('none');
    //    jQuery('.flightcartab').addClass('none');
    //    jQuery('.hotelcartab').addClass('none');
    //    mySelectUpdate();
    //});
    //
    //jQuery( "#cruisessearchtab" ).click(function() {
    //    jQuery('.hotelstab').addClass('none');
    //    jQuery('.flightstab').addClass('none');
    //    jQuery('.vacationstab').addClass('none');
    //    jQuery('.carstab').addClass('none');
    //    jQuery('.cruisestab').removeClass('none');
    //    jQuery('.flighthotelcartab').addClass('none');
    //    jQuery('.flighthoteltab').addClass('none');
    //    jQuery('.flightcartab').addClass('none');
    //    jQuery('.hotelcartab').addClass('none');
    //    mySelectUpdate();
    //});
});
/****************************/

//$.widget("custom.catcomplete", $.ui.autocomplete, {
//	_create: function () {
//		this._super();
//		this.widget().menu("option", "items");
//	},
//	_renderItem: function (ul, item) {
//		var that = this;
//		var re = new RegExp("(" + this.term + ")", "gi"),
//			template = "<strong>$1</strong>";
//		var name = item.name.replace(re, template);
//		return $("<li>", {
//			'class': 'country'
//		})
//			.append("<a><i class='flag " + item.countryCode + "'></i>" + name + "<span class='info'>(" + item.dest + ")</span><span class='country-name'>" + item.countryName + "</span></a>")
//			.appendTo(ul);
//	},
//	_renderMenu: function (ul, items) {
//		var that = this;
//		$.each(items, function (index, item) {
//			that._renderItemData(ul, item);
//		});
//	}
//});
var lastScrollPos = 0;
$(function () {
    var tourCache = {};
    // $('#tourComplate').catcomplete({
    // minLength: 2,
    // source: function (request, response) {
    // var term = request.term;
    // if (term in tourCache) {
    // response(tourCache [term]);
    // return;
    // }
    // $.getJSON("/actions/complete/ucak_destinasyonlari.php", {q: request.term}, function (data, status, xhr) {
    // tourCache [term] = data;
    // response(data);
    // });
    // },
    // messages: {
    // noResults: 'asdsad',
    // results: function () {
    // }
    // },
    // focus: function (event, ui) {
    // $("#tourComplate").val(ui.item.name);
    // return false;
    // },
    // select: function (event, ui) {
    // $("#tourComplate").val(ui.item.name);
    // $("#cityid").val(ui.item.id);
    // return false;
    // },
    // appendTo: "#tourComplateResult",
    // open: function () {
    // var position = $("#tourComplateResult").position(),
    // top = position.top;
    // $("#tourComplateResult > ul").css({top: top + -4 + "px"});
    // }
    // });
});
function load_tab(tab) {
    jQuery.post("/modules/rezervasyon/arama_tabs/tab_degistir.php?box="+tab, function( data ) {
        jQuery( "#vacationstab" ).html( data ).fadeIn();
    }).done(function(){
        $('.tooltip').tooltip('destroy');
        $('#myTab').find('li').removeClass('active');
        $('#'+tab).addClass('active');
        setAutoComplete();
        cafe.updateDatepickers();
        // jQuery('#vacationstab').animateAuto("height", 200, search_resizer_handler())
        cafe.setCustomSelect();
    });
}
$( "#search_box_resizer" ).click(function() {/*
 jQuery( "#vacationstab" ).animate({
 //opacity: 0.25,
 //left: "+=50",
 height: "toggle"
 }, 1000, function() {
 // Animation complete.
 });*/

    jQuery("#vacationstab").toggle(function(){
        jQuery(this).animate({height:400},500);
    },function(){
        jQuery(this).animate({height:600},500);
    });
});
//var jQuery=jQuery;
//						jQuery.noConflict();
// $(function() {
//     if(!CTL.platform.is('phone')){
//         if (jQuery.fn.cssOriginal!=undefined)
//             jQuery.fn.css = jQuery.fn.cssOriginal;
//         var api = jQuery('.slider').revolution({
//             delay:5000,
//             startwidth:733,
//             lazyLoad:"on",
//             startheight:446,
//             onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
//             thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
//             thumbHeight:50,
//             thumbAmount:3,
//             hideThumbs:0,
//             navigationType:"bullet",				// bullet, thumb, none
//             navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none
//             navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
//             navigationHAlign:"right",				// Vertical Align top,center,bottom
//             navigationVAlign:"bottom",					// Horizontal Align left,center,right
//             navigationHOffset:30,
//             navigationVOffset:50,
//             soloArrowLeftHalign:"left",
//             soloArrowLeftValign:"center",
//             soloArrowLeftHOffset:20,
//             soloArrowLeftVOffset:0,
//             soloArrowRightHalign:"right",
//             soloArrowRightValign:"center",
//             soloArrowRightHOffset:20,
//             soloArrowRightVOffset:0,
//             touchenabled:"on",						// Enable Swipe Function : on/off
//             stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
//             stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
//             hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
//             hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
//             hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
//             fullWidth:"on",
//             shadow:1
//         });
//         // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
//         // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
//         api.bind("revolution.slide.onloaded",function (e) {
//             $('.scolleft').css('height', $(this).height());
//             $('#vacationstab').css('height', $(this).height() - 85)
//             jQuery('.tparrows').each(function() {
//                 var arrows=jQuery(this);
//                 var timer = setInterval(function() {
//                     if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
//                         arrows.fadeOut(300);
//                 },3000);
//             });
//             jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
//                 jQuery('.tp-simpleresponsive').addClass("mouseisover");
//                 jQuery('body').find('.tparrows').each(function() {
//                     jQuery(this).fadeIn(300);
//                 });
//             }, function() {
//                 if (!jQuery(this).hasClass("tparrows"))
//                     jQuery('.tp-simpleresponsive').removeClass("mouseisover");
//             });
//         });
//         $(window).on('resize', function(){
//             "use strict";
//             setTimeout(function(){
//                 if (!Modernizr.mq('only screen and (max-width: 991px)')) {
//                     $('.scolleft').css('height', $('.slider').height() - 85);
//                 }
//                 $('#vacationstab').animateAuto("height", 0, search_resizer_handler());
//             }, 128)
//         });
//         // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
//     } else {
//         $('.scolright').remove();
//     }
// });
$(function($){
    // gets the width of black bar at the bottom of the slider
    var $gwsr = $('.scolright').outerWidth();
    $('.blacklable').css({'width' : $gwsr +'px'});
});
$(window).resize(function() {
    jQuery(document).ready(function($){
        // gets the width of black bar at the bottom of the slider
        var $gwsr = $('.scolright').outerWidth();
        $('.blacklable').css({'width' : $gwsr +'px'});
    });
});


$(function(){
    "use strict";
    $('[data-role="es-vitrin"]').on('click', function(e){
        e.preventDefault();
        if(Modernizr.mq('only screen and (max-width: 991px)')){
            window.location = $(this).attr('href');
        } else {
            var hook = $(this).data('value');

            $('[data-role="vitrinTitle"]').text($(this).data('title'));

            var $parent = $(this).parents('[data-role="es"]');

            $parent.attr('id', hook);

            $parent.find('[data-hook].active').removeClass('active');

            var $activeSlide = $parent.find('[data-hook="'+ hook +'"]');

            $activeSlide.addClass('active');
            var owls   =   $activeSlide.find('ul').owlCarousel({
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                margin:30,
                pagination:false,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:2
                    },
                    992:{
                        items:3
                    }
                }
            }).on("changed.owl.carousel", function(e){
                var items     = e.item.count;
                var item      = e.item.index;
                var size      = e.page.size;
                $("[id^=etiketPrevBtn]").show();
                $("[id^=etiketNextBtn]").show();
                if(size + item == items){
                    $("[id^=etiketNextBtn]").hide();
                }
                if (item == 0){
                    $("[id^=etiketPrevBtn]").hide();
                }
            });
            $activeSlide.on('click', '[id^=etiketPrevBtn]', function(e){
                e.preventDefault();
                owls.trigger('prev.owl.carousel');
            });
            $activeSlide.on('click', '[id^=etiketNextBtn]', function(e){
                e.preventDefault();
                owls.trigger('next.owl.carousel');
            });
            var nextBtn = '#' + $activeSlide.find('[data-role="next"]').attr('id');
            var prevBtn = '#' + $activeSlide.find('[data-role="prev"]').attr('id');
            $activeSlide.find('img').unveil();
        }
    })
});
jQuery.fn.mousehold = function( timeout, f ) {
    if ( timeout && typeof timeout == 'function' ) {
        f       = timeout;
        timeout = 100;
    }
    if ( f && typeof f == 'function' ) {
        var timer    = 0;
        var fireStep = 0;
        return this.each(function() {
            jQuery(this).mousedown(function() {
                fireStep = 1;
                var ctr  = 0;
                var t    = this;
                timer    = setInterval(function() {
                    ctr++;
                    f.call(t, ctr);
                    fireStep = 2;
                }, timeout);
            });
            clearMousehold = function() {
                clearInterval(timer);
                if ( fireStep == 1 ) {
                    f.call(this, 1);
                }
                fireStep = 0;
            };
            jQuery(this).mouseout(clearMousehold);
            jQuery(this).mouseup(clearMousehold);
        })
    }
};

var map;
var providers   = {};
Object.byString = function( o, s ) {
    s     = s.replace(/\[(\w+)\]/g, '.$1');
    s     = s.replace(/^\./, '');
    var a = s.split('.');
    for ( var i = 0, n = a.length; i < n; ++i ) {
        var k = a[i];
        if ( k in o ) {
            o = o[k];
        } else {
            return;
        }
    }
    return o;
};
$(window).load(function() {
    $.getScript(cafe.options.urls.cdnPath + '/js/index/map.bundle.min.js').done(function() {
        if ( typeof mapData !== "undefined" ) {
            initMap();
        } else {
            $(document).on('mapDataLoaded', initMap)
        }
    });
});

function handleGoHome() {
    $('[data-role=map-navigation] li.active').removeClass('active');
    $('#haritaContainer').removeClass('countries').removeClass('tours').removeClass('cities');
    map.dataProvider = providers.continents;

    map.dragMap                        = false;
    map.zoomControl.zoomControlEnabled = false;
    map.zoomControl.homeButtonEnabled  = false;
    map.validateNow();
}

function initMap() {
    for ( var country in mapData.countries ) {
        providers[country] = {
            mapVar : AmCharts.maps.worldHigh,
            areas : mapData.countries[country].areas
        };
    }
    providers['world']      = mapData['world'];
    providers['continents'] = {
        mapVar : AmCharts.maps[mapData.continents.mapVar],
        areas : mapData.continents.areas,
        id : 'continents'
    };
    var continents = providers['continents'].areas;
    for ( var i = 0; i < continents.length; i++ ) {
        mapMenu(continents[i].id, continents[i].tourData, continents[i].lowestPriceText);
        continents[i].linkToObject = providers[continents[i].linkToObject];
        continents[i].balloonText  = "[[title]]<br>([[tourData.count.country]] Ülke - [[tourData.count.tour]] tur)<br>[[lowestPriceText]]";
    }
    map                      = new AmCharts.AmMap();
    map.areasSettings        = {
        autoZoom : true,
        balloonText : "[[title]]<br>([[tourData.count.city]] Şehir - [[tourData.count.tour]] tur)<br>[[lowestPriceText]]",
        alpha : 0.9,
        rollOverAlpha : 1,
        rollOverOutlineColor : '#ccc',
        rollOverBrightness : 0,
        selectedBrightness : 0
    };
    map.balloonLabelFunction = function( e ) {
        var result    = e.balloonTextReal;
        var variables = result.match(/\[\[[^[\]]+(?=])\]\]/g);
        for ( var i = 0; i < variables.length; i++ ) {
            var re = new RegExp(variables[i].replace(/\[/g, '\\['), 'g');
            if ( Object.byString(e, variables[i].replace(/\[|]/g, '')) != undefined ) {
                result = result.replace(re, Object.byString(e, variables[i].replace(/\[|]/g, '')));
            } else {
                result = result.replace(re, '');
            }
        }
        return result;
    };
    map.dragMap              = false;
    map.zoomControl          = {
        zoomControlEnabled : false,
        homeButtonEnabled : false,
        top : 10,
        right : 10
    };
    map.dataProvider         = providers.continents;
    map.addListener("homeButtonClicked", handleGoHome);
    map.addListener("dataUpdated", function( data ) {
        var areas = data.chart.dataProvider.areas;
        var list  = [];
        for ( var i = 0; i < areas.length; i++ ) {
            list.push('<li id="' + areas[i].id + '" data-type="country" class="clearfix" data-event-name="clickTracker" data-tracking="click" data-event-action="map" data-event-label="' + areas[i].title + '"><a href="#' + areas[i].id + '" ><span class="destination-name">' + areas[i].title + '</span><span class="tour-size">( ' + areas[i].tourData.count.tour + ' Tur )</span></a></li>')
        }
        var $element = $('[data-role="countries"]');
        $element.html(list.join(''));
        var height     = parseInt($element.css('height'));
        var fullHeight = $element.css('height', 'auto').innerHeight();
        if ( fullHeight <= height ) {
            $element.next().find('a').addClass('passive');
        } else {
            $element.next().find('a').removeClass('passive');
        }
        $element.css('height', 'calc(100% - 37px)');
    });
    map.addListener("clickMapObject", function( object ) {
        if ( object.mapObject.type == 'continent' ) {
            $('[data-role="countries"]').html('');
            $('#haritaContainer').removeClass('cities').removeClass('tours');
        } else if ( object.mapObject.type == "country" ) {
            $('#haritaContainer').removeClass('tours');
        }
        if ( object.mapObject.id == 'continents' ) {
            /* set state*/
            $('#haritaContainer').removeClass('countries').removeClass('cities').removeClass('tours');
            /* set map*/
            map.dragMap                        = false;
            map.zoomControl.zoomControlEnabled = false;
        } else {
            /* set state*/
            $('#haritaContainer').addClass('countries');
            var $li = $('#' + object.mapObject.id);
            $('[data-type=' + $li.data('type') + '].active').removeClass('active');
            $li.addClass('active');
            map.dragMap                        = true;
            map.zoomControl.zoomControlEnabled = true;
            map.zoomControl.top                = 10;
            map.zoomControl.right              = 10;
            if ( object.mapObject.type ) {
                if ( object.mapObject.type == 'country' ) {
                    setList({
                        type : object.mapObject.type,
                        id : object.mapObject.id
                    })
                }
            } else if ( object.mapObject.link ) {
                window.location.href = object.mapObject.link;
            } else {
                $('[data-role="countries"]').html('');
            }
        }
        /* bottom navigation */
        if ( object.mapObject.type == 'continent' ) {
            $('[data-role=map-navigation] li.active').removeClass('active');
            $('#' + object.mapObject.id).addClass('active');
        }
    });
    map.write("harita");
}
function setList( obj ) {
    var $element;
    if ( obj.type == 'country' ) {
        $element = $('[data-role="cities"]');
        $('#haritaContainer').addClass('cities');
    } else if ( obj.type == 'city' ) {
        $element = $('[data-role="tours"]');
        $('#haritaContainer').addClass('tours');
    }
    $element.html('');
    function ArrayFilter( key ) {
        return function( arr ) {
            var data = {
                keyExist : [],
                keyNotExist : []
            };
            for ( var i = 0; i < arr.length; i++ ) {
                if ( key in arr[i] ) {
                    data.keyExist.push(arr[i])
                } else {
                    data.keyNotExist.push(arr[i])
                }
            }
            data.keyExist.sort(function( a, b ) {
                return parseInt(a.fiyat.replace('.', '')) > parseInt(b.fiyat.replace('.', ''));
            });
            return data;
        }
    }

    $.getJSON('/actions/mapdata.php', {
        type : obj.type,
        code : obj.id
    }).done(function( data ) {
        var list = [];
        if ( obj.type == 'city' ) {
            var filtered = ArrayFilter('lowestPriceByTag')(data);
            if ( filtered.keyExist.length > 0 ) {
                list.push('<li class="title title-speacial-offer">Fırsatlar</li>');
                for ( var i = 0; i < filtered.keyExist.length; i++ ) {
                    list.push(
                        '<li data-type="tour" class="special-offer clearfix">' +
                        '<a href="' + filtered.keyExist[i].url + '">' +
                        '<div class="map-tour-wrapper">' +
                        '<div class="map-tour-left" data-event-name="clickTracker" data-tracking="click" data-event-action="map" data-event-label="' + filtered.keyExist[i].name + '">' +
                        '<span class="map-tour-night">' + filtered.keyExist[i].nights + ' gece</span>' +
                        '<span class="map-tour-name">' + filtered.keyExist[i].name + (filtered.keyExist[i].tag ? '<i>' + filtered.keyExist[i].tag + '</i>' : '') + '</span>' +
                        '</div>' +
                        '<div class="map-tour-right" data-event-name="clickTracker" data-tracking="click" data-event-action="map" data-event-label="' + filtered.keyExist[i].name + '">' +
                        '<div><span class="map-tour-base-price">' + (filtered.keyExist[i].indirimsiz_fiyat ? filtered.keyExist[i].indirimsiz_fiyat : '') + '</span></div>' +
                        ' <span class="map-tour-price">' + filtered.keyExist[i].fiyat + '</span>' +
                        '</div>' +
                        '<div class="map-tour-price_trans">' + (filtered.keyExist[i].fiyat != filtered.keyExist[i].fiyat_try + ' TL' ? filtered.keyExist[i].fiyat_try + ' TL' : '') + '</div>' +
                        '</div>' +
                        '</a>' +
                        '</li>'
                    )
                }
            }
            if ( filtered.keyNotExist.length > 0 ) {
                list.push('<li class="title title-tours">Tüm turlar</li>');
                for ( var i = 0; i < filtered.keyNotExist.length; i++ ) {
                    list.push(
                        '<li data-type="tour" class="tour-item clearfix">' +
                        '<a href="' + filtered.keyNotExist[i].url + '">' +
                        '<div class="map-tour-wrapper">' +
                        '<div class="map-tour-left" data-event-name="clickTracker" data-tracking="click" data-event-action="map" data-event-label="' + filtered.keyNotExist[i].name + '">' +
                        '<span class="map-tour-night">' + filtered.keyNotExist[i].nights + ' gece</span>' +
                        '<span class="map-tour-name">' + filtered.keyNotExist[i].name + (filtered.keyNotExist[i].tag ? '<i>' + filtered.keyNotExist[i].tag + '</i>' : '') + '</span>' +
                        '</div>' +
                        '<div class="map-tour-right">' +
                        '<div><span class="map-tour-base-price">' + (filtered.keyNotExist[i].indirimsiz_fiyat ? filtered.keyNotExist[i].indirimsiz_fiyat : '') + '</span></div>' +
                        ' <span class="map-tour-price">' + filtered.keyNotExist[i].fiyat + '</span>' +
                        '</div>' +
                        '<div class="map-tour-price_trans">' + (filtered.keyNotExist[i].fiyat != filtered.keyNotExist[i].fiyat_try + ' TL' ? filtered.keyNotExist[i].fiyat_try + ' TL' : '') + '</div>' +
                        '</div>' +
                        '</a>' +
                        '</li>'
                    )
                }
            }
        } else {
            for ( var i = 0; i < data.length; i++ ) {
                list.push('<li id="' + data[i].id + '" data-type="' + data[i].type + '" class="clearfix"><a href="#' + data[i].id + '" data-event-name="clickTracker" data-tracking="click" data-event-action="map" data-event-label="' + data[i].name + '"><span class="destination-name">' + data[i].name + '</span><span class="tour-size">( ' + data[i].count.tour + ' Tur )</span></a></li>')
            }
        }
        $element.html(list.join(''));
        var height     = parseInt($element.css('height'));
        var fullHeight = $element.css('height', 'auto').innerHeight();
        if ( fullHeight <= height ) {
            $element.next().find('a').addClass('passive');
        } else {
            $element.next().find('a').removeClass('passive');
        }
        $element.css('height', 'calc(100% - 37px)');
    })
}
$(function() {
    $(document).on('click', '#mapContents li.title[data-toggle-class]', function( e ) {
        e.preventDefault();
        $(this).parent().toggleClass($(this).data('toggleClass'));
    });
    $('#mapSearch').on('keyup', function() {
        var val = $(this).val();
        if ( val != '' ) {
            $($(this).data('target')).html(val);
        } else {
            $($(this).data('target')).html($($(this).data('target')).data('defaultText'));
        }
    }).on({
        ajaxStart : function() {
            $($(this).data('target')).addClass('search');
        },
        ajaxFinish : function() {
            $($(this).data('target')).removeClass('search');
        },
        focus : function() {
            $(this).css('opacity', 1);
            $($(this).data('target')).addClass('active').html($('#mapSearch').val());
        },
        blur : function() {
            $(this).css('opacity', 0);
            $($(this).data('target')).removeClass('active');
            $('#mapSearch').trigger('keyup');
        }
    });
    $('#goToContinents, .allclass').on('click', function( e ) {
        e.preventDefault();
        $(map).data('activeMap', '');
        handleGoHome();
    });
    $('[data-role=map-navigation] li').on('click', function( e ) {
        e.preventDefault();
        var id = $(this).attr('id');
        $(this).addClass('active');
        if ( $(map).data('activeMap') != id ) {
            $(map).data('activeMap', id);
            $('[data-role="mapContentList"]').html('');
            handleGoHome();
            map.clickMapObject(map.getObjectById(id));
        }
    });
    var nsDirectionTimeOut = 0;

    function nsFn() {
        var step      = 60;
        var direction = $(this).data('directions');
        if ( direction == 'up' ) {
            step *= -1;
        }
        var $target         = $(this).parent().prev();
        var currentPosition = $target.scrollTop();
        $target.getNiceScroll(0).doScrollTop((currentPosition + step), 500);
    }

    $('[data-role="nsScroll"] a').on('click', function( e ) {
        e.preventDefault();
        nsFn.call(this);
    }).mousehold(function() {
        nsFn.call(this);
    }).on('mouseleave', function() {
        clearTimeout(nsDirectionTimeOut);
    });
    $('[data-role=countries]').niceScroll(CTL.get('options').niceScroll.right);
    $('[data-role=cities]').niceScroll(CTL.get('options').niceScroll.right);
    $('[data-role=tours]').niceScroll(CTL.get('options').niceScroll.right);
    $(document).on('click', '[data-role="countries"] li a', function( e ) {
        e.preventDefault();
        var id = $(this).attr('href').replace('#', '');
        $('[data-role="mapContentList"]').html('');
        map.clickMapObject(map.getObjectById(id));
    });
    $(document).on('click', '[data-role="cities"] li a', function( e ) {
        var id = $(this).attr('href').replace('#', '');
        $('[data-role="cities"] li.active').removeClass('active');
        $(this).parent().addClass('active');
        e.preventDefault();
        setList({
            type : 'city',
            id : id
        })
    });

    $('[data-toggle=mobileMenuCollapse]').on('click', function( e ) {
        e.preventDefault();
        var elem = $(this).data('target');
        $('#' + elem).toggleClass('open');
    });

    $('[data-role=closeMapPanel]').on('click', function( e ) {
        e.preventDefault();
        var $target     = $($(this).data('target'));
        var removeClass = $(this).data('removeclass');
        $target.removeClass(removeClass);
    });
});

function mapMenu(id, data, lowestPriceText) {
    var elem = $('[data-bind="'+id+'"]');
    elem.find('[data-target="country"]').text(data.count.country);
    elem.find('[data-target="tour"]').text(data.count.tour);
    elem.find('[data-target="lowestPriceText"]').text(lowestPriceText);
}