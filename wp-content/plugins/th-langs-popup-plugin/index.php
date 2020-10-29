<?php
/*
* Plugin Name: Th Langs plugin
* Plugin URI: http://localhost/3semester/storyscaping
* Description: This is a Pop up plugin to get the users attention and connect them with their interests for Th Langs based on HTML5, CSS, JS and PHP
* Version: 1.1
* Author: Philip Malan
* Author URI: http://localhost/3semester/storyscaping
* License: GPL2
*/


function multi_steps_form ()
{
     $content = '';
    $content .= '<div id="overlay">';
    $content .= '</div>';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<form id="regForm" action=" ">';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvad er dine interesser?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Musik</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Sport</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Økonomi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Psykologi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Kemi</button>';
    
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Hvad vil du gerne lave i fremtiden?</h3>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Noget med mennesker</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Handel og okonomi</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Mad</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Bruge min hænder</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Jeg ved det ikke</button>';
    $content .= '</div>';
    
    $content .= '<div class="tab">';
    $content .= '<h3 id="headline-text">Har du svært ved at finde den rigtige studieretning?</h3>';
    $content .= '<p>Skriv din mail og modtag en skræddersyet studieretning til dine interesser.</p>';
    $content .= '<p><input placeholder="Fornavn..." oninput="this.className = "></p>';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Skriv din email her..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
    $content .= '<button type="button" id="nextBtn" class="submitbtn" onclick="nextPrev(1)">Send mig spændnene tilbud</button>';
    $content .= '</div>';
    
    $content .= '<div style="overflow:auto;">';
    $content .= '<div style="float:right;">';
   /* $content .= '<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>';
    $content .= '<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>'; */
    $content .= '</div>';
    $content .= '</div>';
    
    $content .= '<div style="text-align:center;margin-top:40px;">';
    $content .= '<span class="step"></span>';
    $content .= '<span class="step"></span>';
    $content .= '<span class="step"></span>';
    $content .= '</div>';
    
    $content .= '</form>';
  	$content .= '</div>';
    
    return $content;
}

/*
function lets_go_slide1 ()
{
     $content = '';
    $content .= '<div class="first-slide">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="slide-headline">Hvad kan du godt lide?</h3>';
  	$content .= '</section>';
    $content .= '<section class="hobbies">';
    $content .= '<div>';
 	$content .= '<input type="submit" value="Musik" name="submitBtn" id="submitBtn1">';
    $content .= '</div>';
    $content .= '<div>';
 	$content .= '<input type="submit" value="Sport" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Kemi" name="submitBtn" id="submitBtn3">';
    $content .= '</div>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

function lets_go_slide2 ()
{
     $content = '';
    $content .= '<div class="second-slide">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="slide-headline">Hvad kunne du godt tænke dig at lave i fremtiden?</h3>';
  	$content .= '</section>';
    $content .= '<section class="hobbies">';
    $content .= '<div>';
 	$content .= '<input type="submit" value="Noget med mennesker" name="submitBtn" id="submitBtn1">';
    $content .= '</div>';
    $content .= '<div>';
 	$content .= '<input type="submit" value="Handel og okonomi" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Byggehygge" name="submitBtn" id="submitBtn3">';
    $content .= '</div>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

function lets_go_slide2 ()
{
     $content = '';
    $content .= '<div class="last-slide">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="slide-headline">Skriv din mail og modtag den helt rigtige linje til dig.</h3>';
    $content .= '<p id="popup-text"> kasf kja sdfkj baksdfj kjasd fkl aklsdfbnlaksdf laksf klasd flaksd fasf.</p>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Enter your email here..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Welcome TO </h3>';
    $content .= '<img id="logo" src=" '.plugins_url("th-langs-popup-plugin/img/logo.png").' " ';
    $content .= 'alt="Cheers Logo">';
  	$content .= '<h5 id="tilmeld">Sign up for our weekly partyvibes</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Enter your name here..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="LET THE GAME BEGIN!" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="button" value="No, I\'m boring" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}
*/

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_th-form-popup','multi_steps_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('th-langs-popup-plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('th-langs-popup-plugin/js/script.js'), array('jquery'), null, true);
    }

?>
