<?php

/* IntranetAdminBundle:Default:voirfiliere.html.twig */
class __TwigTemplate_56541ef5f9cf7940baf2278aa65b4edbd39965387bd80c747dc9e80bcd4159c8 extends Twig_Template
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
        // line 3
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filiere"]) ? $context["filiere"] : $this->getContext($context, "filiere")), "nom", array()), "html", null, true);
        echo " | Filière
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1> <i class=\"fa-cube fa\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filiere"]) ? $context["filiere"] : $this->getContext($context, "filiere")), "nom", array()), "html", null, true);
        echo "</h1>
<div class=\"row\">
\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\">
\t\t\tDescription
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filiere"]) ? $context["filiere"] : $this->getContext($context, "filiere")), "description", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3> <i class=\"fa-cubes fa\"></i> Les matières  </h3>
\t\t</div>
\t\t<form method=\"post\" role=\"form\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 27
            echo "
\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t<label for=\"mat";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"checkbox\" name=\"mat";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\" id=\"mat";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"supprimer\">
\t\t\t\t<input type=\"reset\" class=\"btn btn-default\" value=\"Annuler\">
\t\t\t</div>
\t\t</form>
\t\t
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:voirfiliere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  83 => 30,  77 => 29,  73 => 27,  69 => 26,  53 => 13,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
