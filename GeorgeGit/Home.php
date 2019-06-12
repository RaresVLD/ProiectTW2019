<!DOCTYPE html>


<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/style.css">
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/announcements.css">
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
                    <a href="/detaliitren">Detalii trenuri</a>
                    <a href="/faq">FAQ</a>
                </div>
            </div>
        </div>
        <div class="announcements-container">
            <div class="announcements-container-title"><strong>Anunturi</strong></div>
	        <?php foreach ( $data['announcements'] as $announcement ) : ?>
                <div class="announcements-item">
                    <a href="javascript:void(0)" class="announcements-item-title"><?php echo $announcement['title']; ?></a>
                    <div class="announcements-item-content"><?php echo $announcement['content'] ?></div>
                </div>
	        <?php endforeach; ?>

            <div>
                <a href="anunturi/showAnnouncements">
                    <button type="button" class="see-more-btn">Vezi mai mult..</button>
                </a>

            </div>

        </div>
        <div class="side-bar">
            <div class="side-bar-content">
                <img src="./app/Views/Utils/Images/calendar.jpg" width="250" height="225" onclick="resizer()" id="calendar"/>
            </div>
            <hr class="side-bar-line"/>
            <div class="side-bar-content">
                <img src="./app/Views/Utils/Images/harta-tren.jpg" width="250" height="210" onclick="resize()" id="trainMap"/>
            </div>
            <hr class="side-bar-line"/>
            <div class="side-bar-content">
                <a href="./inconveniente"> <!--TODO-->
                    <button type="button" class="report-btn">Inconveniente</button>
                </a>
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
                    
                    
                   <input id="inputbox" type="email" style="width: 70%; margin:0 auto;" placeholder="Email...">
                    <button onclick="PopUpMessage()" id="button" type="submit" class="subscribe-btn">Aboneaza-te</button>
                        
                    
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
        function resize () {
            if ( document.getElementById( 'trainMap' ).classList.contains( 'active-image' ) ) {
                document.getElementById( 'trainMap' ).classList.add( 'close-image' );
                setTimeout( function() {
                    document.getElementById( 'trainMap' ).classList.remove( 'active-image' );
                    document.getElementById( 'trainMap' ).classList.remove( 'close-image' );
                    document.getElementById( 'trainMap' ).classList.add( 'standard-image' );
                }, 1000 );
                window.removeEventListener( 'scroll', noscroll );
            }
            else {
                document.getElementById( 'trainMap' ).classList.remove( 'standard-image' );
                document.getElementById( 'trainMap' ).classList.add( 'active-image' );
                noscroll();
                window.addEventListener( 'scroll', noscroll );

            }
        }

        function resizer () {
            if ( document.getElementById( 'calendar' ).classList.contains( 'active-image' ) ) {
                document.getElementById( 'calendar' ).classList.add( 'close-image' );
                setTimeout( function() {
                    document.getElementById( 'calendar' ).classList.remove( 'active-image' );
                    document.getElementById( 'calendar' ).classList.remove( 'close-image' );
                    document.getElementById( 'calendar' ).classList.add( 'standard-image' );
                }, 1000 );
                window.removeEventListener( 'calendar', noscroll );
            }
            else {
                document.getElementById( 'calendar' ).classList.remove( 'standard-image' );
                document.getElementById( 'calendar' ).classList.add( 'active-image' );
                noscroll();
                window.addEventListener( 'calendar', noscroll );

            }
        }

        function noscroll () {
            window.scrollTo( 0, 0 );
        }

        function PopUpMessage () {
            //alert('1234');
            let variabila = document.getElementById( 'inputbox' ).value;
            if ( variabila <= 8 ) {
                window.alert( 'Nu am putut inregistra mailul!' );
                document.getElementById( 'inputbox' ).value = null;
            }
            else {
                window.alert( variabila + ' a fost inregistrat!' );
                document.getElementById( 'inputbox' ).value =null;
            }

        }
        
        
    </script>
    
</html>
