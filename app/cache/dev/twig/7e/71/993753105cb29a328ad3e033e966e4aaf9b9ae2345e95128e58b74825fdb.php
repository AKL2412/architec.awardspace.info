<?php

/* IntranetAdminBundle:Etudiant:definirclasse.html.twig */
class __TwigTemplate_7e71993753105cb29a328ad3e033e966e4aaf9b9ae2345e95128e58b74825fdb extends Twig_Template
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
        echo "Définition de classe |";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo "
<select>
\t<optgroup label=\"Prémiere année\">
\t\t<option>b</option>
\t\t<option>b</option>
\t</optgroup>
\t<optgroup label=\"Deuxième année\">
\t\t<optgroup label=\"Informatique\">
\t\t
\t\t<option>a</option>
\t\t<option>a</option>
\t\t
\t\t</optgroup>
\t\t<optgroup label=\"Statistiques\">
\t\t
\t\t<option>s</option>
\t\t<option>s</option>
\t\t
\t</optgroup>

\t</optgroup>
</select>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:definirclasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  37 => 3,  29 => 2,);
    }
}
