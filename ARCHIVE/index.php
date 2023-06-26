<?php
/**
* @file     index.php
* @author   Dylan PLESSIS
* @version   1.0
* @date     04/2022 * 
* @details   Ce fichier est l'index general du site.
*/    
?> 
<!DOCTYPE html">
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ************************** THEME INFO *************************** -->
        <meta name="description" content="Coach en mouvement sur Bordeaux">
        <meta name="keywords" content="Movement Bordeaux, Crooked movement practice, Crooked movement">
        <meta name="author" content="Koulouf">        
        <meta name="copyright" content="Crooked movement practice" />
        <!-- ************************** SITE TITLE *************************** -->
        <title>CROOKED MOVEMENT PRACTICE</title>
        
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
              
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
       
           
    </head>
    <body class="text-white">
    <div class="navbar-dps d-none">
            <div class="px-3 py-2 text-white" role="navigation">
                <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#home" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">      
                        <img src="img/img_logoW.jpg" width="150" height="75" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Main navigation -->
                   
                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 " id="top-navigation">
                            <li><a class="nav-link text-white" href="#Home">Home</a></li>
                            <li><a class="nav-link text-white" href="#Move">Le Mouvement</a></li>
                            <li><a class="nav-link text-white" href="#Methode">La méthode</a></li>
                            <li><a class="nav-link text-white" href="#About">À propos</a></li>                           
                            <li><a class="nav-link text-white" href="#Price">Tarifs</a></li>
                            <li><a class="nav-link text-white" href="#Massage">Massage</a></li>
                            <li><a class="nav-link text-white" href="#Contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
    <div id="Home" class="container-fluid bgimg-1">
        <div class="row align-items-center">
            <div class="col-6">
            <img src="./img/img_logoB.jpg" class="img-fluid mt-5" alt="...">
            <h1 class="text-center p-5 m-5 fst-italic">"Ce que tu n'utilises pas, tu le perds"</h1>
            </div>            
        </div>
        <div class="position-absolute bottom-0 end-0">
            <h4 class="p-4 fst-italic">Élève & Enseignant chez <a class="text-white" target="_blank" href="https://www.movement-amplitude-bordeaux.com/">Amplitude.movement</a> </h4>
        </div>
    </div>
    
    <div id="Move" class="container-fluid bgimg-2 overflow-hidden">   
        <div class="row gy-5">
            <div class="col-6">
                <div class="p-5">
                    <h2 class="text-center mb-5">Qu’est-ce que le Mouvement ?</h2>    
                    <!--figure class="text-center">
                        <blockquote class="blockquote">
                            <h3>“Use it or lose it”</h3>
                        </blockquote>
                        <figcaption class="blockquote-footer text-white text-end">
                            <cite title="Source Title">Ido PORTAL</cite>
                        </figcaption>
                    </figure-->
                    <div class="text-justify">
                        <p class="mb-4">
                            Plusieurs définitions pourraient être proposées. Toutefois, si je dois m’adresser au plus grand nombre, le Mouvement est un type de cross-training regroupant des exercices issus de différentes disciplines, permettant ainsi d'améliorer la performance globale. L'idée est de varier les différents supports d'entraînement dans le but de prendre « ce qu'il y a de mieux » dans chaque discipline envisagée de manière à être un pratiquant/athlète le plus complet possible.
                        </p>
                        <p class="mb-4">
                            Les exercices peuvent se réaliser avec ou sans matériel, sous des formats divers mais visent généralement un travail pour l'ensemble des groupes musculaires avec un certain niveau d'intensité. Les mouvements polyarticulaires sont généralement utilisés.
                        </p>
                        <p class="mb-4">
                            De façon à s'entraîner où on veut quand on veut, la pratique se veut minimaliste et nomade aussi bien sur les outils utilisés (anneaux de gym, balle de tennis, élastiques...) que sur les lieux sollicités, aussi bien en intérieur qu'en extérieur. Le Mouvement tend vers un développement général des qualités physiques. Il est un cross-training fonctionnel avec une dynamique artistique par le biais de la locomotion et du jeu. L'objectif étant de bouger mieux, en bonne santé et le plus longtemps possible.
                        </p>
                    </div>
                    <h2 class="text-center mt-5 mb-5">Pourquoi pratiquez le Mouvement ?</h2> 
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <h3>“If it’s impossible, it’s a good goal to have”</h3>
                        </blockquote>
                        <figcaption class="blockquote-footer text-white text-end">
                            <cite title="Source Title">Ido PORTAL</cite>
                        </figcaption>
                    </figure>
                    <div class="text-justify">
                        <p class="mb-4">
                        Que vous souhaitiez pouvoir jouer avec vos (petits)enfants dans le parc, faire un poirier de 60 secondes ou simplement bouger avec une communauté et une atmosphère passionnante à Bordeaux, la pratique du Mouvement est un bon motif.       
                        </p>
                        <pclass="mb-4">
                        La pratique vous fournit les outils et un processus pour rester fort, mobile et apprendre de nouvelles choses pour le reste de votre vie.
                        </p>
                        <p>
                        Êtes-vous prêt pour une expérience complètement différente qui transformera votre relation avec votre corps et votre esprit ? Développer la pleine capacité de votre corps de manière structurée mais ludique ? Vous savez où me trouver !      
                        </p>
                    </div>
                    <!--figure class="text-center">
                        <blockquote class="blockquote">
                            <h3>“Move because you can ”</h3>
                        </blockquote>
                        <figcaption class="blockquote-footer text-white text-end">
                            <cite title="Source Title">Ido PORTAL</cite>
                        </figcaption>
                    </figure-->

                </div>           
            </div>
        </div>
    </div>
    <div id="Methode" class="container-fluid bgimg-3 overflow-hidden">   
        <div class="row gy-4 justify-content-end">
            <div class="col-6">
                <div class="p-5">
                    <h1 class="text-center mt-5 mb-5">La méthode</h1>                   
                    <div class="text-justify">
                        <p class="mb-4">Le Mouvement est selon moi, un des meilleurs outils à ce jour si vous voulez développer votre cerveau, votre corps et votre conscience. En tirant parti des concepts de différents domaines… Un programme holistique, unique et personnalisable adaptée à tous les niveaux a pu voir le jour. L’objectif étant de nous développer en tant qu'êtres humains.</p>
                        <p>Le Mouvement reste un processus d'apprentissage évolutif qui se traduit par le socle d’apprentissage suivant :</p>
                        <img src="./img/img_shema.jpg" class="mt-3 mb-4 img-fluid" alt="..."/>

                        <p class="mb-4">De façon à s'entraîner où on veut quand on veut, la pratique se veut minimaliste et nomade aussi bien sur les outils utilisés (anneaux de gym, balle de tennis, élastiques...) que sur les lieux sollicités, aussi bien en intérieur qu'en extérieur. </p>
                        <p class="mb-4">Le Mouvement tend vers un développement général des qualités physiques. Il est un cross-training fonctionnel avec une dynamique artistique par le biais de la locomotion et du jeu. </p> 
                        <p>L'objectif étant de bouger mieux, en bonne santé et le plus longtemps possible.</p>
                    </div>
                    
                    <!--figure class="text-center ">
                        <blockquote class="blockquote">
                            <h3>“Move, move more, move better”</h3>
                        </blockquote>
                        <figcaption class="blockquote-footer text-end">
                            <cite title="Source Title">Ido PORTAL</cite>
                        </figcaption>
                    </figure-->
                </div>                    
            </div>           
        </div>
    </div>
    <div id="About"class="container-fluid bgimg-4 overflow-hidden">   
        <div class="row gy-4 ">
            <div class="col-7">
                <div class="p-5">
                    <h1 class="text-center mb-5">À propos</h1>      
                    <div class="text-justify">
                        <p>
                        Je m’appelle Kevin SUZANNE (aka Koulouf), j’ai 27ans et je suis originaire de la Basse-Normandie.
                        </p>
                        <p>
                        J’ai grandi et plongé assez tôt dans l’univers du sport, notamment par le biais de plusieurs sports individuels et collectifs… De fil en aiguille, plusieurs compétences ont été développés et plusieurs blessures se sont associés également.        </p>
                        <p>
                        Mon parcours sportif m’a amené dès l’adolescence vers de nouvelles pistes de réflexions par le biais de recherches personnelles, de lectures, d’échange sur des questions communes et récurrentes tel que :      </p>
                        <ul class="mt-1 mb-3">              
                            <li>Comment éviter de se blesser ?</li>
                            <li>Quels aliments consommer ? </li>
                            <li>Quel régime adopté ? </li>
                            <li>Faut-il travailler la souplesse ou la mobilité ? </li>
                            <li>Les deux en même temps ? </li>
                        </ul>
                        <p>
                            Aussitôt que l’on répondait à une question, deux autres la remplacées.
                        </p>
                        
                        <p>
                        Heureusement, aux environs des années 2010, quelqu’un a mis un gros coup de pied dans la fourmilière… Suite à la découverte du protagoniste en question (spoil au prochain §), des questions très simples se sont posés. Pourquoi s’entraîne t’on ? Avons-nous vraiment besoin de matériel ? de matériel onéreux ? Pourquoi cherchons à nous entraîner si l’objectif n’étant pas une compétition ? Pourquoi on s’entraîne ?
                        </p>
                        
                        <p>
                        De ce constat qui m’a demandée quelques années de pratique et de réflexion. J’ai fini par découvrir une partie de la réponse. Notamment par Ido Portal, un des protagonistes principaux de la Movement Culture.
                        </p>
                        
                        <p>
                        Comme beaucoup de personnes, j’ai regardé un de ces contenu qui m’a amené vers d’autres approches et point de vue. Depuis, j’ai développé ma pratique et mon enseignement du Mouvement. Ainsi, mon enseignement s’inspire largement de mon parcours personnel. Mais aussi, de la méthode Ido Portal et de celle de <a class="text-white" target="_blank" href="https://www.movement-amplitude-bordeaux.com/">Amplitude.movement</a></li>.
                        </p>
                        
                        <p>
                        Ma passion pour la discipline m’a donc conduit à passer un diplôme d’état d’éducateur sportif afin de partager mes connaissances, de réaliser mon projet et surtout de partager au plus grand nombre la discipline du Mouvement.
                        </p>      
                    </div>

  
                    <figure class="text-center ">      
                        <figcaption class="blockquote-footer text-center text-white">
                            <cite title="Source Title">Koulouf</cite>
                        </figcaption>
                    </figure> 
                </div>                    
            </div>           
        </div>
    </div>
    <div id="Price" class="container-fluid bgimg-5 overflow-hidden">   
        <div class="row gy-4 p-5 ">
            <h1 class="text-center">Tarifs</h1>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-header py-4 text-warning">
                        <h3 class="my-0 fw-normal">Cours Solo-Duo-Trio</h3>
                    </div>                    
                    <div class="card-body ">                        
                        <ul>
                            <li class="price p-3">60€/h(<em>solo</em>) - 90€/h(<em>duo</em>) - 105€/h(<em>trio</em>)</li>
                            <li class="p-3">Cours de Mouvement complet</li>
                            <li class="p-3">Développement des qualités: (Force, Souplesse, Mobilité...)</li>
                            <li class="p-3">Développement de compétence (Handstand, Muscle-up, Pistol squat...)</li>
                            <li class="p-3">Préparation physique à un sport en particulier</li>
                            <li class="p-3">Sans engagement – Extérieur ou à domicile</li>
                        </ul>
                        <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-header py-4 text-warning">
                        <h3 class="my-0 fw-normal">CARNETS DE COACHING INDIVIDUELS</h3>
                    </div>                
                    <div class="card-body">                    
                        <ul>
                            <li class="price p-3">60€/h - 150€/3h (<i>50€/h</i>) - 200€/5h (<i>40€/h</i>)</li>
                            <li class="p-3">Les carnets de coaching sont <b>valables 3 mois à compter de la date d'achat *</b>.
                            </li>
                            <li class="p-3">COACHING One to One</li>
                            <i style="font-size: 0.7em;color: #747C89;"><b>*</b> Les cours non consommés sur la période de validité seront perdus. Aucun remboursement ne sera proposé.</i>
                        </ul>
                        <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                    </div>
                </div>
            </div> 
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-header py-4 text-warning">
                        <h3 class="my-0 fw-normal">Cours collectifs (Club et Entreprise)</h3>
                    </div>                
                    <div class="card-body">                    
                        <ul>
                            <li class="price  p-3">Jusqu’à 16 personnes</li>
                            <li class="p-3">Déplacement sur le lieu de travail</li>
                            <li class="p-3">Nombre de personne</li>
                            <li class="p-3">Localisation</li>
                            <li class="p-3">Durée du cours</li>
                            <li class="p-3">Avec ou sans engagement</li>
                        </ul>
                        <a href="#Contact" class="btn btn-outline-dark">DEMANDE DE DEVIS</a>
                    </div>
                </div>
            </div>       
        </div>
    </div>
    
    <div id="Massage" class="container-fluid bgimg-7 overflow-hidden">   
        <div class="row gy-4 p-5 ">
            <h1 class="text-center text-dark">Massage</h1>
            <div class="col-sm-6 text-dark p-5">
                <div class="contact-form text-center m-5 p-5 ">
                    <p>En complémentarité de mon diplôme de coach sportif, j’ai voulu développer mes compétences à travers le massage. </p>
                    <p>J’ai trouvé un réel intérêt à développer le sens du toucher. Notamment, pour être encore plus à l’écoute, pour mieux communiquer avec le corps de l’autre et ainsi, approfondir ma pédagogie dans la réflexion et l’enseignement.</p>
                    <p>C’est pourquoi, j’établi des liens entre ma pratique du Mouvement et le développement de plusieurs compétences, dont le massage.</p>
                    <p>Car en effet, ces compétences sont transférables et transversales.</p>
                    <h4 ><strong>Lorsque je masse, je masse avec méthodologie, avec une intention claire, et avec intuition.</strong></h4>
                </div>
                
            </div>
            <div class="col-sm-6">
                <div id="carouselExampleFade" class="carousel slide carousel-fade p-5" data-bs-ride="carousel">
                <div class="carousel-indicators sticky-top">
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class=" active" aria-current="true" aria-label="Suedois – Deep Tissue"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Lomi-Lomi"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Sportif"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Kobido"></button>
                    
                </div>                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card text-center">
                                <div class="card-header py-4 text-warning">
                                    <h3 class="my-0 fw-normal">Suedois – Deep Tissue</h3>
                                </div>                    
                                <div class="card-body ">                        
                                    <ul class="p-0">
                                        <li class="p-3"><b>Massage Deep Tissue 30min – 35€</b></br> Massage ciblé sur une zone en particulier</li>
                                        <li class="p-3"><b>Massage Deep Tissue 1h – 65€</b></br>Massage ciblé sur une partie du corps (ant. et post.)</li>
                                        <li class="p-3"><b>Massage Deep Tissue 1h30min – 90€</b></br>Massage du corps entier personnalisé</li>
                                        <li class="p-3"><b>Forfait 3 massages – 240€</b></br>3 séances d’1h30 personnalisés</br>Le forfait est valable 3 mois à compter de la date d’achat</li>
                                        <li class="p-3">Le forfait est non-nominatif, vous pouvez donc les partager…</li>
                                        <i style="font-size: 0.7em;color: #747C89;"><b>*</b> Les cours non consommés sur la période de validité seront perdus. Aucun remboursement ne sera proposé.</i>
                                    </ul>
                                    <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <div class="card-header py-4 text-warning">
                                    <h3 class="my-0 fw-normal">Lomi-Lomi</h3>
                                </div>                
                                <div class="card-body">                    
                                    <ul class="p-0">
                                        <li class="p-3"><b>Massage Lomi-Lomi 30min – 35€</b></br> Massage ciblé sur une zone en particulier</li>
                                        <li class="p-3"><b>Massage Lomi-Lomi 1h – 65€</b></br>Massage ciblé sur une partie du corps (ant. et post.)</li>
                                        <li class="p-3"><b>Massage Lomi-Lomi 1h30min – 90€</b></br>Massage du corps entier personnalisé</li>
                                        <li class="p-3"><b>Forfait 3 massages – 240€</b></br>3 séances d’1h30 personnalisés</br>Le forfait est valable 3 mois à compter de la date d’achat</li>
                                        <li class="p-3">Le forfait est non-nominatif, vous pouvez donc les partager…</li>
                                        <i style="font-size: 0.7em;color: #747C89;"><b>*</b> Les cours non consommés sur la période de validité seront perdus. Aucun remboursement ne sera proposé.</i>
                                    </ul>
                                    <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <div class="card-header py-4 text-warning">
                                    <h3 class="my-0 fw-normal">Sportif</h3>
                                </div>                
                                <div class="card-body">                    
                                    <ul class="p-0">
                                        <li class="p-3"><b>Massage Sportif 30min – 35€</b></br> Choisissez une zone de votre corps à privilégier (dos; jambes; ventre…) et repartez zen et en forme !</li>
                                        <li class="p-3"><b>Massage Sportif 1h – 65€</b></br>Un travail sur mesure qui répond à vos besoins du moment tout en rééquilibrant votre corps dans son ensemble pour une récupération optimale et un mieux-être durable.</li>
                                        <li class="p-3"><b>Massage Sportif 1h30min – 85€</b></br>Pour les sportifs avec de gros besoins en décontraction musculaires et drainage des différents systèmes (nerveux / lymphatique / fibreux)</li>
                                    </ul>
                                    <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <div class="card-header py-4 text-warning">
                                    <h3 class="my-0 fw-normal">Kobido</h3>
                                </div>                
                                <div class="card-body">                    
                                    <ul class="p-0">
                                        <li class="p-3"><b>Massage Kobido 30min – 35€</b></br> Méthode de soins d'acupression qui agit par pression sur les méridiens d'acupuncture.</li>
                                        <li class="p-3"><b>Massage Kobido 1h – 65€</b></br>Massage apaisant, relaxant, drainant, éclat du visage. Combinaison d'acupressions, de pressions glissées et d'effleurements.</li>
                                    </ul>
                                    <a href="#Contact" class="btn btn-outline-dark">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>
    </div>

    <div id="Contact" class="container-fluid bgimg-6 overflow-hidden text-center">   
        <div class="row gy-4 px-5 ">
            <div class="col-sm-6 p-5 contact-form2">
                <div class="contact-form centered m-5 p-2 ">
                    <h3>Bonjour,</h3>
                    <div id="successSend" class="alert alert-success invisibles">
                        <strong>Well done!</strong>Your message has been sent.</div>
                    <div id="errorSend" class="alert alert-danger invisibles">There was an error.</div>
                    <form id="contact-form" action="php/mail.php" method="post">
                        <div class="control-group p-2">
                            <div class="controls">
                                <input class="form-control" type="text" id="name" name="name" placeholder="* Your name..." />
                                <div class="error left-align" id="err-name">Please enter name.</div>
                            </div>
                        </div>
                        <div class="control-group p-2">
                            <div class="controls">
                                <input class="form-control" type="email" name="email" id="email" placeholder="* Your email..." />
                                <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                            </div>
                        </div>
                        <div class="control-group p-2">
                            <div class="controls">
                                <textarea class="form-control" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                <div class="error left-align" id="err-comment">Please enter your comment.</div>
                            </div>
                        </div>
                        <div class="control-group p-2">
                            <div class="controls">
                                <button id="send-mail" class="btn btn-outline-dark">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 p-5">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>        
                        <p>Quai des Sports, <br> 33100 Bordeaux, France</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>koulouf@hotmail.fr</p>
                    </li>        
                    <li>     
                        <a class="text-white mx-3" target="_blank" href="https://www.instagram.com/crooked_u/?hl=fr">
                            <i class="fab fa-instagram mt-4 fa-3x"></i>
                        </a>
                        <a class="text-white mx-3" target="_blank" href="https://www.facebook.com/Koulouf/">
                            <i class="fab fa-facebook mt-4 fa-3x"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.4522316734196!2d-0.5617593844635975!3d44.83272287909856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d3c01a6fe9%3A0x5495889f790cb72!2sCroOked%20Movement%20Practice!5e0!3m2!1sfr!2sfr!4v1658957991377!5m2!1sfr!2sfr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>        
    </div>
    <!-- Footer section start -->

    <footer class="text-center bg-dark text-white">
        <div class="col-md-12 text-center">      
            <span>&copy;2022  by <a class="text-white" href="https://movement-practice-crooked.com">CroOked Movement Practice</a></span>
        </div>
    </footer>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->
    <div class="scrollup btn btn-outline-secondary">
        <a href="#">
        <i class="fas fa-duotone fa-angles-up "></i>
        </a>
    </div>
    <!-- ScrollUp button end -->
    <!-- ************************** JAVASCRIPT *************************** -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-inview@1.1.2/jquery.inview.min.js"></script>	
    <script type="text/javascript" src="js/test.js"></script>
</body>
</html>
