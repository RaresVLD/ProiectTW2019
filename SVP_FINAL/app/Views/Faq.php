<!DOCTYPE html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/style.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/Faq.css">
    <meta charset="UTF-8">
    <title>TW-Proiect</title><style type="text/css">

</style>
</head>
<body>

<div class="top-header"></div>
<div class="content-base">
    <div class="logo"></div>
    <div class="navbar">
        <a href="/">Acasa</a>
        <a href="anunturi/showAnnouncements">Anunturi</a>
        <div class="dropdown">
            <button class="dropbtn">Meniu</button>
            <div class="dropdown-content">
                <a href="/calatorii/setTripData">Calatorii</a>
                <a href="/detaliitren">Detalii trenuri</a>
                <a href="/faq/showAllFaqs">FAQ</a>
            </div>
        </div>
    </div>
    <div class="faq-container">
        <div class="announcements-container-title"><strong>FAQ</strong></div>
	    <?php foreach ( $data['faq'] as $faq ) : ?>
            <div class="announcements-item" style="margin: 10px">
                    <a href="javascript:void(0)" class="announcements-item-title" style="margin: 10px auto"><?php echo $faq['intrebare']; ?></a>
                    <div class="announcements-item-content"><?php echo $faq['raspuns'] ?></div>
                </div>
	    <?php endforeach; ?>
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
        document.getElementById( "Faq1" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "block";
            document.getElementById( "text2" ).style.display = "none";
            document.getElementById( "text3" ).style.display = "none";
            document.getElementById( "text4" ).style.display = "none";
            document.getElementById( "text5" ).style.display = "none";
            document.getElementById( "text6" ).style.display = "none";


        } )

        document.getElementById( "Faq2" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "none";
            document.getElementById( "text2" ).style.display = "block";
            document.getElementById( "text3" ).style.display = "none";
            document.getElementById( "text4" ).style.display = "none";
            document.getElementById( "text5" ).style.display = "none";
            document.getElementById( "text6" ).style.display = "none";


        } )
        document.getElementById( "Faq3" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "none";
            document.getElementById( "text2" ).style.display = "none";
            document.getElementById( "text3" ).style.display = "block";
            document.getElementById( "text4" ).style.display = "none";
            document.getElementById( "text5" ).style.display = "none";
            document.getElementById( "text6" ).style.display = "none";


        } )
        document.getElementById( "Faq4" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "none";
            document.getElementById( "text2" ).style.display = "none";
            document.getElementById( "text3" ).style.display = "none";
            document.getElementById( "text4" ).style.display = "block";
            document.getElementById( "text5" ).style.display = "none";
            document.getElementById( "text6" ).style.display = "none";


        } )
        document.getElementById( "Faq5" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "none";
            document.getElementById( "text2" ).style.display = "none";
            document.getElementById( "text3" ).style.display = "none";
            document.getElementById( "text4" ).style.display = "none";
            document.getElementById( "text5" ).style.display = "block";
            document.getElementById( "text6" ).style.display = "none";


        } )

        document.getElementById( "Faq6" ).addEventListener( "click", function( event ) {

            document.getElementById( "text1" ).style.display = "none";
            document.getElementById( "text2" ).style.display = "none";
            document.getElementById( "text3" ).style.display = "none";
            document.getElementById( "text4" ).style.display = "none";
            document.getElementById( "text5" ).style.display = "none";
            document.getElementById( "text6" ).style.display = "block";


        } )
    </script>
    
    
</body>
    <style>
        .announcements-container-title {
            font-size   : 25px;
            font-weight : bolder !important;
            text-align  : center;
            width       : 100%;
            height      : 50px;
            margin-top  : 20px;
        }

        .announcements-container {
            display        : flex;
            flex-direction : column;
            flex-wrap      : wrap;
            width          : 65%;
            height         : auto;
            float          : left;
            margin-left    : 10px;
            margin-right   : 10px;
        }

        .item {
            font-size      : 15px;
            display        : flex;
            flex-wrap      : wrap;
            align-items    : flex-start;
            flex-direction : column;
            font-weight    : normal !important;
        }

        .announcements-item {
            display          : flex;
            flex-wrap        : wrap;
            align-items      : flex-start;
            flex-direction   : column;
            font-size        : 17px;
            font-weight      : 900;
            box-shadow       : 25px 20px 50px -20px rgba(0, 0, 0, 0.78);
            margin-bottom    : 20px;
            background-color : #f3f3f3;
            border-radius    : 10px;
        }

        .announcements-item-content {
            padding     : 10px 10px 10px 10px;
            font-size   : 15px;
            font-weight : normal !important;
        }

        .announcements-item-title {
            margin          : 10px 10px 10px 10px;
            color           : black;
            text-decoration : none;
        }
    </style>
</html>

