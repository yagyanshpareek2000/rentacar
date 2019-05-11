
function startIntro(){

    intro.onbeforechange(function(targetElement) {
        if($(targetElement).attr('id') == 'sorgulamaDegistir' || $(targetElement).attr('id') == 'ucunuzuBelirleyin' ) {
            $('#slider').addClass('introjs-hack');
            $('#content').addClass('introjs-hack');
        } else {
            $('#slider').removeClass('introjs-hack');
            $('#content').removeClass('introjs-hack');
        }
    });
    intro.onafterchange(function(){
        if(this._currentStep == 0){
            $('.introjs-prevbutton').hide();
        }else {
            $('.introjs-prevbutton').show();
        }
        if (this._introItems.length - 1 == this._currentStep || this._introItems.length == 1) {
            $('.introjs-skipbutton').show();
            $('.introjs-nextbutton').hide();
        } else {
            $('.introjs-skipbutton').hide();
            $('.introjs-nextbutton').show();
        }
    });
    intro.setOptions({
        steps: [
            {
                element: '#sorgulamaDegistir',
                intro: 'Sorgulama yaparak ulaştığınız tur detay sayfamızın bu bölümünde sorgulama tercihinize göre en düşük fiyatlı turumuzu listeledik. Unutmayınız ki tur tutarınızı belirleyen kriterler tur tarihi, otel seçiminiz ve havayolu şirketi/ uçuşlardır. ',
                position: 'bottom'
            },
            {
                element: '#ucunuzuBelirleyin',
                intro: '<p>Burası ilginizi çekecek!</p>Seçiminize göre en düşük fiyatlı havayolu ve uçuşu turunuza dahil ettik. Eğer farklı havayolu veya farklı saatler sizin için daha uygun ise bunu görmek için "Uçuş değiştir" bölümümüzden tüm havayollarının uçuş alternatiflerini ve liste fiyatımız üzerinden ne kadar fark ödeyeceğinizi görebilir ve tercih edebilirsiniz.',
                position: 'left'
            },
            {
                element: $('.percent-responsive')[0],
                intro: '<p>İşte burası!.. Toplam tur tutarınızı burada görüyorsunuz!</p>Şimdi tur süresince konaklamak istediğiniz oteli seçerek satın alma işlemine devam edebilirsiniz. Unutmayınız! Bir önceki adımda sizin için uygun uçuşları seçmiş veya bizim belirlediğimiz uçuşu kullanmayı tercih etmiştiniz.  Bu adımda tüm seçimlerinizi kapsayan bir satın alma adımına ulaşmış olursunuz. Otellerde listelenen fiyatların sadece otelin değil toplam turunuzun tutarı olduğunu unutmayınız!',
                position: 'right'
            }
        ],
        nextLabel : 'İleri',
        prevLabel : 'Geri',
        doneLabel : 'Bitir',
        skipLabel : 'Bitir'
    });
    intro.start();
    $('.introjs-skipbutton').hide();
}
$(function(){
    "use strict";
    if(false){
        if($.cookie('cafeSettings')){
            var siteSettings = JSON.parse($.cookie('cafeSettings'));
        } else {
            var siteSettings = {
                intro : {}
            };
        }
        if(siteSettings.intro.tourPage == undefined){
            window.introTimeout = setTimeout(function () {
                swal({
                        title : '3 adımda<br> size kolay rezervasyon için sitemizi anlatmamıza izin verin.',
                        text : '',
                        showCancelButton : true,
                        confirmButtonText : "Tamam",
                        confirmButtonColor: "#67C570",
                        cancelButtonText : "Daha sonra",
                        closeOnConfirm : false,
                        closeOnCancel : false,
                        // customClass : 'confirm'
                    },
                    function ( isConfirm ) {
                        if ( isConfirm ) {
                            startIntro();
                            siteSettings.intro = {
                                tourPage : true
                            };
                            swal.close();
                            $.cookie('cafeSettings', JSON.stringify(siteSettings));
                        } else {
                            siteSettings.intro = {
                                tourPage : false
                            };
                            swal.close();
                            $.cookie('cafeSettings', JSON.stringify(siteSettings));
                        }
                    }
                )
            }, 8000);
        }
    }

});

