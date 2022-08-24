
/*** CHANGING JQUERY INTO $ */
(function($) {
	






    /**** GSAP ****/

    
	gsap.registerPlugin(ScrollTrigger);

    gsap.to(".logo",{
        scrollTrigger:{
            trigger: ".logo",
            start: "2px top",
            end: "+=400 ",
            scrub: 2
           // markers: true
          
        },
        width: 100,
        duration: 3


    });


    console.log("ScrollTrigger", ScrollTrigger) ; 





})( jQuery );