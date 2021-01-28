<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>CV Marie Dépalle</title>
</head>

<body>
<!--header-->
        <header >
            <h1 class="text-center p-1">Développeuse Web - Marie DEPALLE</h1>
            <div class="bg"></div>
            <div class="d-flex justify-content-center"><img src="images/photoprofil.jpg" alt="photo du CV" id="photo" >
            </div>
        </header>

<!--menu-->
    <nav id="menu" class="navbar navbar-expand-lg navbar-light mt-1 pt-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link menu" href="#presentation" id="lien1">Qui suis-je ? </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#experiences" id="lien3">Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#formation" id="lien4">Formations et Diplômes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#realisations" id="lien6"> Mes réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#hobbies" id="lien5"> Centre d'intérêts</a>
                </li>
                
            </ul>
        </div>
    </nav>
<!--main-->
    <main>
        <!--fleche-->
        <div class="fixed-bottom">
            <a href="#photo"><img src="images/arrow-up.png" alt="flèche" id="fleche"></a>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-5">
<!--section Présentation-->
                    <section>
                        <div id="presentation">
                            <div class="card mt-2 presentation">
                                <h2 class="card-title ml-5">Qui suis-je ?</h2>
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col-12 col-md-12 col-lg-3 d-flex justify-content-center">
                                            <img src="images/woman.png" alt="icone femme" class="img-fluid">
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-9 d-flex align-items-center text-justify">
                                            <p class="texte-pres">Riche de mon parcours atypique, de créativité et de sens du service. Une curiosité naturelle, le goût d'apprendre et une envie persistante du digital qui peut aujourd'hui se concrétiser.
                                            Passer de la découverte en autodidacte à la concrétisation professionnelle.
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <a class="btn" href="images/CV_MARIE_DEPALLE_DEV_WEB.pdf" role="button">Télécharger mon CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-10 col-lg-4">
<!--section Compétences-->
                    <section>
                        <div>
                            <div class="card mt-2 competences">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class=" col-md-12 col-lg-9 d-flex justify-content-around flex-wrap">
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="html5" class="svg-inline--fa fa-html5 fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#B67022" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="css3-alt" class="svg-inline--fa fa-css3-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#072D35" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="js" class="svg-inline--fa fa-js fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#B67022" d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="angular" class="svg-inline--fa fa-angular fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#072D35" d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bootstrap" class="svg-inline--fa fa-bootstrap fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#072D35" d="M292.3 311.93c0 42.41-39.72 41.43-43.92 41.43h-80.89v-81.69h80.89c42.56 0 43.92 31.9 43.92 40.26zm-50.15-73.13c.67 0 38.44 1 38.44-36.31 0-15.52-3.51-35.87-38.44-35.87h-74.66v72.18h74.66zM448 106.67v298.66A74.89 74.89 0 0 1 373.33 480H74.67A74.89 74.89 0 0 1 0 405.33V106.67A74.89 74.89 0 0 1 74.67 32h298.66A74.89 74.89 0 0 1 448 106.67zM338.05 317.86c0-21.57-6.65-58.29-49.05-67.35v-.73c22.91-9.78 37.34-28.25 37.34-55.64 0-7 2-64.78-77.6-64.78h-127v261.33c128.23 0 139.87 1.68 163.6-5.71 14.21-4.42 52.71-17.98 52.71-67.12z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="php" class="svg-inline--fa fa-php fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#B67022" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="symfony" class="svg-inline--fa fa-symfony fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#072D35" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm133.74 143.54c-11.47.41-19.4-6.45-19.77-16.87-.27-9.18 6.68-13.44 6.53-18.85-.23-6.55-10.16-6.82-12.87-6.67-39.78 1.29-48.59 57-58.89 113.85 21.43 3.15 36.65-.72 45.14-6.22 12-7.75-3.34-15.72-1.42-24.56 4-18.16 32.55-19 32 5.3-.36 17.86-25.92 41.81-77.6 35.7-10.76 59.52-18.35 115-58.2 161.72-29 34.46-58.4 39.82-71.58 40.26-24.65.85-41-12.31-41.58-29.84-.56-17 14.45-26.26 24.31-26.59 21.89-.75 30.12 25.67 14.88 34-12.09 9.71.11 12.61 2.05 12.55 10.42-.36 17.34-5.51 22.18-9 24-20 33.24-54.86 45.35-118.35 8.19-49.66 17-78 18.23-82-16.93-12.75-27.08-28.55-49.85-34.72-15.61-4.23-25.12-.63-31.81 7.83-7.92 10-5.29 23 2.37 30.7l12.63 14c15.51 17.93 24 31.87 20.8 50.62-5.06 29.93-40.72 52.9-82.88 39.94-36-11.11-42.7-36.56-38.38-50.62 7.51-24.15 42.36-11.72 34.62 13.6-2.79 8.6-4.92 8.68-6.28 13.07-4.56 14.77 41.85 28.4 51-1.39 4.47-14.52-5.3-21.71-22.25-39.85-28.47-31.75-16-65.49 2.95-79.67C204.23 140.13 251.94 197 262 205.29c37.17-109 100.53-105.46 102.43-105.53 25.16-.81 44.19 10.59 44.83 28.65.25 7.69-4.17 22.59-19.52 23.13z"></path></svg>
                                            <svg width="85" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="wordpress" class="svg-inline--fa fa-wordpress fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#B67022" d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-12 col-md-10 col-lg-9">
