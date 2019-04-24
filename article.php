<?php
date_default_timezone_set('Europe/Copenhagen');
include 'php/dbh.inc.php';
include 'php/comments.inc.php';
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NUR DER HSV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="css/glyphicon.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

</head>

<body>
    <!-- pasek na samej górze z logo i odnośnikami do sklepu i logowania się oraz menu-->
    <header>
        <nav class="navbar navbar-dark navbar-expand-md ">
            <div class="container container-navbar" style="height: 76px;">
                <div class="logo">
                    <a class="navbar-brand" href="#" style="padding: 0;"><img src="img/640px-HSV-Logo.png" /></a>
                    <h1>WITAJ W<span style="color: white;">DOMU!</span></h1>
                </div>

                <div class="collapse navbar-collapse" id="navbar-list" style="max-width: 300px;">
                    <ul>
                        <li><a href="https://shop.hsv.de/?utm_source=hsvde&utm_medium=Navbar&utm_campaign=Shop" target="_blank"><button type="button" class="btn btn-primary" style="width: 100px;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sklep
                                </button></a>
                        </li>
                    </ul>
                    <ul>
                        <li> <button type="button" class="btn btn-danger btn-md" style="width: 124px;">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Zaloguj się
                            </button></li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list " aria-controls="navbar-list" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            </div>
        </nav>
        <!--MENU--->
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
            <div class="container grid" id="grid" style="position:relative;height:100%;">
                <div class="subject">
                    <div class="subject-img">
                        <img src="img/slide1.png">
                    </div>
                    <div class="subject-text">
                        <header>
                            Lorem Ipsum <br> <br>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in libero in sem placerat
                            aliquet et quis dolor. Praesent in luctus erat. Aenean placerat ex et imperdiet ullamcorper.
                            Mauris non convallis lacus. Integer a scelerisque sapien. Proin hendrerit lacus id nulla
                            dapibus, id lacinia risus fermentum. Curabitur tempor lorem et diam dictum luctus.
                            <br><br>
                            Nam nunc eros, maximus luctus purus at, scelerisque varius metus. Vestibulum quis erat ex.
                            Nunc lorem elit, congue eget feugiat eu, volutpat sit amet purus. Maecenas ac euismod lorem.
                            Nulla ornare ipsum at metus condimentum malesuada. Cras a urna dapibus, semper sem at,
                            tempus dolor. Fusce sed urna venenatis, mattis nulla et, vehicula ipsum. Quisque in dui est.
                            Fusce pellentesque aliquam mollis. Vivamus gravida eget enim in porta. Duis laoreet dictum
                            ligula et elementum. Donec accumsan viverra ullamcorper.
                            <br><br>
                            Donec ac volutpat lectus, vel pellentesque neque. Maecenas sed quam id metus vestibulum
                            placerat. Nullam mollis maximus risus, vitae commodo massa ullamcorper sit amet. Proin
                            luctus fermentum odio, ut consequat nunc tempus vel. Suspendisse potenti. Duis fringilla
                            quam venenatis nulla mattis fringilla. Donec non pulvinar ex. Aliquam malesuada dictum enim,
                            id sollicitudin lacus aliquet accumsan. Proin justo leo, accumsan non lorem et, sodales
                            ultrices neque. Sed nisl velit, bibendum eu felis a, congue hendrerit ante. Maecenas mattis
                            felis eget euismod pretium. Mauris a nisl ultricies, rutrum arcu sed, rutrum nisl. Cras
                            convallis dolor vitae eros rutrum, sed auctor tellus varius. Ut interdum quam vitae euismod
                            sollicitudin.
                            <br><br>
                            Pellentesque purus diam, placerat non sollicitudin sed, aliquet et erat. Proin ut sagittis
                            ex. Pellentesque ullamcorper arcu non placerat accumsan. Sed tincidunt vestibulum arcu ac
                            aliquet. Vestibulum aliquet eget metus sed accumsan. Nulla imperdiet rhoncus enim ut
                            porttitor. Suspendisse ut imperdiet massa, sed semper mi. Quisque eget erat ut elit commodo
                            consequat vitae ut augue. Sed at libero sem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="container commentsection">
        <?php
        echo "<form method='POST' action='".setComments($conn)."'>
        <input type='hidden' name='user_id' value='Anonymous'>
        <input type='hidden'name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message'></textarea> <br>
        <button type='sumbit' name='commentSubmit'>Comment</button>
        </form>";
        ?>
    </section>

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
                <div class="col-md-3 col-md-offset-3"><a><img src="img/640px-HSV-Logo.png" class="center-block" style="height: 100px; margin-top: 15px; width: 150px;"></a></div>
                <div class="col-md-3"><a><img src="img/2-Bundesliga-Logo.png" class="center-block" style="height: 115px; margin-top: 15px;"></a></div>
            </div>


            <div class="row hidden-xs hidden-sm">
                <div class="col-md-2 col-md-offset-2"><a>
                        <div class="btn btn-link footer-links">KONTAKT</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links ">KONTAKT</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links">KONTAKT</div>
                    </a></div>
                <div class="col-md-2"><a>
                        <div class="btn btn-link  footer-links">KONTAKT</div>
                    </a></div>
            </div>

        </div>


    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/timer.js"></script>
    <script src="js/resize.js"></script>
</body>

</html>