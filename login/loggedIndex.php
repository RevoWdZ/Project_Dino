<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NUR DER HSV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/glyphicon.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login-system.css">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet">

</head>

<body>
    <!-- pasek na samej górze z logo i odnośnikami do sklepu i logowania się oraz menu-->
    <header>
        <nav class="nav navbar navbar-dark navbar-expand-md ">
            <div class="container container-navbar" style="height: 76px;">
                <div class="logo">
                    <a class="navbar-brand" href="loggedIndex.php" style="padding: 0;"><img src="../img/640px-HSV-Logo.png" /></a>
                    <h1 class="home" style="color: white;">WITAJ W<span style="color: white;font-weight: 700"> DOMU!</span></h1>
                </div>

                <div class="collapse navbar-collapse" id="navbar-list" style="max-width: 300px;">
                    <ul>
                        <li><a href="https://shop.hsv.de/?utm_source=hsvde&utm_medium=Navbar&utm_campaign=Shop" target="_blank"><button type="button" class="btn btn-primary" style="width: 100px; margin: 0;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sklep
                                </button></a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <?php
                            if (isset($_SESSION['userId'])) {
                                echo '<form action="includes/logout.inc.php" method="post" style="height: 100%;">
                                <button name="logout-submit" type="submit" class="btn btn-danger" style="width: 140px; margin: 0;"><span class="glyphicon glyphicon-log-out" aria-hidden="true" style="margin-right: 5px;"></span>Wyloguj się
                                </button>
                                </form>';
                            } else {
                                header("Location: ../index.html");
                            }
                            ?>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list " aria-controls="navbar-list" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            </div>
        </nav>

        <nav id="menu">
                <div class="menu-container container">
                    <div class="row" style="height: 60px;">
                        <ul>
                            <li>Wiadomości</li>
                        </ul>
                        <ul>
                            <li>Drużyna</li>
                        </ul>
                        <ul>
                            <li>Sezon</li>
                        </ul>
                        <ul>
                            <li>Klub</li>
                        </ul>
                        <ul>
                            <li>Bilety</li>
                        </ul>
                        <ul>
                            <li>Sklep</li>
                        </ul>
                        <ul>
                            <li>Akademia</li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    <!---------------------------------------------------------------------------------------------------------------------------->
    <main class="main-content" id="content" role="main">
        <div class="divwrapper container divsizer" id="divsizer">
            <div class="container grid" id="grid" style="position:relative;height:2106px;">
                <div class="slider grid-item">
                    <div class="slider insideslider">
                        <div class="slider slideshow_container" style="margin:0;">

                            <div class="slide fade">

                                <a href="../article.php"><img src="../img/slide1.png" style="width:100%"></a>

                            </div>

                            <div class="slide fade">

                                <img src="../img/slide2.png" style="width:100%">

                            </div>

                            <div class="slide fade">

                                <img src="../img/slide3.png" style="width:100%">

                            </div>

                            <div style="text-align:center; height: 19px;">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>

                            </div>

                            <a class="prev" style="left: 0;" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" style="right: 0;" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                    </div>
                </div>

                <div class="separator grid-item"></div>

                <section class="articles grid-item ">
                    <div class="container">
                        <div class="row d-flex justify-content-center " style="height: 700px;">
                            <div class="article col-sm-5 ">
                                <div class="article inside_article">
                                    <div class="article-img">
                                        <img src="../img/zdj/53516185_2216374901945592_6749621872524001280_o.jpg">
                                    </div>
                                    <header class="article-header">
                                        <h2>Lorem ipsum dolor sit amet.</h2>
                                    </header>
                                    <p class="article-text">Sed viverra ut dolor vel convallis. Cras nec quam vitae.</p>
                                </div>
                            </div>
                            <div class="article col-sm-5 ">
                                <div class="article inside_article">
                                    <div class="article-img">
                                        <img src="../img/zdj/Hamburger-SV-1.jpg">
                                    </div>
                                    <header class="article-header">
                                        <h2>Aenean eleifend vitae velit at.</h2>
                                    </header>
                                    <p class="article-text">Integer consectetur lorem nec mauris iaculis semper.
                                        Praesent ornare nisl.</p>
                                </div>
                            </div>
                            <div class="article col-sm-3">
                                <div class="article inside_article">
                                    <div class="article-img" style="height: 100px;">
                                        <img src="../img/zdj/Kinsombi_Verpflichtung_427-NEU.jpg">
                                    </div>
                                    <header class="article-header">
                                        <h4>Ut dictum risus non ultrices.</h4>
                                    </header>
                                    <p class="article-text">Nulla ultrices non quam id vehicula. Sed sollicitudin
                                        consectetur dolor.</p>
                                </div>
                            </div>
                            <div class="article col-sm-3">
                                <div class="article inside_article">
                                    <div class="article-img" style="height: 100px;">
                                        <img src="../img/zdj/Stimmen-zum-Spiel_427.jpg">
                                    </div>
                                    <header class="article-header">
                                        <h4>Proin ut neque nunc. Duis.</h4>
                                    </header>
                                    <p class="article-text">Maecenas porta mauris mi, vitae sodales risus pretium ut.
                                        Praesent.</p>
                                </div>
                            </div>
                            <div class="article col-sm-3">
                                <div class="article inside_article">
                                    <div class="article-img" style="height: 100px;">
                                        <img src="../img/zdj/53516185_2216374901945592_6749621872524001280_o.jpg">
                                    </div>
                                    <header class="article-header">
                                        <h4>Cras lacus turpis, consectetur vitae.</h4>
                                    </header>
                                    <p class="article-text">Nunc ultrices tempus quam, at malesuada sem tristique non.
                                        Mauris.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <div class="separator grid-item"></div>

                <div class="nextmatch grid-item">
                    <iframe frameborder="0" scrolling="no" width="533" height="200" src="https://www.fctables.com/teams/hamburger-sv-186680/iframe/?type=team-next-match&lang_id=1&country=83&template=82&team=186680&timezone=Europe/Warsaw&time=24&width=533&height=200&font=Times new roman&fs=16&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=0&scfs=22&scfc=333333&scb=1&sclg=0&teamls=80&sh=0&hfb=0&hbc=3bafda&hfc=FFFFFF"></iframe>
                    <div style="text-align:center;"></div>
                </div>

                <div class="teamstats grid-item">
                    <iframe src="https://footystats.org/api/club?id=36" height="100%" width="100%" style="height:420px; width:100%;" frameborder="0"></iframe>
                </div>

                <div class="leaguetable grid-item" style="left:0px;top:1600px;">
                    <img src="../img/table.jpg" style="height: 100%; width: 100%;">
                    <a href="https://www.flashscore.pl/pilka-nozna/niemcy/2-bundesliga/tabela/" target="_blank">
                        <div class="leaguetable_button grid-item">
                            <h6>TABELA ></h6>
                        </div>
                    </a>
                </div>

                <div class="trophies grid-item">
                    <div class="title-row">
                        <p class="title line">
                            <span>PUCHARY</span>
                        </p>
                    </div>
                    <div class="wrapper-outside trophies-wrapper">
                        <div class="trophies-container">
                            <a class="trophy-box">
                                <figure class="trophy-image"><img src="../img/bundesliga-meister.png"></figure>
                                <div class="trophy-text">
                                    <p class="number font-titling">6</p>
                                    <p class="number font-titling">Bundesliga Meister</p>
                                </div>
                            </a>
                            <a class="trophy-box">
                                <figure class="trophy-image"><img src="../img/DFB-POKAL.png"></figure>
                                <div class="trophy-text">
                                    <p class="number font-titling">3</p>
                                    <p class="number font-titling">DFB-POKAL</p>
                                </div>
                            </a>
                            <a class="trophy-box">
                                <figure class="trophy-image"><img src="../img/Champions-League-trophy.png"></figure>
                                <div class="trophy-text">
                                    <p class="number font-titling">1</p>
                                    <p class="number font-titling">Liga Mistrzów</p>
                                </div>
                            </a>
                            <a class="trophy-box">
                                <figure class="trophy-image"><img src="../img/200px-Coppa_delle_Coppe.svg.png"></figure>
                                <div class="trophy-text">
                                    <p class="number font-titling">1</p>
                                    <p class="number font-titling">Puchar Zdobywców Pucharów</p>
                                </div>
                            </a>
                            <a class="trophy-box">
                                <figure class="trophy-image"><img src="../img/UEFA-Intertoto-Cup.png"></figure>
                                <div class="trophy-text">
                                    <p class="number font-titling">2</p>
                                    <p class="number font-titling">Puchar Intertoto</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer">
        <div class=" container clock">
            <div class="row" style="padding: 0 0 0 0;margin-bottom: 10px;">
                <div class="col-xs-12 tradition" style="font-size: 25px;">Tradycja kontynuowana od
                </div>
            </div>

            <hr>

            <div class="counter">
                <div class="row" style="padding: 0 0 0 0;height: 100%">
                    <div class="d-flex align-items-center" id="countup" style="width:100%;">
                        <div class="hsvbox-text col-xs-2"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>
                        <div class="hsvbox-text col-xs-2 years"> 00 </div>
                        <div class="hsvbox-text col-xs-2 days"> 00 </div>
                        <div class="hsvbox-text col-xs-2 hours"> 00 </div>
                        <div class="hsvbox-text col-xs-2 minutes"> 00 </div>
                        <div class="hsvbox-text col-xs-2 seconds"> 00 </div>
                    </div>

                </div>


            </div>

            <div class="row" style="padding: 0 0 0 0;justify-content: center;">
                <div class="hsvbox-text col-xs-2"></div>
                <div class="hsvbox-text col-xs-2" style="font-size: 15px;">Lat</div>
                <div class="hsvbox-text col-xs-2" style="font-size: 15px;">Dni</div>
                <div class="hsvbox-text col-xs-2" style="font-size: 15px;">Godzin</div>
                <div class="hsvbox-text col-xs-2" style="font-size: 15px;">Minut</div>
                <div class="hsvbox-text col-xs-2" style="font-size: 15px;">Sekund</div>

            </div>
            <hr>



        </div>
        <div id="desktopFooter" class="container hidden-xs hidden-sm">
            <div class="row">
                <div class="col-md-3 col-md-offset-3"><a><img src="../img/640px-HSV-Logo.png" class="center-block" style="height: 100px; margin-top: 15px; width: 150px;"></a></div>
                <div class="col-md-3"><a><img src="../img/2-Bundesliga-Logo.png" class="center-block" style="height: 115px; margin-top: 15px;"></a></div>
            </div>


            <div class="row hidden-xs hidden-sm">
                <div class="col-md-2 col-md-offset-2"><a>
                        <div class="btn btn-link footer-links">Kontakt</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links ">O klubie</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links">Pomoc</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links">Zasady<br> i warunki</div>
                    </a></div>
            </div>

        </div>


    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/slideshow.js"></script>
    <script src="../js/timer.js"></script>
    <script src="../js/loginform_close.js"></script>
    <script src="../js/stickynav.js"></script>
</body>

</html>