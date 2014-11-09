<?php

/* IntranetEtudiantBundle:Default:classe.html.twig */
class __TwigTemplate_b6e17bfae2a109adc10a8919fc0488b3665bb3c63ce9bff35ab3cfc040443f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetEtudiantBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetEtudiantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Classe | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"badge\" style=\"float:right\">
\t\t\t\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "anneescolaire", array()), "annee", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "description", array()), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- <div class=\"row\">
\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\tEmplois de temps
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array())) > 0)) {
            // line 31
            echo "\t\t\t\t\t\t\t<table class=\"table table-bordered table-condensed table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de debut</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datedebut", array()), "d-M-Y"), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datefin", array()), "d-M-Y"), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div> -->

\t\t\t";
        // line 55
        if (array_key_exists("emploiDeTemps", $context)) {
            // line 56
            echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\tEmplois de temps
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 64
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array())) > 0)) {
                // line 65
                echo "\t\t\t\t\t\t\t<table class=\"table table-bordered table-condensed table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de debut</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t\t\t\t\t\t<th>Cases</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 75
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "plannings", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td> ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "nom", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datedebut", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>  ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plan"], "datefin", array()), "d-M-Y"), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["plan"], "cases", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div> 


\t\t\t\temploi de temps
\t\t\t";
        }
    }

    public function getTemplateName()
    {
        return "IntranetEtudiantBundle:Default:classe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 89,  183 => 86,  172 => 81,  167 => 79,  163 => 78,  159 => 77,  156 => 76,  152 => 75,  140 => 65,  138 => 64,  128 => 56,  126 => 55,  120 => 51,  115 => 48,  105 => 44,  101 => 43,  97 => 42,  94 => 41,  90 => 40,  79 => 31,  77 => 30,  62 => 18,  52 => 11,  47 => 9,  40 => 4,  37 => 3,  29 => 2,);
    }
}
