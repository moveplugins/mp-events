<?php
/**
* Filter function ehich inserts the shortcode into the content
*/
function mp_events_the_content_filter( $content ){
	
	//if this is a single page
	if ( is_single() ){
		
		//If this post's content does NOT contains the shortcode to show event info already
		if ( strpos( $content, '[mp_event]' ) === false  && !current_theme_supports( 'mp_events' )) {
			
			//attach the mp_event shortcode to this content	 
			 return mp_events_single_event_shortcode() . $content;
			 
		}
	
	}
	//if not a single page
	else{
		return $content;	
	}
		
}
add_filter( 'the_content', 'mp_events_the_content_filter' );