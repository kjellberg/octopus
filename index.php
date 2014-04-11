<?php $octopus_load_start=microtime(true); 

/* 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 *
 * 
 *      .---.    ,--, _______  .---.  ,---.  .-. .-.   .---. 
 *     / .-. ) .' .')|__   __|/ .-. ) | .-.\ | | | |  ( .-._)
 *     | | |(_)|  |(_) )| |   | | |(_)| |-' )| | | | (_) \   
 *     | | | | \  \   (_) |   | | | | | |--' | | | | _  \ \  
 *     \ `-' /  \  `-.  | |   \ `-' / | |    | `-')|( `-'  ) 
 *      )---'    \____\ `-'    )---'  /(     `---(_) `----'  
 *     (_)                    (_)    (__)                    
 * 
 *     Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
 *     Duis vel orci a lectus porttitor blandit vel non metus. 
 *     Cras dolor nulla, tristique vel arcu a, porta condimentum tellus. 
 *     Pellentesque auctor dignissim diam.
 *  
 *     v 0.1 
 *  
 *     CREATED BY                 CREATED FOR
 *     Rasmus Kjellberg      	  You &
 *     Tamara Stojcic         	  Everyone
 *   
 *     www.octopuscms.info
 *
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
*/ 

global $octopus;

error_reporting(E_ALL);
ini_set('display_errors', '1');

define( 'webdir', dirname(__FILE__) );
define( 'coredir', __DIR__ . '/system');
define( 'customdir', webdir . '/sites');

include(coredir . '/init.php');
