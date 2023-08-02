<?php

    define('pageTitle', 'Kontakt');
    $pgt = 'contactPage';
    include('includes/header.php');

?>
    <main>
        <section class="intro-img">
            <div class="contact-top resizable-bg resizable-bg-sm container-fluid">
                <div class="row justify-content-end" style="margin-right: 0px;">
                    <div class="col-12 col-sm-10 col-lg-9 top-title top-title-left">Kontakt</div>
                    <div class="col-0 col-sm-1"></div>
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
                    </div><br>
                    <div class="centered-title-sep"></div>
                    <div class="owner-info">Geod. Upr. Mariusz Dudkowski (nr uprawnień zawodowych 20126)</div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1340.3478891500959!2d22.281633834729707!3d51.17538655543746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722f467ece4bc8b%3A0x2bafc7119d11e6bd!2sUs%C5%82ugi%20Geodezyjne%20-%20Dudkowski!5e1!3m2!1sen!2spl!4v1690316421011!5m2!1sen!2spl" class="map" style="border:0;margin-top:1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        
    </main>
<?php
    include('includes/footer.php');
?>