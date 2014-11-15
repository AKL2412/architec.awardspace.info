<?php

/* IntranetAdminBundle:Classe:prof-de-matiere.html.twig */
class __TwigTemplate_aec51a8b5876e2404fbfa7f3f63d4d1ac37ce62042570313d7cd4635f8f59804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
</head>
<body>
";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "professeurs", array())) > 0)) {
            // line 8
            echo "
";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "professeurs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm"]) {
                // line 10
                echo "\t";
                $context["professeur"] = $this->getAttribute($context["pm"], "professeur", array());
                // line 11
                echo "\t<div type=\"professeur\" class=\"data-case-move label label-info\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()), "html", null, true);
                echo "\">
\t\t";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
                echo "
\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
<div>
\tPas de professeurs pour cette matière
</div>

";
        }
        // line 22
        echo "<script type=\"text/javascript\">
\t\$('.data-case-move').draggable({
\t\trevert : true,
\t\trevertDuration: 0 
\t});
</script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Classe:prof-de-matiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  56 => 16,  44 => 12,  39 => 11,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
