$(document).ready(function(){   
    //Marquee effects
    $('.marquee').marquee({
        //If you wish to always animate using jQuery
        allowCss3Support: true,
        
        //works when allowCss3Support is set to true
        css3easing: 'linear',
        
        //requires jQuery easing plugin. Default is 'linear'
        easing: 'linear',
        
        //pause time before the next animation turn in milliseconds
        delayBeforeStart: 1000,
        
        //'left', 'right', 'up' or 'down'
        direction: 'left',
        
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: false,
        
        //speed in milliseconds of the marquee
        duration: 5500,
        
        //gap in pixels between the tickers
        gap: 20,
        
        //on cycle pause the marquee
        pauseOnCycle: false,

        //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
        pauseOnHover: true,
        
        //the marquee is visible initially positioned next to the border towards it will be moving
        startVisible: false
    });

    //hamburger icon and menu control for mobile devices
    $(".hamburger").click(function(){
        $(this).toggleClass("change");
        $(".navListMobile").toggle(500);
    });
    //Enable Swipe Left/Right action for carousel on mobile devices
    /*$(".carousel-inner").swiperight(function(){  
        $(this).parent().carousel('prev');  
    });  
    $(".carousel-inner").swipeleft(function(){  
        $(this).parent().carousel('next');  
    });*/
});
