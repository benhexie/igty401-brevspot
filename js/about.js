$(window).scroll(()=>{
    console.log(window.scrollY)
    var scrollPosition = window.scrollY; // Get the current scroll position

  
    var teamHeight=874;
    var teamHeight2=1432;
    var teamHeight3=2186;


    if(scrollPosition>=teamHeight){
        $(".about").addClass("about_active")
        $(".about").removeClass("about")
    }

    if(scrollPosition>=teamHeight2){
        $(".contact").addClass("contact_active")
        $(".contact").removeClass("contact")
    }

    if(scrollPosition>=teamHeight3){
        $(".news_card").addClass("news_card_active")
        $(".news_card").removeClass("news_card")
    }

   

})