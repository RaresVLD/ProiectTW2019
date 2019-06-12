<?php
		
		$location = $_GET["train"];
		$count = 0;
		$unsplash_url = 'https://api.unsplash.com/search/photos?query='
		                . $location .
		                '&per_page=25&client_id=' . "9c50b4f849d34f2d35cc81cd3b469742badacdb899c393371092937dae7ed977";
		$maps_json    = file_get_contents( $unsplash_url );
		$maps_array   = json_decode( $maps_json, true );
			
				$random = mt_rand(0,25);
				$random = "$random";
		$source       = $maps_array['results'][$random]['urls']['regular'];
		echo '<img src ="'
		     . $source .
		     '"alt=""/>';
			

?>