<!--section Expériences-->
                    <section>
                        <div id="experiences">
                            <div class="card mt-2">
                                <h2 class="card-title ml-5 mt-4">Expériences</h2>
                                <div class="card-body">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-10 col-md-5 col-lg-3 text-center">
                                            <p class="date"> Janvier 2020</p>
                                        </div>
                                        <div class="col-8 col-md-6 col-lg-4">
                                            <p> <span class="emploi">Conseillère de Vente</span>, Z Retail, Lyon</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-10 col-md-5 col-lg-3 text-center">
                                            <p class="date"> Décembre 2019 - Janvier 2020</p>
                                        </div>
                                        <div class="col-8 col-md-6 col-lg-4">
                                            <p><span class="emploi"> Aide à Domicile</span>, Cyprian Services, Villeurbanne</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-10 col-md-5 col-lg-3 text-center">
                                            <p class="date"> Mars 2018 - Avril 2018</p>
                                        </div>
                                        <div class="col-8 col-md-6 col-lg-4">
                                            <p> <span class="emploi">Conseillère de Vente</span>, X'trême Center, Villeurbanne</p>
                                        </div>
                                    </div>      
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-10 col-md-5 col-lg-3 text-center">
                                            <p class="date"> Septembre 2015 - Avril 2017</p>
                                        </div>
                                        <div class="col-8 col-md-6 col-lg-4">
                                            <p> <span class="emploi"> Vendeuse Polyvalente</span>, Primark, Lyon</p>
                                        </div>
                                    </div>  
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-10 col-md-5 col-lg-3 text-center">
                                            <p class="date"> 2012 - 2014</p>
                                        </div>
                                        <div class="col-8 col-md-6 col-lg-4">
                                            <p> <span class="emploi"> Créatrice de bijoux fantaisies</span>, Auto-Entreprise, Villeurbanne</p>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

<!--section Diplômes et Formations-->
                    <div class=" col-12 col-md-10 col-lg-9">
                        <section>
                            <div id="formation">
                                <div class="card mt-2">
                                    <h2 class="card-title ml-5 mt-4">Diplôme et Formation</h2>
                                    <div class="card-body">
                                        <div class="row justify-content-center mb-3">
                                            <div class="col-10 col-md-5 col-lg-3 text-center">
                                                <p class="date"> 2021</p>
                                            </div>
                                            <div class="col-8 col-md-6 col-lg-4">
                                                <p><span class="formations"> Formation Développeur.se Web, Web Mobile</span>, Human Booster, Villeurbanne</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mb-3">
                                            <div class="col-10 col-md-5 col-lg-3 text-center">
                                                <p class="date"> Septembre 2020 - Octobre 2020</p>
                                            </div>
                                            <div class="col-8 col-md-6 col-lg-4">
                                                <p><span class="formations"> Certification Compétences du Numériques Fondamentales</span>, Simplon, Villeurbanne</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mb-3">
                                            <div class="col-10 col-md-5 col-lg-3 text-center">
                                                <p class="date"> 2011 - 2014</p>
                                            </div>
                                            <div class="col-8 col-md-6 col-lg-4">
                                                <p><span class="formations"> Licence Histoire</span>, Université Lyon 2, Lyon</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mb-3">
                                            <div class="col-10 col-md-5 col-lg-3 text-center">
                                                <p class="date"> Mars 2018 - Avril 2018</p>
                                            </div>
                                            <div class="col-8 col-md-6 col-lg-4">
                                                <p> <span class="formations">Baccalauréat Littéraire spécialité Maths</span>, Lycée Frédéric Faÿs, Villeurbanne</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

<!--realisations-->
                    <div class="col-12 col-md-10 col-lg-9">
                        <div id="realisations">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div class="card mt-2">
                                        <a href="https://horssize.netlify.app/"><img class="card-img-top" src="images/horssize.png" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <p class="card-text text-center">Site Hors Size</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Hobbies-->
                    <div class="col-12 col-md-10 col-lg-9 mt-2" id="hobbies">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <img src="images/games.jpg" alt="image de jeux" class="img-thumbnail">
                            </div>
                            <div class="col-4">
                                <img src="images/read.jpg" alt="image de livre " class="img-thumbnail">
                            </div>
                            <div class="col-4">
                                <img src="images/travel.jpg" alt="image voyage" class="img-thumbnail">
                            </div>
                        </div>
                    </div>





                    

            </div>
        </div>
















    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>