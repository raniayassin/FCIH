/*global console*/
/*global $ */
var audio = document.getElementById("my_aud");
var toTop = document.getElementById('to-top');
var ser;
var window_scroll;
var sential=0;
var pause = document.getElementById("pause");
var play = document.getElementById("play");
var vid_1 = document.getElementById("vid");
var t4 = document.getElementById("4");
var con_vid=0;
var screen_height = window.innerHeight-500;
function fra() {
    
    "use strict";
    window_scroll = window_scroll - Math.floor(Math.random() * 80);
    window.scrollTo(0, window_scroll);
    if (window_scroll <= 0) {
        clearInterval(ser);
    }
}

window.onscroll = function () {
    "use strict";
    
   // window_scroll = window.pageYOffset;
};

toTop.onclick = function () {
    "use strict";
    ser = setInterval(fra, 1);
};

t4.onclick = function () 
{
    "use strict";
    
    console.log("goof");
    vid_1.style.opacity =1;
    vid_1.play();
    audio.pause();
    pause.style.opacity = 0;
    pause.style.zIndex  = 888;
    play.style.opacity = 1;
    play.style.zIndex = 999;
}

var window_top = window.pageYOffset;
var t1 = document.getElementById("1");
var t2 = document.getElementById("2");
var t3 = document.getElementById("3");
var t5 = document.getElementById("5");
var t6 = document.getElementById("6");
var t7 = document.getElementById("7");
var t8 = document.getElementById("8");
var t9 = document.getElementById("9");
var t10 = document.getElementById("10");
var t11 = document.getElementById("11");
var counter = 0;
var main_num = 500 - screen_height;
var start = t1.scrollHeight;
console.log(start);
var count = document.getElementById("count");
$(window).on("load",function(){
    $("div.loding-overlay").fadeOut(6000,function(){
    $("body").css({overflow:"auto",overflowX:"hidden"});});
});

pause.onclick = function()
{
    "use strict";
    audio.pause();
    this.style.opacity = 0;
    this.style.zIndex  = 888;
    play.style.opacity = 1;
    play.style.zIndex = 999;
}
play.onclick = function () 
{
    "use strict";
    audio.play();
    this.style.opacity = 0;
    this.style.zIndex  = 888;
    pause.style.opacity = 1;
    pause.style.zIndex = 999;
    vid_1.pause();
    if(vid_1.paused)
        {
            vid_1.style.opacity =0;
        }
}

$(document).ready(function(){
    window.onscroll = function (){
         window_top = window.pageYOffset;
        if(window_top >= (t1.scrollHeight)-main_num && sential==0)
            {
        console.log(window_top);
                $(".anmi_1").addClass("bounceInLeft");
                sential++;
            }
        if(window_top >= (t2.scrollHeight-500)-main_num && sential==1)
            {
                $(".anmi_2").addClass("bounceInRight");
                sential++;
                
            }
        if(window_top >= (t3.scrollHeight+400)-main_num && sential==2)
            {
                $(".anmi_3").addClass("fadeInLeftBig");
                sential++;
            }
        if(window_top >= (t4.scrollHeight+400)-main_num && sential==3)
            {
                $(".anmi_4").addClass("fadeInRightBig");
                sential++;
            }
        if(window_top >= (t5.scrollHeight+500)-main_num && sential==4)
            {
                $(".anmi_5").addClass("zoomInLeft");
                sential++;
                audio.play();
                pause.style.opacity = 1;
            }
        if(window_top >= (t6.scrollHeight+500)-main_num && sential==5)
            {
                $(".anmi_6").addClass("rotateInUpRight");
                sential++;
            }
        if(window_top >= (t7.scrollHeight+1000)-main_num && sential==6)
            {
                $(".anmi_7").addClass("fadeIn");
                sential++;
            }
        if(window_top >= (count.scrollHeight+2246)-main_num && counter==0 && sential==7)
            {
                $(".t2").countTo();
                $(".t1").countTo();
                $(".t3").countTo();
                $(".t4").countTo();
                counter++;
                sential++;
                
            }
        if(window_top >= (t8.scrollHeight*9)-main_num && sential==8)
            {
                $(".anmi_8").addClass("fadeInDown");
                $(".anmi_9").addClass("fadeInUp");
                sential++;
            }
         if(window_top >= (t9.scrollHeight+3850)-main_num && sential==9)
            {
                $(".anmi_10").addClass("fadeInLeft");
                $(".anmi_11").addClass("bounceInUp");
                $(".anmi_12").addClass("fadeInRight");
                sential++;
            }
        if(window_top >= (t10.scrollHeight+3700)-main_num && sential==10)
            {
                $(".anmi_13").addClass("bounceInUp");
                sential++;
            }
        if(window_top >= (t11.scrollHeight+3700)-main_num && sential==11)
            {
                $(".anmi_14").addClass("bounceInLeft");
                $(".anmi_15").addClass("bounceInRight");
                sential++;
            }
        if (window.pageYOffset >= 300) {
        toTop.style.opacity = '1';
    } else if (window.pageYOffset <300) {
        toTop.style.opacity = '0';
    }
    window_scroll = window.pageYOffset;
    
        
    };
});