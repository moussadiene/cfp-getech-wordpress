<?php

/* Get the right buttons class */
if(!function_exists('coco_social_get_class')){
	function coco_social_get_class($number,$size){
		
		$class = '';
		
		switch($size){
			case 'auto_width':
				return 'auto_width';
			break;
			case 'big_first':
				return 'big_first';
			break;
			default:
				$class = '';
			
		}
		if($size == 'auto_width')
			return 'auto_width';
		
		switch($number){
			case 1:
				//$class='full';
				$class='halfs';
			break;
			case 2:
				$class='halfs';
			break;
			case 3:
				$class='thirds';
			break;
			case 4:
				$class='fourths';
			break;
			case 5:
				$class='fifths';
			break;
			case 6:
				$class='sixths';
			break;
			case 7:
				$class='sevenths';
			break;
			default :
				$class='';
		}
		return $class;
	}
}

// Thanks to https://gist.github.com/jonathanmoore/2640302
if(!function_exists('coco_social_get_count')){
	function coco_social_get_count($network_name){
		global $post;
		
		$post_url = get_permalink($post->ID);
		// Post with a lot of shares for testing purpose (read it by the way, it's awesome !)
		//$post_url = "http://conversionxl.com/pricing-experiments-you-might-not-know-but-can-learn-from/";
		
		switch($network_name){
			case 'facebook' :
				$count = coco_social_facebook_count($post_url, $post->ID);
			break;
			case 'twitter' :
				$count = coco_social_twitter_count($post_url, $post->ID);
			break;
			case 'googleplus' :
				$count = coco_social_googleplus_count($post_url, $post->ID);
			break;
			case 'linkedin' :
				$count = coco_social_linkedin_count($post_url, $post->ID);
			break;
			case 'pinterest' :
				$count = coco_social_pinterest_count($post_url, $post->ID);
			break;
			case 'viadeo' :
				$count = coco_social_viadeo_count($post_url, $post->ID);
			break;
			default :
				$count = '';
		}
		
		$count = '<span class="coco-count">'.$count.'</span>';
		
		if($network_name=='email')
			$count = '';
		
		return $count;
	}	
}

/* Get Facebook Share Count */

