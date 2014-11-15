<?php

/* ::internet-layout.html.twig */
class __TwigTemplate_e09e55bd3c3927ff16b5fe5567d2e1232cec4f28dcaa68e87e0d8e0c04d3c4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>institut architec de marrakech</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/grayscale.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style type=\"text/css\">
         #box-fixe{
    width: 220px;
    min-height: 300px;
    height: auto;
    position: fixed;
    top: 55px;
    left: -300px;
    z-index: 50;
}
body .panel .panel-heading {
  cursor: move;
}
    </style>

</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            echo "            <p id=\"notification\" class=\"alert ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "class"), "method"), 0, array(), "array"), "html", null, true);
            echo "\" > 
                ";
            // line 52
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\" style=\"background:##063a46\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    <i class=\"fa fa-home\"></i> 
                    <span class=\"light\">Accueil</span> 
                    <!-- <span id=\"scrolling\">100</span>
                    <span id=\"top-about\">100</span> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">architec</a>
                    </li>
                    <!-- <li>
                        <a class=\"page-scroll\" href=\"#download\">Download</a>
                    </li> -->
                    <li>
                        <a class=\"page-scroll\" href=\"#formation\">Formation</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#inscription\">E-Inscription</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Nous contacter</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#plan\">Plan</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\" ";
        // line 96
        echo $this->env->getExtension('routing')->getPath("accueil_intranet");
        echo " \">Intranet</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"\">institut architec de marrakech</h1>
                        <p class=\"intro-text\">Votre tremplin vers l'entreprise
                        </p>
                        
                    </div>
                </div>
        <div class=\"row text-align\">
            <a href=\"#about\" class=\"btn btn-circle page-scroll\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
        </div>
            </div>
        </div>
        <!-- Header Carousel -->
    
    </header>



<div class=\"row\">
    <div class=\"col-lg-2 col-md-3 hidden-sm hidden-xs\">
        <div id=\"box-fixe\">
          
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                       <i class=\"fa fa-arrow-circle-o-right\"></i> Newsletters
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            ";
        // line 140
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewsletter"]) ? $context["formNewsletter"] : $this->getContext($context, "formNewsletter")), 'form_start', array("attr" => array("role" => "form")));
        // line 142
        echo "

                            ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewsletter"]) ? $context["formNewsletter"] : $this->getContext($context, "formNewsletter")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your@mail.here")));
        echo "
                            <input type=\"submit\" class=\"btn-link\" value=\"S'inscrire\">
                            ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewsletter"]) ? $context["formNewsletter"] : $this->getContext($context, "formNewsletter")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                       <i class=\"fa fa-calendar-o\"></i> Agenda
                    </div>
                    <div class=\"panel-body\">
                        
                    </div>
                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                       <i class=\"fa fa-envelope-o\"></i> Contact Info
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\"style=\"padding-left:30px\" >
                            <img class=\"thumbnail\" src=\" ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contact.jpg"), "html", null, true);
        echo " \" width=\"150\">
                        </div>
                        <div class=\"row\">
                            <p style=\"font-size:12px\">
                                <strong>Institut ARCHITEC de Marrakech </strong>
                            Imm. Al Massira appts 11, 12, 13 rue Al Khawarizmi unité 2 Daoudiate Marrakech.<br>
                            <a href=\"mailto:i.a.m@menara.ma\" class=\"btn-a\" style=\"font-size:12px; text-align:left\"><i class=\"fa fa-envelope-o\"></i> i.a.m@menara.ma</a>
                            <br>
                            <label class=\"label label-default\"><i class=\"fa fa-phone\"></i> (212) 5 24 30 37 60 </label>
                            </p>


                        </div>
                    </div>
                </div>
           
        </div>
    </div>
