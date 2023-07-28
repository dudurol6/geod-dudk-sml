<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 
    <meta name="author" content="Maciej Dudkowski">
    <meta name="description" content="Biuro Usług Geodezyjnych Dudkowski - jakość, profesjonalizm oraz indywidualne podejście do klienta są podstawą Naszej działalności.">
    <meta name="keywords" content="geodeta, usługi geodezyjne, dudkowski, biuro usług geodezyjnych, geodeta lubelskie, lubelskie, lublin, bełżyce, opinie dla sądu, biegły sądowy z zakresu geodezji">    
    <title><?php echo pageTitle; ?> - Biuro Usług Geodezyjnych Dudkowski</title>
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
    <script>
        function highlightNavbar(){
            console.log('arbynbiskup');
            document.getElementById('<?php echo $pgt; ?>').style.color = '#ff2b00';
        }
    </script>

    <header class="container-fluid" style="position: sticky; top: 0; background-color: #ffffff;">
        <div class="row align-items-center justify-content-center f-md">
            <a href="index.php" style="width: auto;"><div class="col-xs-12 col-sm-3" align="center"><img src="img/company-logo.png" class="company-logo"></div></a>
            <div class="col-xs-12 col-sm-9" align="center">
                <nav>
                    <ul class="vertical-nav">
                        <?php
                            echo `
                                <script type="text/javascript">highlightNavbar();</script>
                            `;

                            # TRY TO MAKE IT WORK :))

                        ?>
                        <li><a href="index.php" class="header-nav-list-item"><span id="mainPage">Strona Główna</span></a></li>
                        <li><a href="contact.php" class="header-nav-list-item"><span id="offerPage">Oferta</span></a></li>
                        <li><a href="#" class="header-nav-list-item"><span id="aboutPage">O firmie</span></a></li>
                        <li><a href="#" class="header-nav-list-item"><span id="contactPage">Kontakt</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>