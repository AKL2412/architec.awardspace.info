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
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"><i class=\"fa fa-fw fa-home\"></i> Home</a>
                    </li>
                    

                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#etudiantsBlock\"><i class=\"fa fa-fw fa-user fa-1x\"></i> Etudiants <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"etudiantsBlock\" class=\"collapse\">
                        \t<li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-plus\"></i> Nouvel étudiant
\t\t\t\t\t\t\t\t<span class=\"details\">Ajouter les détails d'un étudiant</span>
                                </a>

                            </li>
                            <li>
                                <a href=\"#\"> <i class=\"fa fa-fw fa-list\"></i> liste étudiants</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#professeurBlock\"><i class=\"fa fa-fw fa-user\"></i> Professeurs <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"professeurBlock\" class=\"collapse\">
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
                    <li >
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
                    </li>
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
        return array (  38 => 5,  35 => 4,  29 => 2,  71 => 23,  68 => 22,  62 => 20,  60 => 19,  55 => 15,  49 => 14,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
