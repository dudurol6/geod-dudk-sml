<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 
    <meta name="author" content="Maciej Dudkowski">
    <meta name="description" content="Biuro Usług Geodezyjnych Dudkowski - jakość, profesjonalizm oraz indywidualne podejście do klienta są podstawą Naszej działalności.">
    <meta name="keywords" content="geodeta, usługi geodezyjne, dudkowski, biuro usług geodezyjnych, geodeta lubelskie, lubelskie, lublin, bełżyce, opinie dla sądu, biegły sądowy z zakresu geodezji">    
    <title>Strona Główna - BIURO USŁUG GEODEZYJNYCH DUDKOWSKI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="fontello-20e0cf6b/css/fontello.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&family=Pathway+Extreme:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>
<body>

    <div id="goUp"><i class="demo-icon icon-up"></i></div>

    <script>
        var goUpButton = document.getElementById('goUp');
        var rootElement = document.documentElement;

        function handleScroll(){
            var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
            if(scrollTotal >= 200){
                if ((rootElement.scrollTop / scrollTotal ) > 0.60 ){
                    goUpButton.classList.add('goUpButtonShow');
                } else{ goUpButton.classList.remove('goUpButtonShow'); }	
            }	
        }
        function scrollToTop(){
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }
        document.addEventListener('scroll', handleScroll);
        goUpButton.addEventListener('click', scrollToTop);
    </script>

    <header class="container-fluid" style="position: sticky; top: 0; background-color: #ffffff;">
        <div class="row align-items-center justify-content-center f-md">
            <a href="index.php" style="width: auto;"><div class="col-xs-12 col-sm-3" align="center"><img src="img/company-logo.png" class="company-logo"></div></a>
            <div class="col-xs-12 col-sm-9" align="center">
                <nav>
                    <ul class="vertical-nav">
                        <li><a href="#" class="header-nav-list-item"><span style="color: #ff2b00;">Strona Główna</span></a></li>
                        <li><a href="#" class="header-nav-list-item">Oferta</a></li>
                        <li><a href="#" class="header-nav-list-item">O firmie</a></li>
                        <li><a href="#" class="header-nav-list-item">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="introduction">
            <div class="homepage-top resizable-bg container-fluid">
                <div class="row justify-content-end" style="margin-right: 0px;">
                    <div class="col-xs-11 col-sm-8 homepage-top-title">Biuro Usług Geodezyjnych <span class="homepage-top-title-sm"><br>Dudkowski</span></div>
                    <div class="col-xs-0 col-sm-1"></div>
                </div>
            </div>
            <div class="container-fluid homepage-top-company-description">
                <div class="row justify-content-center">
                    <div class="col-md-8 top-intro">
                        <span class="top-intro-big">Najwyższa jakość <span style="color: #f85736;">świadczonych usług!</span></span> <br><br>
                        Biuro Usług Geodezyjnych Dudkowski jest rodzinną Firmą z wieloletnimi tradycjami, 
                        której początki działalności sięgają 1992 roku. Dzięki połączeniu doświadczenia, wiedzy 
                        i nowoczesnych technologii jesteśmy w stanie zapewnić Państwu usługi geodezyjne na najwyższym 
                        poziomie połączone z fachowym doradztwem. <br><br> <span style="color: #d4d4d4; font-weight: 900;">Jakość, profesjonalizm oraz indywidualne podejście do 
                        klienta są <u>podstawą Naszej działalności</u>.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="offer">
            <div class="homepage-offer resizable-bg container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-4 col-xl-3 offer-elem">
                            <img src="img/client-pic.png" width="100%">
                            <div class="offer-elem-client-type">Klient indywidualny</div>
                            <div class="centered-title-sep"></div>

                            
                            <p class="d-inline-flex gap-1 justify-content-center" style="width: 100%;">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#individual-client-collapse" aria-expanded="false" aria-controls="collapseExample">
                                    Pokaż ofertę
                                </button>
                            </p>
                            <div class="collapse client-collapse" id="individual-client-collapse">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <i class="demo-icon icon-right-open"></i> mapy do celów projektowych<br>
                                        <i class="demo-icon icon-right-open"></i> podziały działek<br>
                                        <i class="demo-icon icon-right-open"></i> wznowienia i ustalenia granic<br>
                                        <i class="demo-icon icon-right-open"></i> rozgraniczenia<br>
                                        <i class="demo-icon icon-right-open"></i> wytyczenia i inwentaryzacje<br>
                                        <i class="demo-icon icon-right-open"></i> dokumentacja do spraw sądowych<br><br>
                                        <div class="col-12" style="text-align: center;">
                                            <button type="button" class="btn btn-danger know-more-btn">Dowiedz się więcej!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-10 col-sm-4 col-xl-3 offer-elem">
                            <img src="img/client-pic.png" width="100%">
                            <div class="offer-elem-client-type">Organy administracji publicznej</div>
                            <div class="centered-title-sep"></div>


                            <p class="d-inline-flex gap-1 justify-content-center" style="width: 100%;">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#pubadm-client-collapse" aria-expanded="false" aria-controls="collapseExample">
                                    Pokaż ofertę
                                </button>
                            </p>
                            <div class="collapse client-collapse" id="pubadm-client-collapse">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <i class="demo-icon icon-right-open"></i> mapy do celów projektowych<br>
                                        <i class="demo-icon icon-right-open"></i> podziały działek<br>
                                        <i class="demo-icon icon-right-open"></i> wznowienia i ustalenia granic<br>
                                        <i class="demo-icon icon-right-open"></i> rozgraniczenia<br>
                                        <i class="demo-icon icon-right-open"></i> wytyczenia i inwentaryzacje<br>
                                        <i class="demo-icon icon-right-open"></i> dokumentacja do spraw sądowych<br><br>
                                        <div class="col-12" style="text-align: center;">
                                            <button type="button" class="btn btn-danger know-more-btn">Dowiedz się więcej!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-10 col-sm-4 col-xl-3 offer-elem">
                            <img src="img/client-pic.png" width="100%">
                            <div class="offer-elem-client-type">Plebs</div>
                            <div class="centered-title-sep"></div>  


                            <p class="d-inline-flex gap-1 justify-content-center" style="width: 100%;">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#plebs" aria-expanded="false" aria-controls="collapseExample">
                                    Pokaż ofertę
                                </button>
                            </p>
                            <div class="collapse client-collapse" id="plebs">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <i class="demo-icon icon-right-open"></i> mapy do celów projektowych<br>
                                        <i class="demo-icon icon-right-open"></i> podziały działek<br>
                                        <i class="demo-icon icon-right-open"></i> wznowienia i ustalenia granic<br>
                                        <i class="demo-icon icon-right-open"></i> rozgraniczenia<br>
                                        <i class="demo-icon icon-right-open"></i> wytyczenia i inwentaryzacje<br>
                                        <i class="demo-icon icon-right-open"></i> dokumentacja do spraw sądowych<br><br>
                                        <div class="col-12" style="text-align: center;">
                                            <button type="button" class="btn btn-danger know-more-btn">Dowiedz się więcej!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                
            </div>
        </section>
        <section class="contanct">
            <div class="contact-content container-fluid">
                <div class="row centered-title justify-content-center">Skontakuj się z nami!</div>
                <div class="centered-title-sep"></div>
                <div class="container-fluid" style="margin-top: 1rem;">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-4 col-xl-3 contact-info">
                            <div class="container">
                                <div class="row contact-left-row">
                                    <div class="single-contact-elem col-6 col-sm-12">
                                        <i class="demo-icon icon-location icon"></i>
                                        <div class="contact-elem-description">ul. Lubelska 5<br> 24-200 Bełżyce </div>
                                    </div>
                                    <br>
                                    <div class="single-contact-elem col-6 col-sm-12">
                                        <i class="demo-icon icon-phone icon"></i>
                                        <div class="contact-elem-description">+48 607 647 111 <br> <span style="font-size: 0.9rem; font-weight: 500;">81 516 10 94</span> </div>
                                    </div>
                                    
                                    <br>
                                    <div class="single-contact-elem col-6 col-sm-12">
                                        <i class="demo-icon icon-mail icon"></i>
                                        <div class="contact-elem-description" style="vertical-align: text-top;">buged@wp.pl </div>
                                    </div>

                                    <br>
                                    <div class="single-contact-elem col-6 col-sm-12">
                                        <i class="demo-icon icon-facebook icon"></i>
                                        <div class="contact-elem-description"><a href="https://www.facebook.com/geodetadudkowski" class="fb-link" target="_blank">Geodeta Dudkowski<br> na Facebooku</a></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-12 col-sm-8 col-xl-6">
                            <span class="centered-title-sm">Napisz do nas:</span>
                            <form action="#" method="post">
                                <input type="text" class="form-item" name="name" placeholder="Imię i Nazwisko.." required title="Podaj swoje imię i nazwisko">
                                <input type="email" class="form-item" name="email" placeholder="Twój e-mail.." required title="Podaj swój adres e-mail">
                                <input type="text" class="form-item" name="subject" placeholder="Temat wiadomości.." required title="Podaj temat swojej wiadomości">
                                <textarea type="text" class="form-item" id="form-message" name="message" placeholder="Wiadomość.." required title="Napisz swoją wiadomość"></textarea>
                                <br><button type="submit" name="submit" class="btn btn-secondary">Wyślij!</button>
                            </form>
                        </div>
                    </div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1340.3478891500959!2d22.281633834729707!3d51.17538655543746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722f467ece4bc8b%3A0x2bafc7119d11e6bd!2sUs%C5%82ugi%20Geodezyjne%20-%20Dudkowski!5e1!3m2!1sen!2spl!4v1690316421011!5m2!1sen!2spl" class="map" style="border:0;margin-top:1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        
    </main>
    <footer>
        &copy; 2023 | Projekt i wykonanie: Maciej Dudkowski
    </footer>
    <script src="scripts/scripts.js"></script>
</body>
</html>