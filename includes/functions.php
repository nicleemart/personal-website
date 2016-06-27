<?php 

function greeting(){
date_default_timezone_set("America/Chicago");
				$Hour = date("G");
				if ( $Hour >= 5 && $Hour <= 10 ) {
    			return "Mornin', sunshine.";} 
    			else if ( $Hour >= 11 && $Hour <= 13 ) {
    			return "Lunch break!";}
    			else if ( $Hour >= 13 && $Hour <= 18 ) {
    			return "Why, hello there.";}
    			else if ( $Hour >= 19 || $Hour <= 4 ) {
    			return "Meow.";} 
}
?>