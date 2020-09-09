<?php
require_once 'core/init.php';
?>

<!DOCTYPE html>
<html lang="de" class="">

<head>
    <title>DODOKA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="stylesheet" type="text/css" href="./css/cookie.css">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#b03047">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#b03047">
</head>

<body>

    <header class="transition">
        <div id="logo">
                <img src="./img/logo1s.png" alt="">            
        </div>

        <nav id="main-nav">
            <!-- Burger -->
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>

            <ul>
                <li onclick="scrollToTop()">Start</li>                
                <li onclick="scrollToDiv('work')">Bau-Management</li>                
                <li onclick="scrollToDiv('geographie')">Problemlösung</li>
                <li onclick="scrollToDiv('vision')">Immobilienentwicklung</li>             
                <li onclick="scrollToDiv('about1')">Über uns</li>                
                <li onclick="scrollToDiv('contact')">Kontakt</li>
            </ul>
        </nav>
    </header>

    <section class="content-box" style="height: 100vh;" id="header-container">
        
    </section>

                                                        <!--    BAUMANAGEMENT -->


    <section class="content-box" id="work" style="height: 100vh;">

        <div class="test-container">

            <div class="boxen links">
                <div class="links_1 linke_box">
                    INNOVATIVES <br> BAUMANAGEMENT
                </div>
                <div class="links_2 linke_box">
                    PARTNERAUSWAHL<br>
                    &<br>
                    VERGABEVERFAHREN
                </div>
                <div class="links_3 linke_box">
                    VERTRAGS <br> MANAGEMENT
                </div>
            </div>

            <div class="boxen mitte">
                <img src="./img/geruest.jpg" alt="">
            </div>

            <div class="boxen rechts">
                <div class="rechts_1 rechte_box">
                    AUFBAU VON <br>
                    ORGANISATIONEN UND <br>
                    PROZESSEN FÜR <br>
                    BAUINVESTITIONS- <br>
                    PROJEKTE
                </div>
                <div class="rechts_2 rechte_box">
                    FIDIC-ENGINEER
                </div>
                <div class="rechte_box">
                    STUDIEN UND <br>
                    GUTACHTEN
                </div>
            </div>

        </div>

    </section>   
                                                    <!--    ENDE BAUMANAGEMENT --> 

                                                    <!-- PROBLEMLÖSUNG -->

    <section class="content-box" id="geographie">
        <div class="geographie">
            <h3>Problemlösung</h3>
            <p id="schieflage"><i>Kein Licht am Ende Ihres Projektes?</i></p>

            <div class="button-problemlösung-container">
            <div class="button-vision-pl">
                <p>
                    (Stör)Faktoren
                </p>
            </div>
            <div class="button-vision-pl">
                <p>
                    Produktivitäts-Analyse
                </p>
            </div>
            <div class="button-vision-pl">
                <p>
                    Interim Management
                </p>
            </div>
        </div>

            <div class="stoerfaktoren">

                <div class="box-stoer eisberg">
                    <img src="img/eisberg-d.png" alt="">
                </div>
                <div class="box-stoer interim">
                    <p>* Interim Management !</p>
                    <p>* Effizienzanalyse !</p>
                    <p>* Festlegung / Umsetzung / Alternativ Lösungen !</p>
                    <p>* Supply - Chain Development !</p>
                    <p>* Markteintritt CEE !</p>
                </div>
            </div>
        </div>

    </section>

                                                     <!--    ENDE PROBLEMLÖSUNG -->

                                                    <!-- IMMOBILIENENTWICKLUNG - EHEMALIGE VISION -->

    <section class="content-box" id="vision">

        <h3>Immobilienentwicklung</h3>
        <div class="vision-container">
            <h2 id="heading-strategie">Wir bringen die richtigen Ideen und Menschen für bessere Bauten zusammen !
            </h2>

        </div>
        <div class="button-container">
            <div class="button-vision econ">
                <p>
                    <a href="./img/big/Interessensmatrix.png" class="gallery-item1"></a>
                    Wirtschaftlichkeit
                </p>
            </div>
            <div class="button-vision suggest">
                <p>
                    <a href="./img/big/beeinflussbarkeit.png" class="gallery-item2"></a>
                    Beeinflussbarkeit
                </p>
            </div>
            <div class="button-vision realize">
                <p>
                    <a href="./img/big/immobienentwicklung.png" class="gallery-item3"></a>
                    Umsetzung
                </p>
            </div>
        </div>

    </section>     

                                                    <!--   ENDE IMMOBILIENENTWICKLUNG -->                                                                                                      



                                                    <!--        ÜBER UNS         -->

    <section class="content-box" id="about">

    <div class="section-about-wrapper"> 
        <hr style="position: fixed;">

        <div class="about-container" id="about1">
            <h3></h3>
            <div class="konterfei-leitgedanke">
                <div class="about-box konterfei">
                    <img src="./img/dotter-1.jpg" alt="Konterfei">
                </div>
                <div class="about-box leitgedanke">
                    <h2>Johannes Dotter</h2>
                    <p class="blocksatz">
                         Ich bin Bauingenieur und Baumeister und habe meine Karriere vor über 33 Jahren
                        in der Baubranche gestartet und durchlief zahlreiche Top-Managementpositionen
                        in namhaften österreichischen und internationalen Bauunternehmen. 
                        Ich war bei Großbauprojekten aller Art von Hoch-, über Industrie- bis zum
                        Infrastrukturbau sowohl operativ als auch in Aufsichtsfunktionen verantwortlich
                        tätig. Mein Aufgabengebiet erstreckte sich von der Schweiz, Deutschland, Holland, 
                        England bis in die Türkei, Russland und Süd-Osteuropa.
                    </p>
                    <p class="blocksatz">
                        <i>
                            <b>
                                Diese gesammelte Erfahrung und mein Wissen über die wesentlichen Komponenten
                                erfolgreicher Bauprojekte sind die besten Voraussetzungen, um Ihr Projekt mit uns zu starten, zu entwickeln und
                                erfolgreich umzusetzen bzw. wieder auf Erfolgskurs zu bringen.
                            </b>
                        </i>
                    </p>

                </div>
            </div>

            <div class="konterfei-leitgedanke">
                <div class="about-box konterfei">
                <img src="./img/kvaternik-1.jpg" alt="Konterfei">
                </div>
                <div class="about-box leitgedanke">
                    <h2>Simona Kvaternik</h2>
                    <p class="blocksatz">
                        Seit 14 Jahren betreue ich nun schon Projekte und Bauunternehmen als Betriebswirtin,
                        Unternehmensberaterin,
                        Finanzierungs- und M&A-Expertin. Meine Karriere begann in der Baubranche, mit dem Schwerpunkt
                        Projektfinanzierung,
                        bei einem der größten österreichischen Bauunternehmen. Meine Aufgaben führten mich über
                        Österreich in
                        die Schweiz,
                        nach Deutschland und Süd-Osteuropa. In den vergangenen Jahren setzte ich meine Schwerpunkte auf
                        Immobilien.
                    </p>
                    <p class="blocksatz">
                        <i>
                            <b>
                                Ich freue mich, mein Know-How im Bau- und Immobilienwesen sowie in der Finanzierung
                                vorteilhaft für unsere
                                KundInnen deren Projekte ein zu bringen, um so deren gewünschte Erfolge sicher zu
                                stellen.
                            </b>
                        </i>
                    </p>

                </div>
            </div>
        </div>
    </section>

                                                        <!--    ENDE ÜBER UNS -->

                                                        <!--   KONTAKT -->

    <section class="content-box" id="contact">
        <h3>KONTAKT</h3>
        
        <div style="margin:0 auto; width:90%; max-width:600px;">
                <div class="form-wrapper">
                    <form action="none" method="post" id="message-form">
                        <input class="inputs" id="contact-name" type="text" name="name" placeholder="Ihr Name"/>
                        <input class="inputs" id="contact-mail" type="email" name="mail" placeholder="Ihre E-Mail"/>
                        <input class="inputs" id="contact-subject" type="text" name="subject" placeholder="Betreff"/>
                        <textarea class="inputs" id="contact-message" rows="8" name="message" placeholder="Nachricht"></textarea>
                        <div class="submit-btn" onclick="send()">Nachricht senden</div>
                    </form>
                    <div id="message-box" class="message-box">
                        <div id="close-message-box">
                            <div id="cross-wrapper">
                                <div class="close-cross left-cross"></div>
                                <div class="close-cross right-cross"></div>
                            </div>
                        </div>
                        <div id="message"></div>
                    </div>
                </div>
        </div>

        
        <div class="arrow-up" onclick="scrollToTop()">
            <img src="./img/arrow-up.png">
        </div>
    </section>
                                                            <!-- ENDE KONTAKT -->
   
    <!-- FOOTER************************** -->

    <footer>
        <div class="footer-container">
            <div class="footer-box anschrift">
                <ul>
                    <li style="text-decoration: underline;">Adresse</li>
                    <li>Johannes Dotter</li>
                    <li>Hauptstraße 4</li>
                    <li>2102 Bisamberg</li>
                    <li>Österreich</li>

                </ul>
            </div>
            <div class="footer-box sozial">
                <a href="http://facebook.com" target="_blank"><img src="./img/facebook.png" alt="Facebook"></a>
            </div>
            <div class="footer-box impressum">
                <a href="">Impressum</a>
            </div>
            <div class="footer-box copyright">
                &copy DODOKA - 2020
            </div>
        </div>

    </footer>

    <!--start cookiebar-->
    <div class="cookiebar">
        <div class="cookiebar-inner">
            <div class="cookie-text">
                <p style="color:#fff;">Wir verwenden Cookies, um unsere Webseite für Sie möglichst benutzerfreundlich zu gestalten. Wenn Sie fortfahren, nehmen wir an, dass Sie mit der Verwendung von Cookies auf unserer Webseite einverstanden sind.</p>
            </div>
            <div class="cookie-control">
                <a id="close-cookies" style="cursor:pointer" onclick="cookieagree()"><div class="btn-ck">OK</div></a>
                <a id="ds-btn" href="#"><div class="btn-ck">Datenschutz-Richtlinie</div></a>
            </div>
        </div>
    </div>
    <!--end cookiebar-->


    <script src="js/jquery.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/func_neu.js"></script>
    <script src="js/index.js"></script>
</body>