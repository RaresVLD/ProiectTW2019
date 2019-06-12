<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/style.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../app/Views/Utils/css/announcements.css">
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
        <div class="announcements-container" style="width: 100%; margin-left: 0px !important; background-color: rgba(255,255,255,0.9)">
            <div class="announcements-container-title"><strong>Anunturi</strong></div>
	        <?php foreach ( $data['result'] as $announcement ) : ?>
                <div class="announcements-item" style="margin: 10px">
                    <a href="javascript:void(0)" class="announcements-item-title" style="margin: 10px auto"><?php echo $announcement['title']; ?></a>
                    <div class="announcements-item-content"><?php echo $announcement['content'] ?></div>
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

</body>
</html>
