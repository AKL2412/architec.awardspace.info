<?php

/* IntranetAdminBundle:Classe:voir.html.twig */
class __TwigTemplate_d46811a19fb83519cec5a22b75279775c46c5a2a179f16b8b7d431d1869f3c88 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo " | Consultation de classe";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((!(null === (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe"))))) {
            // line 5
            echo "
\t\t<p >
\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "\t\t\t<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</p>
\t\t<div class=\"col-md-12 col-sm-12 \">
\t\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"pre-nom col-md-8 col-sm-4 col-xs-12\">
\t\t\t\t\t<h2><u>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
            echo "</u></h2>
\t\t\t\t\t<i class=\"fa-quote-left fa\"></i>
\t\t\t\t\t<strong>
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "filiere", array()), "nom", array()), "html", null, true);
            echo " 
\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "niveau", array()), "nom", array()), "html", null, true);
            echo "
\t\t\t\t\t</strong>
\t\t\t\t\t<i class=\"fa-quote-right fa\"></i>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-8 col-xs-12 text-right\">
\t\t\t\t<a class=\"badge\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "anneescolaire", array()), "annee", array()), "html", null, true);
            echo "</a>
\t\t\t\t
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_classe", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_classe");
            echo "\">la liste des classes</a>

\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\tDescription
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "description", array()), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\tEmplois de temps
\t\t\t\t\t\t<a class=\"btn btn-info btn-xs\" 
\t\t\t\t\t\thref=\" ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_planning", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()))), "html", null, true);
            echo " \"
\t\t\t\t\t\tstyle=\"float:right\" 
\t\t\t\t\t\t>Ajouter un emploi de temps</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 54
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array())) > 0)) {
                // line 55
                echo "\t\t\t\t\t\t\t<table class=\"table table-bordered table-condensed table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de debut</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td> ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "nom", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 68
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datedebut", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datefin", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 71
                    if ($this->getAttribute($context["plan"], "complet", array())) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-xs\" 
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTerminé
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_planning_content", array("id" => $this->getAttribute($context["plan"], "id", array()))), "html", null, true);
                        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleter
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<div class=\"row\">
\t<div class=\"panel \">
\t\t<div class=\"panel-heading\">
\t\t<h2>
\t\t\t<i class=\"fa-users fa\"></i>
\t\t";
            // line 101
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "etudiants", array())), "html", null, true);
            echo " étudiant(s) 
\t\t</h2>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
            // line 105
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "etudiants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ce"]) {
                // line 106
                echo "\t\t\t\t";
                $context["etud"] = $this->getAttribute($context["ce"], "etudiant", array());
                // line 107
                echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"col-md-5 image-profil\">
\t\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_etudiant", array("id" => $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "id", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t</div>
\t</div>
</div>

<div class=\"progress\">
  <div class=\"progress-bar  progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
    <span class=\"sr-only\">45% Complete</span>
  </div>
</div>
\t";
        }
        // line 128
        echo "\t

\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Classe:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 128,  251 => 118,  238 => 113,  234 => 112,  227 => 109,  223 => 107,  220 => 106,  216 => 105,  209 => 101,  197 => 91,  192 => 88,  184 => 85,  175 => 80,  165 => 72,  163 => 71,  158 => 69,  154 => 68,  150 => 67,  147 => 66,  143 => 65,  131 => 55,  129 => 54,  121 => 49,  108 => 39,  94 => 28,  90 => 27,  85 => 25,  76 => 19,  72 => 18,  66 => 15,  59 => 10,  50 => 8,  46 => 7,  42 => 5,  39 => 4,  36 => 3,  29 => 2,);
    }
}
