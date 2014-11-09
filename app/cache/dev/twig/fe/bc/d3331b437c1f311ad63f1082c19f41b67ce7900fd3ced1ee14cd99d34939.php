<?php

/* IntranetAdminBundle:Etudiant:voir.html.twig */
class __TwigTemplate_febcd3331b437c1f311ad63f1082c19f41b67ce7900fd3ced1ee14cd99d34939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "voir un étudiant";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((!(null === (isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant"))))) {
            // line 5
            echo "
\t\t<p >
";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</p>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2 col-sm-3 image-profil\">
\t\t\t<div>
\t\t\t\t";
            // line 15
            if ((!(null === $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "compte", array())))) {
                echo "\t\t
\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"label label-default\">
\t\t\t\t\tMis à jour: ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "date", array()), "d-M-Y"), "html", null, true);
                echo " 
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/default-no.png"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\" ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
                echo " \">Ajouter un compte</a>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-10 col-sm-9 contenu-profil\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"pre-nom col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-8 col-xs-12 text-right\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_etudiant");
            echo "\">les étudiants</a>
\t\t\t\t\t\t\t";
            // line 36
            $context["classe"] = $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classeActuelle", array(), "method");
            // line 37
            echo "\t\t\t\t\t\t\t";
            if ((null === (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_classe_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
                echo "\">Définir la classe actuelle</a>
\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_classe", array("id" => $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "classe", array()), "id", array()))), "html", null, true);
                echo "\" class=\"label label-primary\">
\t\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t<div class=\"row\" style=\"padding-top:20px;\">
\t\t\t\t\t 
\t\t\t\t\t <div class=\"tabbable tabs-left\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs \">
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#Information\" data-toggle=\"tab\">Informations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"#parcours\" data-toggle=\"tab\">Parcours</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#témoignages\" data-toggle=\"tab\">Documents</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tuteur\" data-toggle=\"tab\">Tuteur de l'étudiant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#urgence\" data-toggle=\"tab\">Contact d'urgence</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\" style=\"padding-top:20px;\">

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"parcours\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Classe</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Année Scolaire</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_classe", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "anneescolaire", array()), "annee", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Information\">
\t\t\t\t\t\t\t\t<table class=\"table-condensed \">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Nom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Matricule : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "matricule", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Date de naissance : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "datenaissance", array()), "d-M-Y"), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td> <span class=\"label label-info\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "sexe", array()), "html", null, true);
            echo "</span> </td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"témoignages\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\tTous les documents pour l'inscription
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tuteur\">
\t\t\t\t\t\t\t\tInformations sur le tuteur
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"urgence\">
\t\t\t\t\t\t\t\tInformations sur le tuteur à contacter en cas d'urgence
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t";
        }
        // line 162
        echo "\t

\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 162,  267 => 134,  260 => 130,  251 => 124,  242 => 118,  233 => 112,  224 => 106,  214 => 99,  203 => 90,  194 => 87,  188 => 84,  184 => 83,  180 => 81,  176 => 80,  138 => 44,  132 => 41,  127 => 40,  121 => 38,  118 => 37,  116 => 36,  112 => 35,  108 => 34,  100 => 31,  92 => 25,  87 => 23,  82 => 22,  76 => 19,  69 => 16,  65 => 15,  58 => 10,  49 => 8,  45 => 7,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
