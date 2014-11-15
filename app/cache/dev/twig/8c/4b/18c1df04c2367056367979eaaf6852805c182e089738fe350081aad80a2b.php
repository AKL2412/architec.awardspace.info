<?php

/* IntranetAdminBundle:Professeur:voir.html.twig */
class __TwigTemplate_8c4b18c1df04c2367056367979eaaf6852805c182e089738fe350081aad80a2b extends Twig_Template
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
        echo "voir un professeur | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((!(null === (isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur"))))) {
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
            if ((!(null === $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array())))) {
                echo "\t\t
\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"label label-success\">
\t\t\t\t\tAjouté : ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "date", array()), "d-M-Y"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_professeur", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
                echo " \">Ajouter un compte</a>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-10 col-sm-9 contenu-profil\">
\t\t\t\t
\t\t\t\t\t<div class=\"pre-nom col-md-8 col-sm-8 col-xs-7\">
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-5 text-right\">
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_professeur", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_professeur");
            echo "\">les professeurs</a>
\t\t\t\t\t</div>
\t\t\t\t
 <div class=\"row\" style=\"padding-top:20px;\">
\t\t\t\t\t 
\t\t\t\t\t <div class=\"tabbable tabs-center\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs \">
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#Information\" data-toggle=\"tab\">Informations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"#matieres\" data-toggle=\"tab\">Matières</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#témoignages\" data-toggle=\"tab\">Documents</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\" style=\"padding-top:20px;\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Information\">
\t\t\t\t\t\t\t\t<table class=\"table-condensed \">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Nom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Matricule : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "matricule", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "email", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Date de naissance : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "datenaissance", array()), "d-M-Y"), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "telephone", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td> <span class=\"label label-info\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "genre", array()), "html", null, true);
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

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"matieres\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3> <i class=\"fa-cubes fa\"></i> Les matières enseignées 

\t\t\t\t\t\t\t<a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_affecter_matiere", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
            echo " \" class=\"btn btn-default btn-xs\"
\t\t\t\t\t\t\tstyle=\"float:right\" 
\t\t\t\t\t\t\t>Ajouter des matières</a>
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<form method=\"post\" role=\"form\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "matieres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm"]) {
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                $context["fil"] = $this->getAttribute($context["pm"], "matiere", array());
                // line 122
                echo "\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t<label for=\"fil";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "nom", array()), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"fil";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()), "html", null, true);
                echo "\" id=\"fil";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pm"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Supprimer\">
\t\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-default\" value=\"Annuler\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t

\t\t</div>
\t";
        }
        // line 147
        echo "\t

\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Professeur:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 147,  257 => 128,  243 => 124,  237 => 123,  234 => 122,  231 => 121,  227 => 120,  217 => 113,  197 => 96,  190 => 92,  181 => 86,  172 => 80,  163 => 74,  154 => 68,  144 => 61,  114 => 34,  110 => 33,  102 => 30,  95 => 25,  90 => 23,  85 => 22,  79 => 19,  72 => 16,  68 => 15,  61 => 10,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  38 => 3,  29 => 2,);
    }
}
