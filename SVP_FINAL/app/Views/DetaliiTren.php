<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/detaliitrenuri.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <title>TW-Proiect</title>
</head>
<body>
    
    <div class="top-header"></div>
    <div class="content-base">
        <div class="logo"></div>
        <div class="navbar">
            <a href="/">Acasa</a> <!--TODO-->
            <a href="anunturi/showAnnouncements">Anunturi</a> <!--TODO-->
            <div class="dropdown">
                <button class="dropbtn">Meniu</button>
                <div class="dropdown-content">
                    <a href="/calatorii/setTripData">Calatorii</a> <!--TODO-->
                    <a href="detaliitren">Detalii trenuri</a>
                    <a href="faq/showAllFaqs">FAQ</a>
                </div>
            </div>
        </div>
        <div class="DetaliiTrenuri-container">
            <div class="DetaliiTrenuri-container-title"><strong>Detalii Trenuri</strong></div>
           
            
             <div class="input-box">
                     <input placeholder="Introdu numar.." title="Vezi detalii" id="input">
                    <button type="button" class="Search-button" id="button" onclick="function Unsplash()">Cauta! </button>
             </div>
         <div>
               <div style="margin:0 auto; justify-content: center; padding:0 auto;">
            <?php
	            $count        = 0;
	            $unsplash_url = 'https://api.unsplash.com/search/photos?query=Trains&per_page=25&client_id=' . "9c50b4f849d34f2d35cc81cd3b469742badacdb899c393371092937dae7ed977";
	            $maps_json    = file_get_contents( $unsplash_url );
	            $maps_array   = json_decode( $maps_json, true );
	
	            $random = mt_rand( 0, 15 );
	            $random = "$random";
	            $source = $maps_array['results'][ $random ]['urls']['regular'];
	            echo '<img style="heigth:800px; width:800px;"
	                    src ="'
	                 . $source .
	                 '"alt=""/>';
            ?>
            </div>
         </div>
        </div>
       
        
        <div class="footer">
            <div class="footer-item">
                <h3>Contact</h3>
                <div class="contact">
                    <div>
                        <strong>
                            Telefon
                        </strong>
                        <div class="phone-email-hours">
                            <div>0740123123</div>
                            <div>0740666666</div>
                            <div>0740321321</div>
                        </div>
                    </div>
                        <div style="padding-top: 10px;">
                        <strong>
                            Email
                        </strong>
                        <div class="phone-email-hours">
                            <div>vlaiduc.rares@yahoo.com</div>
                            <div>george.popa@yahoo.com</div>
                            <div>biciclentiu@yahoo.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="show-hr-mobile"/>
            <div class="footer-item">
                <div class="program">
                    <h3>Program</h3>
                    <div style="text-align: center;">
                            <strong>Luni:</strong>
                            10<sup>00</sup> - 21<sup>00</sup><br/>
                            <strong>Marti:</strong>
                            10<sup>00</sup> - 21<sup>00</sup><br/>
                            <strong>Miercuri:</strong>
                            10<sup>00</sup> - 21<sup>00</sup><br/>
                            <strong>Joi:</strong>
                            10<sup>00</sup> - 21<sup>00</sup><br/>
                            <strong>Vineri:</strong>
                            10<sup>00</sup> - 21<sup>00</sup><br/>
                            <strong>Sambata, Duminica:</strong>
                            Inchis
                    </div>
                </div>
            </div>
            <hr class="show-hr-mobile"/>
            <div class="footer-item">
                <div class="newsletter">
                    <h3>Newsletter & Social Media</h3>
                    <input type="email" style="width: 70%; margin:0 auto;" placeholder="Email...">
                    <button type="button" class="subscribe-btn">Aboneaza-te</button>
                    <div style="flex-direction: row;display: inline-flex;justify-content: center;">
                        <div>
                            <a href="#" class="fa fa-facebook"></a></div>
                        <div>
                            <a href="#" class="fa fa-google"></a></div>
                        <div>
                            <a href="#" class="fa fa-twitter"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
                document.getElementById( "button" ).addEventListener( "click", function( event ) {
                    let valoare;
                    valoare = document.getElementById( "input" ).value;
                    console.log( valoare );
                    let url = `http://localhost:8001/detaliitren/showTrainDetails?train=${valoare}`;
                    window.location = url;

                } )
    </script>
	<?php
		function Unsplash() {
			
			
			$unsplash_url = 'https://api.unsplash.com/search/photos?query=Trainsx'
			                .
			                '&per_page=25&client_id=' . "9c50b4f849d34f2d35cc81cd3b469742badacdb899c393371092937dae7ed977";
			$maps_json    = file_get_contents( $unsplash_url );
			$maps_array   = json_decode( $maps_json, true );
			
			$random = mt_rand( 0, 25 );
			$random = "$random";
			$source = $maps_array['results'][ $random ]['urls']['regular'];
			echo '<img src ="'
			     . $source .
			     '"alt=""/>';
			
		}
	
	?>
    
</body>
</html>
