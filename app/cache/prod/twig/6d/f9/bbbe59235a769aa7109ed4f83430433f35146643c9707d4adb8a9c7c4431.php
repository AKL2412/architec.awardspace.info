<?php

/* IntranetEtudiantBundle::layout.html.twig */
class __TwigTemplate_6df9bbbe59235a769aa7109ed4f83430433f35146643c9707d4adb8a9c7c4431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::intranet-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'connected' => array($this, 'block_connected'),
            'menu' => array($this, 'block_menu'),
            'script' => array($this, 'block_script'),
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
        echo "Accueil de l'étudiant";
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
                            <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("intranet_etudiant_compte");
            echo " \"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message");
            echo "\"><i class=\"fa fa-fw fa-envelope\"></i> Messages </a>
                        </li>
                        <!-- <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li> -->
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

    // line 123
    public function block_menu($context, array $blocks = array())
    {
        // line 124
        echo "
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"activet\">
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_homepage");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> Accueil</a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-university\"></i> Ma classe <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo\" class=\"collapse\">
                            <li>
                                <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_ma_classe_actuelle");
        echo " \">
                                    Informations
                                    <span class=\"details\">
                                        Les détails: matières,...
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_ma_classe_actuelle_edt");
        echo " \">
                                    Emploi de temps
                                    <span class=\"details\">
                                        Matières-professeurs-salles-jours-heures
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href=\"bootstrap-grid.html\">
                            <i class=\"fa fa-fw fa-money\"></i> 
                            Mes règlements
                        </a>
                    </li>
                    
                    <li>
                        <a href=\" ";
        // line 161
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_compte");
        echo " \"><i class=\"fa fa-fw fa-user\"></i> Mon compte</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message");
        echo "\">
                            <i class=\"fa fa-envelope-o\"></i>
                            Messages
                        </a>
                    </li>
                </ul>
            </div>
     ";
    }

    // line 173
    public function block_script($context, array $blocks = array())
    {
        // line 174
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/appEtudiant.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "IntranetEtudiantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 174,  252 => 173,  240 => 164,  234 => 161,  212 => 142,  201 => 134,  192 => 128,  186 => 124,  183 => 123,  176 => 119,  169 => 115,  166 => 114,  154 => 105,  144 => 98,  138 => 95,  132 => 92,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  31 => 2,);
    }
}