if(!function_exists('coco_social_facebook_count')){
	function coco_social_facebook_count($url , $id){
		
		$refresh = coco_social_get_refresh_count(); 
		
		$key = "fb-".$id;
		$count = '0';
		
                ###
                # For test only 
                ###
		
                #delete_transient($key); // for testing only
                #$url = 'https://nofi.fr/2018/06/la-faune-africaine-menacee-de-disparition/54433';
                
		if(get_transient($key) === false){
                        
                        $fbAppId = get_option('cocosocial_facebook_app_id');
                        $fbAppSecret = get_option('cocosocial_facebook_app_secret');
                        $fbToken = 'access_token='.$fbAppId.'|'.$fbAppSecret;
                        
                        $url = 'https://graph.facebook.com/v2.10?fields=engagement&'.$fbToken.'&id='.$url;
                        $response = wp_remote_get($url);
                        
			if ( !is_wp_error( $response ) ) {
                                
    				// Convert json response into php array
				$response = json_decode($response['body'],true);
                                
                                #var_dump($response); // Only for test
				
				$count = isset($response['engagement']['share_count']) ? coco_social_convert_count($response['engagement']['share_count']) : '0';
				
			}
			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}

/* Get Twitter Share Count */

if(!function_exists('coco_social_twitter_count')){
	function coco_social_twitter_count($url , $id){
		
            return '';
		$refresh = coco_social_get_refresh_count(); 
		
		$key = "tw-".$id;
		$count = '0';
		
		#delete_transient($key); // for testing only
		
		if(get_transient($key) === false){
		

                        $twtAccessToken = get_transient( 'twitter_access_token' );
                        $twtAccessToken = ( empty( $twtAccessToken ) ) ? get_twitter_access_token() : $twtAccessToken;
                        
                        $url = 'https://api.twitter.com/1.1/search/tweets.json?q='.$url.'&count=100';
			
                        if(is_super_admin()){
                            #echo $twtAccessToken;
                        }
                        
                        $response = wp_remote_get($url, array(
                            'headers'   => array(
                                'Authorization'     => 'Bearer ' . $twtAccessToken,
                                'Content-Type'      => 'application/x-www-form-urlencoded;charset=UTF-8'
                            )
                        ));
			
                        #if(is_super_admin()) var_dump (json_decode ($response['body'], true));
			if ( !is_wp_error( $response ) ) {
			
				// Convert json response into php array
				$response = json_decode($response['body'], true);
				
				$count = isset($response['search_metadata']['count']) ? coco_social_convert_count($response['search_metadata']['count']) : '0';
			}
			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}


if(!function_exists('get_twitter_access_token')){

    function get_twitter_access_token(){
        
        $twtApiKey = get_option('cocosocial_twitter_api_key');
        $twtApiSecret = get_option('cocosocial_twitter_api_secret');
        $twtBearerToken = base64_encode($twtApiKey.':'.$twtApiSecret);

        $request = wp_remote_post('https://api.twitter.com/oauth2/token', array(
            'headers' => array(
                'Authorization' => 'Basic ' . $twtBearerToken,
                'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
            ),
            'body' => 'grant_type=client_credentials'
            #'httpversion' => '1.1'
        ));
        
        $token = (array)json_decode( $request['body'] );
        
        if(isset($token['access_token'])){
            set_transient('twitter_access_token', $token['access_token']); 
            return $token['access_token'];
        }
        
        return false;
    }
    
}


/* Get Google+ Share Count */

if(!function_exists('coco_social_googleplus_count')){
	function coco_social_googleplus_count($url , $id){
		
		$refresh = coco_social_get_refresh_count(); 
		
		$key = "gp-".$id;
		$count = '0';
		
                #$url = 'http://www.slate.fr/story/127901/hanouna-delormeau-perversion-narcissique'; //Test url 
		
                //delete_transient($key); // for testing only
		
		if(get_transient($key) === false){
		
			// Thanks to http://bradsknutson.com/blog/get-google-share-count-url/
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
			$response = curl_exec ($curl);
			curl_close ($curl);
			
			if ( !is_wp_error( $response ) ) {
				
				// Convert json response into php array
				$json = json_decode($response, true);
				$response = $json[0]['result']['metadata']['globalCounts']['count'];
				
				$count = isset($response) ? coco_social_convert_count($response) : '0';
			}
			
			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}

/* Get Linkedin Share Count */

if(!function_exists('coco_social_linkedin_count')){
	function coco_social_linkedin_count($url , $id){
		
		$refresh = coco_social_get_refresh_count();
		
		$key = "lk-".$id;
		$count = '0';
		
                //Test url 
                #$url = 'http://www.latribune.fr/technos-medias/internet/linkedin-lance-un-calculateur-de-salaire-613238.html';
		
                #delete_transient($key); // for testing only
		
		if(get_transient($key) === false){
		
			$url = 'http://www.linkedin.com/countserv/count/share?format=json&url='.$url;
			$response = wp_remote_get($url);
			
			if ( !is_wp_error( $response ) ) {
			
				// Convert json response into php array
				$response = json_decode($response['body'], true);
				
				$count = isset($response['count']) ? coco_social_convert_count($response['count']) : '0';
			}

			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}

/* Get Pinterest Share Count */

if(!function_exists('coco_social_pinterest_count')){
	function coco_social_pinterest_count($url , $id){
		
		$refresh = coco_social_get_refresh_count();
		
		$key = "pt-".$id;
		$count = '0';
		
		//delete_transient($key); // for testing only
		
		if(get_transient($key) === false){
		
			$url = 'http://api.pinterest.com/v1/urls/count.json?url='.$url;
			$response = wp_remote_get($url);
			
			if ( !is_wp_error( $response ) ) {

				$response = $response['body'];
				
				$response = str_replace("receiveCount(","",$response);
				$response = substr($response,0, -1);
				
				// Convert json response into php array
				$response = json_decode($response, true);
			
				$count = isset($response['count']) ? coco_social_convert_count($response['count']) : '0';
			
			}
			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}

/* Get Viadeo Share Count */

if(!function_exists('coco_social_viadeo_count')){
	function coco_social_viadeo_count($url , $id){
		
		$refresh = coco_social_get_refresh_count(); 
		
		$key = "vd-".$id;
		$count = '0';
		
		#delete_transient($key); // for testing only
		
		if(get_transient($key) === false){
			
			// Thanks to https://stackoverflow.com/questions/25115109/how-get-share-count-on-viadeo-link
			$url = 'https://api.viadeo.com/recommend?url='.$url.'&format=json';
			$response = wp_remote_get($url);
			
			if ( !is_wp_error( $response ) ) {
			
				$response = json_decode($response['body'], true);
				$count = isset($response['count']) ? coco_social_convert_count($response['count']) : '0';
			}
			
			// Set transient for a custom duration or 1 hour by default
			set_transient($key, $count, apply_filters('coco_social_counter_refresh', $refresh * 60));
		}
		return get_transient($key);
	}
}

/* Convert big numbers in more digest ones */
// Thanks to https://stackoverflow.com/questions/8549463/show-1k-instead-of-1-000

if(!function_exists('coco_social_convert_count')){
	function coco_social_convert_count($coco_count){
	    
	    $coco_count = number_format($coco_count);
		$coco_input_count = substr_count($coco_count, ',');
	    
	    if($coco_input_count != '0'){
	    
	        if($coco_input_count == '1'){
	        
	        	// Share count between 1000 and 999999 shares
	        	$coco_next = substr($coco_count, -3, 1);
	            return substr($coco_count, 0, -4) . ( $coco_next != '0' ? '.' . $coco_next : '' ) . 'k';
	            
	        } else if($coco_input_count == '2'){
	        
	        	// Share count is more than 1000000
	        	$coco_next = substr($coco_count, -7, 1);
	            return substr($coco_count, 0, -8) . ( $coco_next != '0' ? '.' . $coco_next : '' ) . 'm';
	            
	        } else if($coco_input_count == '3'){
	        
	        	// That's a lot of shares !
	        	$coco_next = substr($coco_count, -10, 1);
	            return substr($coco_count, 0, -12) . ( $coco_next != '0' ? '.' . $coco_next : '' ) . 'b';
	            
	        } else {
	        
	            return '0';
	            
	        }
	    } else {
	    
	        return $coco_count;
	    }
	}
}


/* Get refresh count */
if(!function_exists('coco_social_get_refresh_count')){
	function coco_social_get_refresh_count(){
	
		if(get_option('cocosocial_counter_refresh'))
			return intval(esc_html(get_option('cocosocial_counter_refresh')));
		else
			return 60;		
	}
}	
