<?php
date_default_timezone_set('Europe/Copenhagen');
include 'php/dbh.inc.php';
include 'php/comments.inc.php';
session_start();
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/article_responsive.css">
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
                    <a class="navbar-brand" href="login/loggedIndex.php" style="padding: 0;"><img src="img/640px-HSV-Logo.png" /></a>
                    <h1>WITAJ W<span style="color: white;"> DOMU!</span></h1>
                </div>

                <button style="margin:0;"  class="navbar-toggler" type="button" data-toggle="collapse" data-target=".hide" aria-controls="navbar-list" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span><span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>

                <div class="collapse navbar-collapse" id="navbar-list" style="max-width: 300px;">
                    <nav class="navbar-expand-md" style="width: 100%; height: 100%;">
                        <ul>
                            <li><a href="https://shop.hsv.de/?utm_source=hsvde&utm_medium=Navbar&utm_campaign=Shop" target="_blank"><button type="button" class="btn btn-primary" style="width: 100px;margin: 0;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sklep
                                    </button></a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <?php
                                if (isset($_SESSION['userId'])) {
                                    echo '<form action="login/includes/logout.inc.php" method="post" style="height: 100%;">
                                <button name="logout-submit" type="submit" class="btn btn-danger" style="width: 140px; margin: 0;"><span class="glyphicon glyphicon-log-out" aria-hidden="true" style="margin-right: 5px;"></span>Wyloguj się
                                </button>
                                </form>';
                                } else {
                                    echo '<button onclick="document.getElementById(.id01.).style.display=.block. type="button"
                                class="btn btn-dark" style="width: 124px; margin: 0;"><span
                                    class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Zaloguj się
                                </button>
                                <div id="id01" class="modal">
                                <span onclick="document.getElementById(/id01/).style.display=/none/" class="close"
                                    title="Close Modal">&times;</span>

                                <!-- Modal Content -->
                                <form class="modal-content animate" action="login/includes/login.inc.php" method="post">
                                    <div class="imgcontainer">
                                        <img src="img/640px-HSV-Logo.png" alt="Avatar" class="avatar">
                                    </div>

                                    <div class="container-login">
                                        <label for="uname" style="color:black;"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="mailuid" required>

                                        <label for="psw" style="color:black;"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="pwd" required>

                                        <button type="submit" name="login-submit"
                                            style="padding: 4px 4px;width: 30%;line-height: 22px;">Login</button><br>
                                        <label style="color:black;">
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                    </div>

                                    <div class="container-login"
                                        style="background-color:#f1f1f1;height: 65px; padding: 10px;align-items: center;">
                                        <button type="button"
                                            onclick="document.getElementById(\id01\).style.display=\none\"
                                            class="cancelbtn"
                                            style="padding: 0;width: 80px;line-height: 30px;">Cancel</button>
                                        <span class="psw"><span style="color:black;margin-right: 5px;">Forgot</span><a
                                                href="#">password?</a></span>
                                    </div>
                                </form>
                            </div>';
                                }
                                ?>

                            </li>
                        </ul>
                    </nav>
                </div>
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
        <section class="commentsection container">
            <?php
            if (isset($_SESSION['userId'])) {
                echo "<form method='POST' action='" . setComments($conn) . "'>
                <input type='hidden' name='user_id' value='" . $_SESSION['userId'] . "'>
                <input type='hidden'name='date' value='" . date('Y-m-d H:i:s') . "'>
                <textarea name='message'></textarea> <br>
                <button type='submit' name='commentSubmit'>Comment</button>
                </form>";
                echo "Jestes zalogowany";
            } else {
                echo '<div style="color:white;font-weight:500;">Musisz być zalogowany ,żeby komentować</div>';
            }
            getComments($conn);
            ?>
        </section>
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
    <script src="js/timer.js"></script>
</body>

</html>