<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/style.css">
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./app/Views/Utils/css/inconveniente.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER-->
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
                    <a href="/faq/showAllFaqs">FAQ</a>
                </div>
            </div>
        </div>
    
        <div class="inconveniente-container">
<div class="container">
    <div class="report-title">
        Plangere
    </div>
    <form method="get">
        <div class="row">
            <div class="col-25">
                <label for="fname">Nume</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Nume...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Prenume</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Prenume...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mail">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="mail" name="e-mail" placeholder="Email..">
            </div>
        </div>




        <div class="row">
            <div class="col-25">
                <label for="country">Tara</label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                    <option value="romania">Romania</option>
                    <option value="franta">France</option>
                    <option value="anglia">England</option>
                    <option value="germania">Germany</option>
                    <option value="rusia">Rusia</option>
                    <option value="polonia">Polonia</option>
                    <option value="Ungaria">Ungaria</option>
                    <option value="Ucraina">Ucraina</option>
                    <option value="Grecia">Grecia</option>
                    <option value="Cehia">Cehia</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Plangerea</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Plangerea dumneavoastra..." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row">
            <button class="sendButton" type="button" onclick="sendPostData()" id="send">Send</button>
        </div>
    </form>
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

</body>

<script>
    
    function sendPostData () {

        let nume = document.getElementById( "fname" ).value;
        let prenume = document.getElementById( "lname" ).value;
        let mail = document.getElementById( "mail" ).value;
        let country = document.getElementById( "country" ).value;
        let complain = document.getElementById( "subject" ).value;
        let params = `${nume}&&&${prenume}&&&${mail}&&&${country}&&&${complain}`;
        let toSend = window.btoa( params );
        if ( nume === "" || prenume === "" || mail === "" || country === "" || complain === "" ) {
            window.alert( 'Nu au fost completate toate datele!' );
        }
        else {
            window.alert( 'Am inregistrat plangerea dumneavoastra!' );
            window.location.replace( `http://localhost:8001/inconveniente/saveReport?data=${toSend}` );
        }
    }
   
</script>
</html>
