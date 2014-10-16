<?php

/* IntranetAdminBundle:Default:accueil.html.twig */
class __TwigTemplate_7830aac795d9feb7c1af6b7479b990f91097292bd4bf3192e53feba9aa271095 extends Twig_Template
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
  <h1>Accueil Admin</h1>
  <p>...</p>
  <p class=\"btn btn-primary btn-lg\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "password", array()), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:accueil.html.twig";
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
