<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/detaliitrenuri.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/style.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/calatorii.css">
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
            <a href="/anunturi/showAnnouncements">Anunturi</a> <!--TODO-->
            <div class="dropdown">
                <button class="dropbtn">Meniu</button>
                <div class="dropdown-content">
                    <a href="/calatorii/setTripData">Calatorii</a> <!--TODO-->
                    <a href="/detaliitren">Detalii trenuri</a>
                    <a href="/faq/showAllFaqs">FAQ</a>
                </div>
            </div>
        </div>
        <div class="calatorii-container">
	        <div class="trip-setup">
		        <span>Plecare</span>
		        <select class="city-select" onchange="updateStartStation()" id="selectStartStation">
			        <option>---</option>
			        <?php foreach ( $data['cities'] as $city ): ?>
                        <option value="<?php echo $city['name'] ?>"><?php echo $city['name'] ?></option>
			        <?php endforeach; ?>
		        </select>
		        <span>Sosire</span>
		        <select class="city-select" onchange="updateEndStation()" id="selectEndStation">
			        <option>---</option>
			        <?php foreach ( $data['cities'] as $city ): ?>
                        <option value="<?php echo $city['name'] ?>"><?php echo $city['name'] ?></option>
			        <?php endforeach; ?>
		        </select>
		        <span>Data plecare</span>
		        <div class="date-select">
			        <select class="month-select" id="date-month" onchange="updateDate()">
				        <option>---</option>
				        <option>Ianuarie</option>
				        <option>Februarie</option>
				        <option>Martie</option>
				        <option>Aprilie</option>
				        <option>Mai</option>
				        <option>Iunie</option>
				        <option>Iulie</option>
				        <option>August</option>
				        <option>Septembrie</option>
				        <option>Octombrie</option>
				        <option>Noiembrie</option>
				        <option>Decembrie</option>
			        </select>
	                <select class="day-select" id="date-day" onchange="updateDate()">
		                <option>---</option>
		                <?php for ( $i = 1; $i <= 31; $i ++ ): ?>
                            <option value='<?php echo $i ?>'><?php echo $i ?></option>
		                <?php endfor; ?>
			        </select>
                    <div class="escale">
                        <h2>Escale</h2>
                        <select class="city-select" id="escala-oras">
			            <option>---</option>
	                        <?php foreach ( $data['cities'] as $city ): ?>
                                <option value="<?php echo $city['name'] ?>"><?php echo $city['name'] ?></option>
	                        <?php endforeach; ?>
		                </select>
                        <button type="button" onclick="addCity()">Adauga escala</button>
                    </div>
                    <div>
                        <ul id="lista-escale"></ul>
                    </div>
				</div>
	        </div>
	        <div class="trip-details">
		        <span class="details-title">Detalii calatorie:</span>
		        <div class="detail-row">
		            Plecare:
		            <span class="trip-detail-item" id="startStation">---</span>
		        </div>
		        <div class="detail-row">
		            Sosire:
		            <span class="trip-detail-item" id="endStation">---</span>
		        </div>
		        <div class="detail-row">
			        Escale:
			        <span class="trip-detail-item" id="detalii-escala">-</span>
		        </div>
		        <div class="detail-row">
			        Data plecare:
			        <span class="trip-detail-item" id="leaveDate">---</span>
		        </div>
		        <button type="button" class="trip-search-button" onclick="searchTrain()">Cauta tren</button>
                <div class="compare-container">
                    <span>Compara rute</span>
                    <select style="width: 100px; margin: 5px" id="compare-city_1">
			            <option>---</option>
	                    <?php foreach ( $data['cities'] as $city ): ?>
                            <option value="<?php echo $city['name'] ?>"><?php echo $city['name'] ?></option>
	                    <?php endforeach; ?>
                    </select>
                    <select style="width: 100px; margin: 5px" id="compare-city_2">
			            <option>---</option>
	                    <?php foreach ( $data['cities'] as $city ): ?>
                            <option value="<?php echo $city['name'] ?>"><?php echo $city['name'] ?></option>
	                    <?php endforeach; ?>
                    </select>
                    <br/>
                    <span>Compara cu anul:</span>
                    <select id="compare-year">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                    <button type="button" onclick="compareRoutes()">Compara</button>
                </div>
	        </div>
        </div>
        
        <div id="mask" class="mask"></div>
        <div id="active-mask" class="active-mask">
            <span>Cauta...</span>
            <div class="mask-loading-container">
                <div id="1" class="mask-loading active-loading-mask"></div>
                <div id="2" class="mask-loading"></div>
                <div id="3" class="mask-loading"></div>
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
    
