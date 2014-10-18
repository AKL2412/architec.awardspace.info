<?php

/* IntranetAdminBundle:Etudiant:list.html.twig */
class __TwigTemplate_f8653987ee2c919c0f38dd6e9b7942233b047ad7dd7d4335ebac969c1d48be61 extends Twig_Template
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
        echo "Liste des étudiants";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t
\t";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants"))), "html", null, true);
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
