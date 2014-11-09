<?php

/* IntranetAdminBundle::layout.html.twig */
class __TwigTemplate_e9dfb0f5704c42fde99a26e4bc6f0e31243c9531de00b758a9b5d50d951b2744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::intranet-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'connected' => array($this, 'block_connected'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::intranet-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil de l'administrateur";
    }

    // line 4
    public function block_connected($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "    
    

     <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">View All</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        </li>
                    </ul>
                </li>

            </ul>


";
        } else {
            // line 114
            echo "<ul class=\"nav navbar-right top-nav\">
<li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
</ul>
    
";
        }
        // line 119
        echo "
   

";
    }

    // line 125
    public function block_menu($context, array $blocks = array())
    {
        // line 126
        echo "
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
   

                <ul class=\"nav navbar-nav side-nav\">
                    <li>
                        
                         
  
    
     <form role=\"form\" method=\"get\" action=\" ";
        // line 136
        echo $this->env->getExtension('routing')->getPath("intranet_admin_recherche");
        echo " \">
        <div class=\"input-group\">
           <span class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\">Go!</button>
      </span> 
      <input type=\"text\" name=\"q\" class=\"form-control\">
       </div>
     </form>
   <!-- /input-group -->
 <!-- /.col-lg-6 -->

                    </li>
                    <li >
                        <a href=\" ";
        // line 149
        echo $this->env->getExtension('routing')->getPath("intranet_admin_accueil");
        echo " \"><i class=\"fa fa-fw fa-home\"></i> Home </a>
                    </li>
                    

                    <li class=\"active-\">
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#etudiantsBlock\"><i class=\"fa fa-fw fa-user fa-1x\"></i> Etudiants <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"etudiantsBlock\" class=\"collapse\">
                        <li>
                                <a href=\" ";
        // line 157
        echo $this->env->getExtension('routing')->getPath("intranet_admin_stat_etudiant");
        echo " \"> 
                                <i class=\"fa fa-fw fa-bar-chart-o\"></i> Détails étudiants
                                <span class=\"details\">Les statistiques des étudiants</span>
                                </a>

                            </li>
                        \t<li>
                                <a href=\" ";
        // line 164
        echo $this->env->getExtension('routing')->getPath("intranet_admin_ajout_etudiant");
        echo " \"> 
                                <i class=\"fa fa-fw fa-plus\"></i> Nouvel étudiant
\t\t\t\t\t\t\t\t<span class=\"details\">Ajouter les détails d'un étudiant</span>
                                </a>

                            </li>
                            <li class=\"active\">
                                <a href=\" ";
        // line 171
        echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_etudiant");
        echo " \"> <i class=\"fa fa-fw fa-list\"></i> liste étudiants
                                <span class=\"details\">Voir les détails des étudiants</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"active-\">
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#classBlock\"><i class=\"fa fa-fw fa-university fa-1x\"></i> Les classes <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"classBlock\" class=\"collapse\">
                            <li>
                                <a href=\" ";
        // line 182
        echo $this->env->getExtension('routing')->getPath("intranet_admin_ajout_classe");
        echo " \"> 
                                <i class=\"fa fa-fw fa-plus\"></i> Nouvelle classe
                                <span class=\"details\">Ajouter une classe </span>
                                </a>

                            </li>
                            <li class=\"active\">
                                <a href=\" ";
        // line 189
        echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_classe");
        echo " \"> <i class=\"fa fa-fw fa-list\"></i> liste des classe
                                <span class=\"details\">Voir les détails des classes</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#professeurBlock\"><i class=\"fa fa-fw fa-user\"></i> Professeurs <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"professeurBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\" ";
        // line 200
        echo $this->env->getExtension('routing')->getPath("intranet_admin_ajout_professeur");
        echo " \">
                                 <i class=\"fa fa-fw fa-plus\"></i> Nouveau professeur
                                <span class=\"details\">Ajouter les détails d'un professeur</span>
                                 </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_professeur");
        echo "\"> 
                                <i class=\"fa fa-fw fa-list\"></i> liste des professeurs
<span class=\"details\">Liste des professeurs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li>
                     <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#coursBlock\"><i class=\"fa fa-fw fa-book\"></i> Cours <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"coursBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus\"></i> Nouveau cours</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste cours</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#evaluationBlock\"><i class=\"fa fa-fw fa-edit\"></i> Evaluations <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"evaluationBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus\"></i> Nouvelle évaluation</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste évaluations</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#emploidetempsBlock\"><i class=\"fa fa-fw fa-calendar\"></i> Emplois de temps <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"emploidetempsBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus-circle\"></i> Nouvelle évaluation</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste évaluations</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li> -->
                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#comptabiliteBlock\"><i class=\"fa fa-fw fa-money\"></i> Comptabilité <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"comptabiliteBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus\"></i> Nouvelle évaluation</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste évaluations</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#librairieBlock\"><i class=\"fa fa-fw fa-bank\"></i> Librairie <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"librairieBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus\"></i> Nouvelle évaluation</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste évaluations</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#gerercompteblock\"><i class=\"fa fa-fw fa-users\"></i> Gérer compte <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"gerercompteblock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus-square\"></i> Nouvelle évaluation</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste évaluations</a>
                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-bookmark\"></i> type évaluations</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\" ";
        // line 298
        echo $this->env->getExtension('routing')->getPath("intranet_admin_parametage");
        echo " \"><i class=\"fa fa-fw fa-gears\"></i> Parametrage</a>
                    </li>
                    <li>
                        <a href=\"blank-page.html\"><i class=\"fa fa-fw fa-comments-o\"></i> Forum</a>
                    </li>
                </ul>
            </div>
     ";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 298,  285 => 206,  276 => 200,  262 => 189,  252 => 182,  238 => 171,  228 => 164,  218 => 157,  207 => 149,  191 => 136,  179 => 126,  176 => 125,  169 => 119,  162 => 115,  159 => 114,  147 => 105,  131 => 92,  44 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