</body>
	<script>
		function updateStartStation () {
            document.getElementById( 'startStation' ).innerText = document.getElementById( 'selectStartStation' ).value;
        }

        function updateEndStation () {
            document.getElementById( 'endStation' ).innerText = document.getElementById( 'selectEndStation' ).value;
        }

        function updateDate () {
            var month = document.getElementById( 'date-month' ).value;
            var day = document.getElementById( 'date-day' ).value;
            if ( month !== '---' && day !== '---' ) {
                document.getElementById( 'leaveDate' ).innerText = day + '-' + month + '-2018';
            }

        }

        function searchTrain () {
            var start = document.getElementById( 'startStation' ).innerText;
            var end = document.getElementById( 'endStation' ).innerText;
            var date = document.getElementById( 'leaveDate' ).innerText;
            var escale = document.getElementById( 'detalii-escala' ).innerText;
            if ( start === '---' || end === '---' || date === '---' ) {
                alert( 'Completati toate datele!' );
            }
            else {
                showMask();
                if ( escale !== '-' ) {
                    window.location = "http://localhost:8001/calatorii/getShortestPath?plecare=" + start + "&sosire=" + end + "&escale=" + escale;
                }
                else {
                    window.location = "http://localhost:8001/calatorii/getShortestPath?plecare=" + start + "&sosire=" + end;
                }
            }
        }

        function showMask () {
            document.getElementById( 'mask' ).style.display = 'block';
            document.getElementById( 'active-mask' ).style.display = 'block';

            setTimeout( function() {
                var currentMaskBlock = document.getElementsByClassName( 'active-loading-mask' )[0];
                var currentId = document.getElementsByClassName( 'active-loading-mask' )[0].id;
                currentMaskBlock.classList.remove( 'active-loading-mask' );
                if ( currentId < 3 ) {
                    var newId = parseInt( currentId ) + 1;
                    document.getElementById( newId ).classList.add( 'active-loading-mask' );
                }
                else {
                    document.getElementById( 1 ).classList.add( 'active-loading-mask' );
                }
                showMask();
            }, 500 );
        }

        function addCity () {
            if ( document.getElementById( 'escala-oras' ).value == '---' ) {
                alert( 'Selecteaza un oras valid!' )
            }
            else {
                var x = document.createElement( "LI" );
                var t = document.createTextNode( document.getElementById( 'escala-oras' ).value );
                x.appendChild( t );
                document.getElementById( 'lista-escale' ).appendChild( x );

                if ( document.getElementById( 'detalii-escala' ).innerText === '-' ) {
                    document.getElementById( 'detalii-escala' ).innerText = document.getElementById( 'escala-oras' ).value;
                }
                else {
                    document.getElementById( 'detalii-escala' ).innerText += ',' + document.getElementById( 'escala-oras' ).value;
                }
            }
        }

        function compareRoutes () {
            var city1 = document.getElementById( 'compare-city_1' ).value;
            var city2 = document.getElementById( 'compare-city_2' ).value;
            var year = document.getElementById( 'compare-year' ).value;

            console.log( city1 );
            console.log( city2 );
            console.log( year );
            
            if(city1 !== '---' && city2 !== '---'){
                window.location = "http://localhost:8001/calatorii/compareTrips?plecare=" + city1 + "&sosire=" + city2 + "&an=" + year;
            } else{
                alert('Alege o ruta valida!');
            }
        }
	</script>
    
    <style>
        .escale {
            padding-top : 1%;
        }

        .compare-container {
            padding-top : 4%;
        }
    </style>
</html>
