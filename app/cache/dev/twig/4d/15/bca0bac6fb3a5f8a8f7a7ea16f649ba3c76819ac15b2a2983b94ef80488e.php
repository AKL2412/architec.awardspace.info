<?php

/* IntranetAdminBundle:Default:auteur.html.twig */
class __TwigTemplate_4d15bca0bac6fb3a5f8a8f7a7ea16f649ba3c76819ac15b2a2983b94ef80488e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"jumbotron\">
  <h1>Les auteurs !</h1>
  <p>...</p>
  <p class=\"btn btn-primary btn-lg\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "password"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:auteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,);
    }
}
