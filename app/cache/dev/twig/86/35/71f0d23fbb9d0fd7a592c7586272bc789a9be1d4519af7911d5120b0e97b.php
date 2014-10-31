<?php

/* IntranetAdminBundle:Classe:list.html.twig */
class __TwigTemplate_863571f0d23fbb9d0fd7a592c7586272bc789a9be1d4519af7911d5120b0e97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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
        echo "Liste des classes";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"well col-md-4\">
\t\t<div class=\"form-group \">
\t\t\t<label>Choisir une année scolaire : </label>
\t\t\t<select id=\"select-annee\" class=\"form-control\">
\t\t\t\t<option value=\"\"> Année scolaire</option>
\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 11
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["an"], "annee", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["an"], "annee", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['an'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</select>
\t\t</div>
\t</div>
\t</div>
\t ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))) > 0)) {
            // line 18
            echo "
\t <div class=\"panel panel-default\">
\t \t<div class=\"panel-heading\">
\t \t\tLes classes de l'année scolaire: <div class=\"badge\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()), "html", null, true);
            echo "</div>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<table id=\"dataTables-classes\" class=\"table table-bordered table-condensed table-striped\">
\t \t<thead>
\t \t\t<tr>
\t \t\t\t
\t \t\t\t<th>Nom</th>
\t \t\t\t<th>Description</th>
\t \t\t</tr>
\t \t\t<tbody>
\t \t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 33
                echo "\t \t\t\t\t<tr>
\t \t\t\t\t\t<td>
\t \t\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_classe", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
                echo "\">
\t \t\t\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
                echo "
\t \t\t\t\t\t\t</a>
\t \t\t\t\t\t</td>
\t \t\t\t\t\t
\t \t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["classe"], "description", array()), 0, 100), "html", null, true);
                echo "...</td>
\t \t\t\t\t</tr>

\t \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t \t\t</tbody>
\t \t</thead>

\t </table>
\t \t</div>
\t </div>

\t ";
        } else {
            // line 52
            echo "\t \t\t<div class=\"alert\">
\t \t\t\tPas de classe pour l'année scolaire : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()), "html", null, true);
            echo "
\t \t\t</div>
\t ";
        }
        // line 56
        echo "\t
";
    }

    // line 58
    public function block_script($context, array $blocks = array())
    {
        // line 59
        echo "<script>
    \$(document).ready(function() {
        \$('#dataTables-classes').dataTable();
        \$('#select-annee').change(function(event) {
        \t/* Act on the event */
        \tvar value = \$(this).val();
        \tif(value !=\"\"){
        \t\tvar url = document.URL.split(\"?\");
        \t\twindow.location.replace(url[0]+\"?annee=\"+value);
        \t}
        \t
        });
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Classe:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  142 => 58,  137 => 56,  131 => 53,  128 => 52,  118 => 44,  108 => 40,  101 => 36,  97 => 35,  93 => 33,  89 => 32,  75 => 21,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  30 => 2,);
    }
}
