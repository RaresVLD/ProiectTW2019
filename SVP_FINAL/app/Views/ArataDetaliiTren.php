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
                <a href="detaliitrenuri">Detalii trenuri</a>
                <a href="faq">FAQ</a>
            </div>
        </div>
    </div>
    <div class="DetaliiTrenuri-container">
        <div class="DetaliiTrenuri-container-title"><strong>Detalii Tren</strong></div>


        <div class="table-container">
            <?php if(isset($data['error'])){
                echo $data['error'];
            }else {
	
	            echo "<table><tr><th>Numar</th>
                <th>Categorie</th>
                <th>Km cumulati</th>
                <th>Lungime</th>
                <th>Operator</th>
                <th>Proprietar</th>
                <th>Putere</th>
                <th>Rang</th>
                <th>Servicii</th>
                <th>Tonaj</th>
                </tr>";
	            echo "<tr>";
	            echo "<td>" . $data["Numar"] . "</td>";
	            echo "<td>" . $data["CategorieTren"] . "</td>";
	            echo "<td>" . $data["KmCum"] . "</td>";
	            echo "<td>" . $data["Lungime"] . "</td>";
	            echo "<td>" . $data["Operator"] . "</td>";
	            echo "<td>" . $data["Proprietar"] . "</td>";
	            echo "<td>" . $data["Putere"] . "</td>";
	            echo "<td>" . $data["Rang"] . "</td>";
	            echo "<td>" . $data["Servicii"] . "</td>";
	            echo "<td>" . $data["Tonaj"] . "</td>";
	
	            echo "</tr></table>";
            }
            ?>
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
                <input type="email" style="width: 70%; margin:0 auto;" placeholder="Email..." id="email">
                <button type="button" class="subscribe-btn" id="subscribe-btn">Aboneaza-te</button>
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
    <style>
        .table-container{
            border: 1px solid black;
            margin: 1%;
        }
        
        .table-container td{
            border : 1px solid black;
        }

        .table-container th {
            border : 1px solid black;
        }
    </style>
</html>
