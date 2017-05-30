<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <title>Lize</title>

        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
        <!-- Fonts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('js/script.js') }}">


    </head>

    <body>
    <header> <!-- I used some style code in HTML, remove it for display Bootstrap default options -->
        <nav class="navbar navbar-default navbar-fixed-top" data-aos="fade-down" data-aos-duration="3000" style="background-image:url("none");background-color:rgba(229,76,124,0.521569);">
        <div class="container-fluid">
            <div class="nav navbar-nav navbar-left"><a class="navbar-brand navbar-link" href="#">
                    @if (Route::has('login'))
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Profil</a>
                            @else
                                <a href="{{ url('/login') }}">Connexion</a> |
                                <a href="{{ url('/register') }}">Inscription</a>
                            @endif
                    @endif
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/articles') }}">ARTICLES</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </div>
        </div>
        </nav>

        <div class="container">
            <div class="row" style="margin-top:232px;">
                <div class="col-md-12">
                    <h1 class="text-center" data-aos="fade-right" data-aos-duration="3000"><strong>Lize</strong></h1>
                    <p class="lead text-center2" data-aos="fade-left" data-aos-duration="3000"><em>Décrocher toutes les oportunités du monde</em> </p>
                </div>
            </div>
        </div>
        </header>

    <section id="content2-3" class="content2-3" style="background-color: #216a94">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-left">
                        <h2 class="content-title">Hire Us, We Can Help Your Business</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="box">
                    <div class="box-icon">
                        <span class="fa fa-4x fa-css3"></span>
                    </div>
                    <div class="info">
                        <h4>Important pour ton voyage : </h4>
                        <p>Fais bien attention à tes documents pendant ton voyage. Ton passeport ou ta carte d'identité sont des documents très importants.
                            Ne les donne donc à personne sous aucun prétexte. Même ta famille d'accueil peut se contenter d'une copie. Prends aussi assez
                            d'argent avec toi, ainsi que tous les numéros de téléphone importants,
                            par exemple celui de ta famille d'accueil et celui de ton ambassade. Tu es ainsi paré(e) à toutes les éventualités.</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="box">
                    <div class="box-icon">
                        <span class="fa fa-4x fa-css3"></span>
                    </div>
                    <div class="info">
                        <h4>Pendant le séjour : parler ensemble aide</h4>
                        <p>Une fois arrivé(e) dans ta famille d'accueil, parle beaucoup et souvent avec elle. Si tu as besoin de précisions sur
                            quelque chose ou si quelque chose te dérange, parle-en à ta famille d'accueil. Le plus souvent,
                            il ne s'agit que d'un malentendu ou d'une différence culturelle qui peuvent se régler par une simple conversation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="content2-3" class="content2-3" style="background-color: #216a94">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-left">
                        <h2 class="content-title">Hire Us, We Can Help Your Business</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h1 class="heading-primary">Informations importantes</h1>
        <div class="accordion">
            <dl>
                <dt>
                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Qu'est-ce qu'un au pair ?</a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                    <p>Les jeunes au pair sont des jeunes gens entre 18 et 30 ans, célibataires et sans enfants, qui partent vivre pour un temps
                        limité chez une famille d'accueil à l'étranger afin d'approfondir leurs connaissances linguistiques et culturelles.
                        Le jeune au pair peut améliorer ses connaissances linguistiques dans la famille d'accueil, découvrir une autre culture et
                        acquérir une expérience à l'étranger. En échange, le jeune au pair aide sa famille d'accueil en gardant les enfants et
                        apporte un soutien dans les tâches ménagères légères.</p>
                <dt>
                    <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                        Temps de travail du jeune au pair</a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                    <p>Dans de nombreux pays d'accueil, le temps de travail maximal des jeunes au pair est fixé par la législation en vigueur.
                        En règle générale, nous recommandons que le jeune au pair ne travaille pas plus de 30 heures par semaine (babysitting inclus) ;
                        exception faite des États-Unis, où les jeunes au pair travaillent maximum 45 heures par semaine.</p>

                    <p>Concernant le temps de travail, une certaine flexibilité est demandée aux deux parties.
                        Il peut arriver que le jeune au pair soit amené à garder les enfants un peu plus longtemps que prévu ;
                        il recevra en échange un week-end entier de libre..</p>
                </dd>
                <dt>
                    <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                        Durée d'un séjour au pair </a>
                </dt>
                <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                    <p>Un séjour au pair est toujours limité dans le temps. La plupart des jeunes au pair restent au maximum
                        une année dans une même famille. S'il n'existe pas de réglementation à ce sujet dans un pays d'accueil donné,
                        la durée du séjour est à convenir ensemble.
                        Il existe par exemple des jeunes au pair qui cherchent une famille d'accueil pendant leurs vacances d'été.</p>

                </dd>
            </dl>
        </div>
        <script>
            (function(){
                var d = document,
                        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
                        setAria,
                        setAccordionAria,
                        switchAccordion,
                        touchSupported = ('ontouchstart' in window),
                        pointerSupported = ('pointerdown' in window);

                skipClickDelay = function(e){
                    e.preventDefault();
                    e.target.click();
                }

                setAriaAttr = function(el, ariaType, newProperty){
                    el.setAttribute(ariaType, newProperty);
                };
                setAccordionAria = function(el1, el2, expanded){
                    switch(expanded) {
                        case "true":
                            setAriaAttr(el1, 'aria-expanded', 'true');
                            setAriaAttr(el2, 'aria-hidden', 'false');
                            break;
                        case "false":
                            setAriaAttr(el1, 'aria-expanded', 'false');
                            setAriaAttr(el2, 'aria-hidden', 'true');
                            break;
                        default:
                            break;
                    }
                };
//function
                switchAccordion = function(e) {
                    console.log("triggered");
                    e.preventDefault();
                    var thisAnswer = e.target.parentNode.nextElementSibling;
                    var thisQuestion = e.target;
                    if(thisAnswer.classList.contains('is-collapsed')) {
                        setAccordionAria(thisQuestion, thisAnswer, 'true');
                    } else {
                        setAccordionAria(thisQuestion, thisAnswer, 'false');
                    }
                    thisQuestion.classList.toggle('is-collapsed');
                    thisQuestion.classList.toggle('is-expanded');
                    thisAnswer.classList.toggle('is-collapsed');
                    thisAnswer.classList.toggle('is-expanded');

                    thisAnswer.classList.toggle('animateIn');
                };
                for (var i=0,len=accordionToggles.length; i<len; i++) {
                    if(touchSupported) {
                        accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
                    }
                    if(pointerSupported){
                        accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
                    }
                    accordionToggles[i].addEventListener('click', switchAccordion, false);
                }
            })();
        </script>
    </div>




    <footer id="footer" class="footer" style="background-color: #343d46">

        <div class="item dark">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center social">

                        <h2>We are EDEN Builder!</h2>

                        <span>We're social, come meet and meet us:</span><br>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

        </div><!-- /.item -->

    </footer><!-- /.footerWrapper -->



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script> <!-- pleae make sure, you have the JS code in youre JS file for animation effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script> <!-- Important for animation -->
        <script type="text/javascript">

        </script>
    </body>
</html>