<div class=\"col-lg-9 col-md-9\">

    <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-md-9\">
                <h1>Se former S'épanouir c'est dans ARCHITEC</h1>
            </div>
        </div>
    <div class=\"row caroussel-section\" >
        <div class=\"col-lg-10 col-md-9\">
            <div id=\"myCarousel-2\" class=\"carousel slide\" >
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel-2\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel-2\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel-2\" data-slide-to=\"2\"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
        <!-- <div class=\"item \">
                <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carroussel/04.jpg"), "html", null, true);
        echo "\">
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div> -->
            <div class=\"item active\">
                <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carroussel/01.jpg"), "html", null, true);
        echo "\">
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carroussel/02.jpg"), "html", null, true);
        echo "\">
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carroussel/03.jpg"), "html", null, true);
        echo "\">
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel-2\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel-2\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </div>
    </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-10 col-md-9 \">
                <h2>Qui sommes nous !</h2>

                <p>
                    L’institut Architec de Marrakech, <acronym title=\"Institut ARCHITEC de Marrakech\">IAM</acronym>, est une école de formation privée autorisée par le Ministère de l'emploi et de la formation professionnelle du Maroc. Crée en 2005,Il exerce le leadership de pionnier dans les formations professionnelles à haute valeur ajoutée, assurant une formation de qualité et de développement de compétences.
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-10 col-md-9\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Nos Filières</div>
                    <div class=\"panel-body\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"active\"><a href=\"#\">Home</a></li>
                          <li><a href=\"#\">Profile</a></li>
                          <li><a href=\"#\">Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"inscription\" class=\"content-section \">
        <div class=\"inscription-section\">
            <div class=\"container\">
                <div class=\"col-lg-10 col-md-9 \">
                <div class=\"text-align\">
                    <h2 >
                        DEMANDE DE PREINSCRIPTION 
                    </h2>
                </div>
                    
                    <p class=\"alert alert-info\">
                        Afin que votre demande d'Inscription soit prise en compte, vous devez minutieusement remplir le formulaire
                    </p>
                    <div class=\"row\">
                        ";
        // line 282
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), 'form_start', array("attr" => array("role" => "form")));
        // line 284
        echo "

                        <div class=\"form-group col-md-4\">
                            ";
        // line 288
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauinscription", array()), 'label', array("label" => "Niveau d'inscription"));
        echo "

                            ";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauinscription", array()), 'errors');
        echo "

                            ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauinscription", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"form-group col-md-4\">
                            ";
        // line 297
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "filiere", array()), 'label', array("label" => "Choisissez une filière"));
        echo "

                            ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "filiere", array()), 'errors');
        echo "

                            ";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-4\">
                            ";
        // line 305
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauscolaire", array()), 'label', array("label" => "Votre niveau scolaire "));
        echo "

                            ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauscolaire", array()), 'errors');
        echo "

                            ";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "niveauscolaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"form-group col-md-4\">
                            ";
        // line 314
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "nom", array()), 'label', array("label" => "Votre nom "));
        echo "

                            ";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "nom", array()), 'errors');
        echo "

                            ";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre nom")));
        echo "
                        </div>
                        <div class=\"form-group col-md-4\">
                            ";
        // line 322
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "prenom", array()), 'label', array("label" => "Votre prenom "));
        echo "

                            ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "prenom", array()), 'errors');
        echo "

                            ";
        // line 326
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre prenom")));
        echo "
                        </div>
                        <div class=\"form-group col-md-4\">
                            ";
        // line 330
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "email", array()), 'label', array("label" => "Votre email "));
        echo "

                            ";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "email", array()), 'errors');
        echo "

                            ";
        // line 334
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre email")));
        echo "
                        </div>
                         <div class=\"form-group col-md-3\">
                            ";
        // line 338
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "ville", array()), 'label', array("label" => "Votre ville "));
        echo "

                            ";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "ville", array()), 'errors');
        echo "

                            ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre ville")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3\">
                            ";
        // line 346
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "telephone", array()), 'label', array("label" => "Votre telephone "));
        echo "

                            ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "telephone", array()), 'errors');
        echo "

                            ";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre telephone")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3\">
                            ";
        // line 354
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "mobile", array()), 'label', array("label" => "Votre numero mobile "));
        echo "

                            ";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "mobile", array()), 'errors');
        echo "

                            ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre mobile")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3\">
                            ";
        // line 362
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "adresse", array()), 'label', array("label" => "Votre adresse "));
        echo "

                            ";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "adresse", array()), 'errors');
        echo "

                            ";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre adresse")));
        echo "
                        </div>

                        <div class=\"form-group col-md-12\">
                            ";
        // line 371
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "motivation", array()), 'label', array("label" => "Rédiger quelques lignes motivant votre choix pour ARCHITEC:"));
        echo "

                            ";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "motivation", array()), 'errors');
        echo "

                            ";
        // line 375
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), "motivation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre motivation")));
        echo "
                        </div>

                        ";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), 'rest');
        echo "
                           <div class=\"text-align\">
                            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-default\">
                            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default\">
                        </div>
                            ";
        // line 383
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPreinscription"]) ? $context["formPreinscription"] : $this->getContext($context, "formPreinscription")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section formation -->
    <section id=\"formation\" class=\"content-section text-center\">
        <div class=\"formation-section\">
            <div class=\"container\">
                <div class=\"col-lg-10 col-md-9 \">
                    <!-- <h2>Section formation</h2> -->
                    <p style=\"color:#000\">
                        L'Instiut ARCHITEC de Marrakech propose des programmes de formation professionnelle de haut niveau adaptés aux besoins du marché de l'emploi en : Dessin de batiments, Conducteur de traveaux et Inforgaphie. 
                    </p>
                </div>
            </div>
            <div> 
             
        </div>

        </div>
