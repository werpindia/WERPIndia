//Blog arrangement using "Isotope" (only after all images/videos are loaded)
$(window).on("load",function(){
    $(".blogRow").isotope({
        itemSelector:'.blogColumn'
    });
});

$(document).ready(function(){
    //Removing extra spaces due to p tags in each article in blog list page
    let elem1=document.getElementsByClassName("articleLink");
    let len2=elem1.length;
    for(let i2=0;i2<len2;i2++){
        let elem2=elem1[i2].firstElementChild.children[1];
        if(elem2.innerHTML==""){
            elem2.parentNode.removeChild(elem2);
        }
    }
    
    //Prevent video overflow in blog list  
    /*let list=document.getElementsByClassName("articleVideo");
    let len=list.length;
    for(let i=0;i<len;i++){
        list[i].style.maxWidth=list[i].parentElement.offsetWidth+"px";
    }*/

    //Blog arrangement
    /*let elem=document.getElementsByClassName("blogColumn");
    let len1=elem.length;
    let i1;
    for(i1=0;i1<len1-1;i1++){
        //"firstElementChild" gives a.articleLink and then <article> after second time
        elem[i1].style.height=elem[i1].firstElementChild.firstElementChild.offsetHeight+33+"px";
    }
    if(i1>=0&&len1>=1){
        elem[i1].style.height=elem[i1].firstElementChild.firstElementChild.offsetHeight+33+"px";
    }*/
    
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

    //Login/SignUp Forms
    $(".signup").css("display", "none");
		$(".signbtn").click(function(){
			$("form").animate({ height:"toggle", opacity: "toggle"}, "slow");
		});
    $("#showhide").click(function(){
      var pass = $("#myinput");
      if (pass.attr("type") == "password") {
        pass.attr("type", "text");
      } else {
        pass.attr("type", "password");
      }
    });

    //Delete a post from "Pending" page
    $(".removePost").click(function(){
        let element=this;
        let id=this.id;
        let split_id=id.split("_");
        let deleteId=split_id[1];
        //AJAX
        $.ajax({
            url:'remove.php',
            type:'POST',
            data:{ id:deleteId },
            success:function(response){
              if(response == 1){
                // Remove article from HTML
                $(element).closest('div').css('background','tomato');
                $(element).closest('div').fadeOut(800,function(){
                    $(this).remove();
                });
                } else{
                    alert('Invalid ID.');
                }
            }
        });
    });

    //Approve a post from "Pending" page
    $(".approvePost").click(function(){
        let element=this;
        let id=this.id;
        let split_id=id.split("_");
        let approveId=split_id[1];
        //AJAX
        $.ajax({
            url:'approve.php',
            type:'POST',
            data:{ id:approveId },
            success:function(response){
              if(response == 1){
                // Remove article from HTML
                $(element).closest('div').css('background','tomato');
                $(element).closest('div').fadeOut(800,function(){
                    $(this).remove();
                });
                } else{
                    alert('Invalid ID.');
                }
            }
        });
    });

    //Enable Swipe Left/Right action for carousel on mobile devices
    /*$(".carousel-inner").swiperight(function(){  
        $(this).parent().carousel('prev');  
    });  
    $(".carousel-inner").swipeleft(function(){  
        $(this).parent().carousel('next');  
    });*/
});


function openSideNav() {
    document.getElementById("mySideNav").style.width = "250px";
}
function closeSideNav() {
    document.getElementById("mySideNav").style.width = "0";
}

function matchpass(){  
    var firstpassword=document.f1.password.value;  
    var secondpassword=document.f1.password2.value;   
    if(firstpassword==secondpassword){  
        return true;  
    }  
    else{  
        alert("your password must be same in both the field!");  
        return false;  
    }  
}
