<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato">
    <script src="jaquery.js"> </script>
    <script src="js/script.js"></script>
    <link rel="styleheet" href="css/style.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Loto" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60" >
    <?php include"header.php"?>
    <section id="about" class="container-fluid">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="img/me.jpg" alt="LANKOANDE Urbain" class="img-circle">
        </div>
        <div class="heading">
            <h1>Hello, c'est moi Urbain</h1>
            <h3>Programmeur, Développeur web & UI/UX Designer</h3>
            <a href="docs/mon_Cv.pdf" target="_blank" class="button1">Télécharger CV</a>
        </div>
    </section>

    <section id="skills">
        <div class="red-divider"> </div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                            <h5>HTML 95%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <h5>CSS 80%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            <h5>JAVASCRIPT 50%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>PHP 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                            <h5>BOSOTSTRAP  55%</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%">
                            <h5>PYTHON 67%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <h5>C 60%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                            <h5>C++ 55%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            <h5>JAVA 40%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                            <h5>ANGULAR 25%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience">
        <div class="container">
            <div class="white-divider"> </div>
            <div class="heading">
                <h2>Maîtrise de Logiciel </h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon "><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/></svg></span>
                    </div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Base de données</h3>
                            </div>
                            <div class="red-divider"></div>
                            <div class="timeline-body">
                                <p>MSQL</p>
                                <p>Oracle</p>
                            </div>
                        </div>
                    </div> 
                </li>

                <li>
                <div class="timeline-badge"><span class="glyphicon "><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/></svg></span>
                    </div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Systèmes d'Exploitation </h3>
                                <div class="red-divider"></div>
                            </div>
                            <div class="timeline-body">
                                <p>Windows</p>
                                <p>Linux (UBUNTU, KALI)</p>
                            </div>
                        </div>
                    </div> 
                </li>
                <li>
                <div class="timeline-badge"><span class="glyphicon "><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/></svg></span>
                    </div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Logiciels & Outils</h3>
                                <div class="red-divider"></div>
                            </div>
                            <div class="timeline-body">
                                <p>Visual Studio, Qt, SWI-Prolog</p>
                                <p>Pycharm, Code Block, Sublime text</p>
                            </div>
                        </div>
                    </div> 
                </li>

                <li>
                <div class="timeline-badge"><span class="glyphicon "><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/></svg></span>
                    </div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Logiciels & Outils</h3>
                                <div class="red-divider"></div>
                            </div>
                            <div class="timeline-body">
                                <p>Xampp, Wamp</p>
                                <p>Packet Tracer, Microsoft Office</p>
                                <p>Githut, Star UML</p>
                                <p>Adobe XD, Adobe Photoshop</p>
                            </div>
                        </div>
                    </div> 
                </li>

            </ul>
        </div>
    </section>
    <section id="education">
        <div class="container">
        <div class="red-divider"> </div>
            <div class="heading">
                <h2>Education </h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2006 - 2012</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Ecole Primaire Yenoutougri de Bogandé</h3>
                        <h4>diplôme de CEP</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Générale (Primaire)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2013 - 2016</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Lycee Municipal Bantia de Bogandé</h3>
                        <h4>diplôme de BEPC</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Générale</p>
                        <p>(Premier cycle)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2017 - 2021</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Lycee Provincial de Bogandé</h3>
                        <h4>diplôme de Baccalauréat</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Scientifique</p>
                        <p>(Second cycle)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2021 - 2023</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Université Aube Nouvelle</h3>
                        <h4>Licence 2 Technologie du Génie Informatique</h4>
                        <div class="red-divider"></div>
                        <p>Programmation</p>
                        <p>web Développement</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2022 </h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Apprendre-a-code.com</h3>
                        <h4>Formation online "Développeur web"</h4>
                        <div class="red-divider"></div>
                        <p>Bootstrap, Jquery, Javascript, Angular,Responsive Design</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2022</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Orange Digital Center</h3>
                        <h4>Formation UI/UX Design</h4>
                        <div class="red-divider"></div>
                        <p>Développement de maquette </p>
                        <p>Et Prototipe</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contact">
        <div class="container" >
            <div class="white-divider"></div>
            <div class="heading" >
                <h2>Contact</h2>
            </div>
            <div class="row" >
                <div class="col-lg-10 col-lg-offset-1" >
                    <form id="contact-form" action="" role="form" method="post">
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="firstname">Prénom<span class="blue" > *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="votre Prenom" >
                                <p class="comments"></p>
                            </div>
                            
                            <div class="col-md-6" >
                                <label for="name">Nom<span class="blue" >*</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="votre Nom" >
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6" >
                                <label for="email">Email<span class="blue" >*</span></label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="votre e-mail" >
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6" >
                                <label for="phone">téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="votre Téléphone" >
                                <p class="comments" ></p>
                            </div>
                            <div class="col-md-12" >
                                <label for="message">Message<span class="blue" >*</span></label>
                                <textarea name="message" id="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                                <p class="comments" ></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button2" value="Envoyer" >
                            </div>
                        </div>
                        <div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="text-center">
    <a href="#about">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>    
    <h5>©️ 2023 LANKOANDE Y. Urbain [ <a href="mailto:lankoandeurbain8@gmail.com">lankoandeurbain8@gmail.com</a> ]</h5>
</footer>
</html>