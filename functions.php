<?php 

function loadFiles(){

    /*** STYLES ***/

    wp_enqueue_style('main_css', get_stylesheet_uri());
    // or wp_enqueue_style('randomName' , get_theme_file_uri('style.css'));
    wp_enqueue_style('CustomGoogleFonts' , '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    
    
    /*** SCRIPTS ***/
    
       /*** GSAP  ***/

       wp_register_script( 'gsap_main', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js", array(), false, true );
       wp_register_script( 'gsap_flip', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/Flip.min.js", array(), false, true );
       wp_register_script( 'gsap_scrolltrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js", array(), false, true );
       wp_register_script( 'gsap_observer', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/Observer.min.js", array(), false, true );
       wp_register_script( 'gsap_scrolltoplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollToPlugin.min.js", array(), false, true );
       wp_register_script( 'gsap_draggable', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/Draggable.min.js", array(), false, true );
       wp_register_script( 'gsap_easelplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/EaselPlugin.min.js", array(), false, true );
       wp_register_script( 'gsap_motionpathplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/MotionPathPlugin.min.js", array(), false, true );
       wp_register_script( 'gsap_pixiplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/PixiPlugin.min.js", array(), false, true );
       wp_register_script( 'gsap_textplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/TextPlugin.min.js", array(), false, true );
   
       wp_enqueue_script('gsap_main');
       wp_enqueue_script('gsap_flip');
       wp_enqueue_script('gsap_scrolltrigger');
       wp_enqueue_script('gsap_observer');
       wp_enqueue_script('gsap_scrolltoplugin');
       wp_enqueue_script('gsap_draggable');
       wp_enqueue_script('gsap_easelplugin');
       wp_enqueue_script('gsap_motionpathplugin');
       wp_enqueue_script('gsap_pixiplugin');
       wp_enqueue_script('gsap_textplugin');


    // wp_enqueue_script('randomScriptName' , get_theme_file_uri('urParth'), array('dependencies -> jquery'),'Version Number -> 1.0');
    wp_enqueue_script( 'main_js', get_theme_file_uri('/main.js'), array('jquery'), '0.1', true); 


 


}

add_action('wp_enqueue_scripts', 'loadFiles');
	

add_theme_support( 'post-thumbnails' );




?> 



