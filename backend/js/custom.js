 $(document).ready(function(){
        var boxWidth = "500px";
           $(".slide-left").click(function(){
             $(".box").css("box-shadow","0px 0px 0px 0px #000"); 
            $(".box").animate({
                width: 0
            });
        });
        $(".slide-right").click(function(){
             $(".box").css("box-shadow","-1px 1px 5px 5px #000"); 
             $(".box").animate({
                width: boxWidth
            });
          $(".box-inner").animate({
                 width: boxWidth
            });
        });
    });