<div class=\"container\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">Technicien spécialisé Conducteur de Traveaux</div>
                    <div class=\"panel-body\">
                        Le conducteur de travaux est un homme de terrain responsable de plusieurs chantiers. Il contrôle toutes les étapes du chantier, depuis l’étude du dossier technique jusqu’à la réception des travaux.Il assure la phase
                        de préparation, alloue les moyens necéssaires et définit le calendrier d'exécution des travaux. 
                        Il est responsable de la qualité des travaux effectués, de la tenue des délais et du respect du budget.
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        Technicien spécialisé en dessin de batiments (cours du jour / cours du soir) 
                    </div>
                    <div class=\"panel-body\">
                        Le dessinateur en bâtiment exerce son activité en cabinet d’architecte, bureau d’études techniques ou administrations de génie civile. Il établit les plans de construction à usage d’habitation (maison individuelle ou immeuble collectif) et en fait la description. 
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- Contact Section -->
    <section id=\"contact\" class=\"container content-section text-center\">
        <div class=\"row contact-section\">
            <div class=\"col-lg-10 col-md-9 \">
                <h3>Contact Institut ARCHITEC de Marrakech</h3>

                <p>
                    LImm. Al Massira appts 11, 12, 13 rue Al Khawarizmi unité 2 Daoudiate Marrakech.

                </p>
                <p><a href=\"mailto:i.a.m@menara.ma\" class=\"btn-o\">i.a.m@menara.ma</a>
                </p>
                <ul class=\"list-inline banner-social-buttons\">
                    <li class=\"btn btn-default btn-lg\">
                      <i class=\"fa fa-phone fa-fw\"></i>  <span class=\"network-name\">(212) 5 24 30 37 60</span>
                    </li>
                    <li class=\"btn btn-default btn-o btn-lg\">
                      <i class=\"fa fa-envelope-o fa-fw\"></i>  <span class=\"network-name\">i.a.m@menara.ma</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    
    

    <!-- Section map -->
    <section id=\"plan\" class=\"content-section text-center\">
        <div class=\"plan-section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2>Localisation de IAM</h2>
                    <div id=\"map\"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class=\"container text-center\">
            <p>Copyright &copy; 2014 | institut architec de marrakech</p>
        </div>
    </footer>

    <!-- finition -->
    </div>
</div>
    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/droppable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/draggable.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/grayscale.js"), "html", null, true);
        echo " \"></script>

     <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    </script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "::internet-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  698 => 497,  690 => 492,  686 => 491,  680 => 488,  674 => 485,  670 => 484,  666 => 483,  661 => 481,  560 => 383,  552 => 378,  546 => 375,  541 => 373,  535 => 371,  528 => 366,  523 => 364,  517 => 362,  511 => 358,  506 => 356,  500 => 354,  494 => 350,  489 => 348,  483 => 346,  477 => 342,  472 => 340,  466 => 338,  460 => 334,  455 => 332,  449 => 330,  443 => 326,  438 => 324,  432 => 322,  426 => 318,  421 => 316,  415 => 314,  408 => 309,  403 => 307,  397 => 305,  391 => 301,  386 => 299,  380 => 297,  373 => 292,  368 => 290,  362 => 288,  357 => 284,  355 => 282,  295 => 225,  286 => 219,  277 => 213,  268 => 207,  224 => 166,  201 => 146,  196 => 144,  192 => 142,  190 => 140,  143 => 96,  100 => 55,  91 => 52,  86 => 51,  82 => 50,  50 => 21,  45 => 19,  41 => 18,  35 => 15,  19 => 1,);
    }
}
