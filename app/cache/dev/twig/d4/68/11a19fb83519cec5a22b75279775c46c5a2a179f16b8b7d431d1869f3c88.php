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
        echo "Consultation de classe";
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
\t\t\t\t<div class=\"pre-nom col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t<h4>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
            echo " </h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 col-sm-8 col-xs-12 text-right\">
\t\t\t\t<a class=\"badge\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "anneescolaire", array()), "annee", array()), "html", null, true);
            echo "</a>
\t\t\t\t
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_classe", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 21
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
            // line 32
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
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_planning", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()))), "html", null, true);
            echo " \"
\t\t\t\t\t\tstyle=\"float:right\" 
\t\t\t\t\t\t>Ajouter un emploi de temps</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 47
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array())) > 0)) {
                // line 48
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
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td> ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "nom", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 61
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datedebut", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datefin", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 64
                    if ($this->getAttribute($context["plan"], "complet", array())) {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-xs\" 
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTerminé
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_planning_content", array("id" => $this->getAttribute($context["plan"], "id", array()))), "html", null, true);
                        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleter
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 89
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
        return array (  190 => 89,  183 => 84,  178 => 81,  170 => 78,  161 => 73,  151 => 65,  149 => 64,  144 => 62,  140 => 61,  136 => 60,  133 => 59,  129 => 58,  117 => 48,  115 => 47,  107 => 42,  94 => 32,  80 => 21,  76 => 20,  71 => 18,  65 => 15,  58 => 10,  49 => 8,  45 => 7,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
