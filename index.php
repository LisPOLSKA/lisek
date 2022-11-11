<?php
session_start();
//unset($_SESSION['umail']);
if (isset($_SESSION['umail'])) {
    if($_SESSION['umail'] == 'true'){
        $umail = $_SESSION['umail'];
        unset($_SESSION['umail']);
    }
    else if($_SESSION['umail'] == 'false'){
        $umail = 'false1';
        unset($_SESSION['umail']);
    }
}
else {
    $umail = 'false';
    unset($_SESSION['umail']);
}
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Example bootsrap</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="main.css"/>
    </head>

    <body class="light">

        <header class="sticky-top">
            <nav class="navbar navbar-dark navbar-expand-md bg-primary" id="navbar">
                <a class="navbar-brand" href="#" style="margin-left:10px;"><img class="d-inline-block" src="img/fox1.png" height="60" alt="Logo">Lisek PL</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				    <span class="navbar-toggler-icon"></span>
			    </button>
                
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav" style="align-items:center">
                        <li class="nav-item h5">
                            <a class="nav-link text-light" href="#aboutme">O mnie</a>
                        </li>
                        <li class="nav-item dropdown h5">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" data-bs-toggle="dropdown" role="button" aria-expanded="false">Moje projekty</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Arduino FR minifox</a></li>
                                <li><a class="dropdown-item" href="#frfox-item">Arduino Robot omijaka</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Website: My first website</a></li>
                                <li><a class="dropdown-item" href="#">Website: Moja wizytówka</a></li>
                            </ul>
                        </li>
                        <li class="nav-item h5">
                            <a class="nav-link text-light" href="#">Kontakt</a>
                        </li>
                        <li class="nav-item h5">
                        <button id="upa" aria-label="Przełącznik trybu nocnego" style="margin-left: 10px;">
                            <span></span>
                            <div class="icon"></div>
                        </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nie udało się wysłąć maila</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <main class="row mx-0 fs-4">
            <div class="container col-sm-10">
                <div class="row">
                    <section class="mt-2 mb-2 col-sm-12" id="aboutme">
                            <div class="card text-center bg-info border-dark">
                                <div class="card-header h4">
                                    O mnie
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        Cześć nazywam się Janek.<br>
                                        Interesuję się informatyką, programowaniem, elektroniką i wszystkim co związane z komputerami.<br>
                                        <div class="card mx-auto mt-2 mb-2 col-sm-12 mycolor" style="width: 18rem;">
                                            <div class="card-header">
                                                Programuję w językach takich jak:
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item colortable">C++</li>
                                                <li class="list-group-item colortable">Python</li>
                                                <li class="list-group-item colortable">HTML</li>
                                                <li class="list-group-item colortable">CSS</li>
                                                <li class="list-group-item colortable">PHP</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="row">
                    <section class="col-sm-12 mt-2 mb-2" id="myproject">
                            <div id="carousel1" class="carousel slide carousel-dark" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div id="frminfox-item" class="card mx-auto text-center bg-info" style="width: 100%;">
                                            <div class="card-header"><h4>FR MiniFox</h4></div>
                                            <a href="https://www.youtube.com/watch?v=ayNjuSoUzC8" target="blank"><img src="img/frmini.jpg" class="card-img-top img-fluid rounded mx-auto d-block mt-2" alt="zdjęcie robota FR Mini Fox który na swoim czole zamontowany ma statycznie ultradźwiękowy czujnik dystansu" style="width: 100%; max-width:700px"></a>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Jest to pierwszy skonstruowany przeze mnie robot.<br>
                                                    Jego sterownikiem jest mikrokontroler arduino UNO a napędzany jest przez dwa silniki DC.<br>
                                                    Kliknij w przycisk poniżej aby przenieść się do prezentacji ów robota na moim kanale YT.
                                                </p>
                                               <a href="https://www.youtube.com/watch?v=ayNjuSoUzC8" target="blank" class="btnicr"><i class="bi bi-youtube img-fluid" role="img"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div id="frfox-item" class="card mx-auto text-center bg-info" style="width: 100%;">
                                            <div class="card-header"><h4>Robot omijaka</h4></div>
                                            <a href="https://www.youtube.com/watch?v=mG59Fdtsdt8" target="blank"><img src="img/frfox.png" class="card-img-top img-fluid rounded mx-auto d-block mt-2" alt="zdjęcie robota omijaka robot ten na swoim przodzie zamontowany ma ultradźwiękowy czujnik dystansu który obraca się dzięki również zamontowanemu serwomechanizmowi." style="width: 100%; max-width:700px"></a>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Jest to drugi skonstruowany przeze mnie robot.<br>
                                                    Jego sterownikiem jest mikrokontroler arduino UNO a napędzany jest przez dwa silniki DC.<br>
                                                    Kliknij w przycisk poniżej aby przenieść się do prezentacji ów robota na moim kanale YT.
                                                </p>
                                               <a href="https://www.youtube.com/watch?v=mG59Fdtsdt8" target="blank" class="btnicr"><i class="bi bi-youtube img-fluid" role="img"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div id="firstpage-item" class="card mx-auto text-center bg-info" style="width: 100%;">
                                            <div class="card-header"><h4>Moja pierwsza strona internetowa</h4></div>
                                            <a href="http://lisekpl.ct8.pl" target="blank"><img src="img/firstpage.png" class="card-img-top img-fluid rounded mx-auto d-block mt-2" alt="zdjęcie przedstawia stronę logowania w witrynie lisekpl.ct8.pl tło jest gradientem jasnego i ciemnego niebieskiego w formularzu zawarte jest pole tekstowe na login hasło oraz dwa przyciski jeden do zalogowania a drugi do przeniesienia na stronę do rejestracji" style="width: 100%; max-width:700px"></a>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Jest to moja pierwsza wykonana na poważnie strona internetowa.<br>
                                                    Na stronie tej zawarty jest system logowania i rejestracji gdzie hasła użytkowników są hashowane.<br>
                                                    Po zalogowaniu się na swoje konto w ów serwisie możemy kliknąć w przycisk wyślij mail który wysyła na naszą skrzynkę maila.<br>
                                                    Żeby przejść na stronę kliknij w obrazek albo w przycisk poniżej.
                                                </p>
                                               <a href="http://lisekpl.ct8.pl" target="blank" class="btnic"><i class="bi bi-box-arrow-up-right img-fluid" role="img"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div id="cvpage-item" class="card mx-auto text-center bg-info" style="width: 100%;">
                                            <div class="card-header"><h4>Moja wizytówka</h4></div>
                                            <a href="#myproject"><img src="img/cvpage.png" class="card-img-top img-fluid rounded mx-auto d-block mt-2" alt="zdjęcie przedstawia stronę logowania w witrynie lisekpl.ct8.pl tło jest gradientem jasnego i ciemnego niebieskiego w formularzu zawarte jest pole tekstowe na login hasło oraz dwa przyciski jeden do zalogowania a drugi do przeniesienia na stronę do rejestracji" style="width: 100%; max-width:700px"></a>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Jest to strona internetowa zawierająca informacje o mnie i moich projektach.<br>
                                                    Na stronie tej zawarte są informację o moich zainteresowaniach i o tym w jakich językach programuję.<br>
                                                    Strona ta zbudowana jest na bootstrapie mimo jej niskiego skomplikowania pomogła mi zrozumieć zagadnienia z nim związane.<br>
                                                    Żeby przejść na stronę kliknij w obrazek albo w przycisk poniżej.
                                                </p>
                                               <a href="#myproject" target="blank" class="btnic"><span><i class="bi bi-box-arrow-up-right img-fluid" role="img"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                    </section>                
                </div>
                <div class="row">
                    <section class="col-sm-12 mt-2 mb-2" id="contact">
                        <div class="card text-center  bg-info border-dark">
                            <div class="card-header h4">
                                Kontakt
                            </div>
                            <div class="card-body fs-4">
                                <form method="POST" action="sendmail.php">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="name">Podaj imię</label>
                                                <input type="text" id="name" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tar">Cel Kontaktu</label>
                                                 <select name="tar" id="tar" class="form-select">
                                                    <option value="Zgłoś błąd" class="text-center">Zgłoś błąd</option>
                                                    <option value="Kontakt" class="text-center">Kontakt</option>
                                                    <option value="Inne" class="text-center">Inne</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email">Twój email</label>
                                                <input type="email" name="email" id="email" class="form-control" required>
                                            </div>
                                                
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="mess">Wiadomość</label>
                                                <textarea type="text" name="mess" id="mess" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-check" style="width: auto;">
                                           <input type="checkbox" id="check" name="check" class="form-check-input" required>
                                           <label for="check" class="form-check-label"><a href="regulamin.html" target="_blank">Akceptuje regulamin</a></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-lg" type="submit">Wyślij formularz</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="container col-sm-2">
                <div class="row">
                    <section class="mt-2 mb-2 text-center" id="magia">
                        <img src="img/ad3.png" class="img-fluid" alt="Przykładowa reklama">
                    </section>
                </div>
            </div>
            
        </main>

        <div class="modal" tabindex="-1" id="mailok">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mail został wysłany</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="mailunok">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nie udało się wysłać maila</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="akreg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><a href="regulamin.html" target="_blank">Regulamin</a></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>Regulamin strony:</h1>
                        1: Żedne podane dane nie zostaną zapisane w żadnej bazie danych.<br>
                        2: Żadne podane dane nie zostaną upublicznione ani przekazane nikomu.<br>
                        3: W przypadku wysłania formularza kontaktowego na podany mail zostanie przysłana wiadomość z odpowiedzią.<br>
                        4: Strona korzysta z "local storage" w celu przechowywania danych o stanie przełącznika dark mode.<br>
                        5: Strona korzysta z "zmiennych sesyjnych" w celu wysłania formularza oraz "nie znikania" wartości z pól tekstowych.<br>
                        6: Administratorem twoich danych osobowych jest firma krzak.<br>
                        7: Jednorazowa akceptacja regulaminu oznacza że za każdym kolejnym wejściem na stronę, regulamin będzie automatycznie akceptowany.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="akregf()">Akceptuje regulamin</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 include -->
        <script src="js/bootstrap.bundle.js"></script>
        <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            let uma = <?php echo json_encode($umail)?>;
            if(uma == 'true') {
                var myModal = new bootstrap.Modal(document.getElementById('mailok'), {
                    keyboard: false
                })
                myModal.show();
            }
            else if(uma == 'false1') {
                var myModal1 = new bootstrap.Modal(document.getElementById('mailunok'), {
                    keyboard: false
                })
                myModal1.show();
            }
            var myModal2 = new bootstrap.Modal(document.getElementById('akreg'), {
            keyboard: false
            })
            let akreg = localStorage.getItem("akreg");

            if (akreg == "true") {
            }
            else {
            myModal2.show();
            }
            function akregf() {
                localStorage.setItem("akreg", "true");
            }
        </script>
    </body>
</html>
<!-- gydugyefghds-->