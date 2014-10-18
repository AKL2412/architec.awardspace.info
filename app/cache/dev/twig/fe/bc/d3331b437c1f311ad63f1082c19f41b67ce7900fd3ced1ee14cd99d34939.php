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
\t\t<h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo "</h1>

\t";
        }
        // line 9
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
        return array (  52 => 9,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
